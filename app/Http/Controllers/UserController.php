<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Laracasts\Flash\Flash;
@include('flash::message');

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //muestra la lista de usuarios
        Flash::info('Lista de Usuarios Registrados');
         $users = User::select('id','name', 'email as user_email','email','type')
         ->paginate(5);
        //$users=User::orderBy("id",'ASC')->paginate(5);//muestra todos los usuarios
        return view('admin.users.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //crear los usuarios
    Flash::info('Ingrese la informacion Requerida');
        return view('admin.users.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // AQUI SE VA ENVIAR A LA DB
        $user= new User($request -> all());
     //
        $user->password=bcrypt($request ->password);
        $user->type='admin';
        $user->save();
        Flash::info('EL usuario'.$user->name);
        return redirect()->route('admin.users.index');
      
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    //
        $users=User::find($id);
        return view('admin.users.edit')->with('users',$users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user=User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
         $user->type='admin';
        $user->save();
       Flash::warning('EL usuario Se edito');
       return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
        $user=  User::find($id);

        $user->delete();

        flash()->success('EL usuario'.$user->name);
       Flash::info('EL usuario'.$user->name);

        return redirect()->route('admin.users.index');
    }
}
