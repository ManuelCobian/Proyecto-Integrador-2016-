var validar=function(){
var bandera = false;
var nombre=$('.nombre').val();
var email=$('.email').val();
var password=$('.password').val();

		if (nombre=="") {

		$(".nombre").css("border","1px solid red");
		alert("ingrese campos");
		$(".nombre").focus();
	}
		else{
		$(".nombre").css("border","1px solid #fff");
		
		$(".nombre").focus();
	}

	if (email=="") {
		$(".email").css("border","1px solid red");
		alert("ingrese campos");
		$(".password").focus();
	}
		else{
			$(".email").css("border","1px solid #fff");
		
			$(".email").focus();
		}
		if (password=="") {
		$(".password").css("border","1px solid red");
		alert("ingrese campos");
		$(".password").focus();
		}
		else{
			$(".password").css("border","1px solid #fff");
		
			$(".password").focus();
		}
		


	if(nombre != " " && email != " " && password!='' )//si el usuario esta lleno
	{
			
			if (password<=6) {
				bandera =false;
					$('.password').val('');
			
			}
				bandera = true;
			

	
			
	}

	return bandera;
}