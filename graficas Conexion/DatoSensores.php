<?php
header('Content-Type: application/json');
$pdo=new PDO("mysql:dbname=pi;host=127.0.0.1","root","1234");
switch($_GET['q']){
		// Buscar Último Dato
		case 1:
		    $resultado = array("humedad"=>0,"temperatura"=>0, "calidadAire"=>0);
		    $statement=$pdo->prepare("SELECT dat_dc_dato as humedad FROM datoscapturados WHERE dat_id_sensor=2 ORDER BY dat_id DESC LIMIT 0,1");
			$statement->execute();

			$results=$statement->fetchAll(PDO::FETCH_ASSOC);
			
			$statement2 = $pdo->prepare("SELECT dat_dc_dato as temperatura FROM datoscapturados WHERE dat_id_sensor=1 ORDER BY dat_id DESC LIMIT 0,1");
			$statement2->execute();
			$results2 = $statement2->fetchAll(PDO::FETCH_ASSOC);

		    $statement3=$pdo->prepare("SELECT dat_dc_dato as calidadAire FROM datoscapturados WHERE dat_id_sensor=3 ORDER BY dat_id DESC LIMIT 0,1");
			$statement3->execute();
			$results3=$statement3->fetchAll(PDO::FETCH_ASSOC);
			$resultado["humedad"] = isset($results[0]["humedad"])? $results[0]["humedad"]:0;
			$resultado["temperatura"] = isset($results2[0]["temperatura"])? $results2[0]["temperatura"] : 0;
			$resultado["calidadAire"] = isset($results3[0]["calidadAire"])? $results3[0]["calidadAire"] : 0;

			$json=json_encode($resultado);
			echo $json;
		break;
		// Buscar Todos los datos
		default:
			
			$statement=$pdo->prepare("SELECT dc_dato as humedad FROM datoscapturados WHERE idSensor=2 ORDER BY idDato ASC");
			$statement->execute();
			$results=$statement->fetchAll(PDO::FETCH_ASSOC);
			$json=json_encode($results);
			echo $json;
		break;
}
?>