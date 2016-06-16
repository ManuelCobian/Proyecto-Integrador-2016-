<?php 
	$data = $_GET['r'];
	$link = mysql_connect('localhost', 'root', '1234') or die('No se pudo conectar: ' . mysql_error());
	mysql_query("SET character_set_results=utf8", $link); 
	mb_language('uni');
	mb_internal_encoding('UTF-8');
	mysql_select_db('pi') or die('No se pudo seleccionar la base de datos');
	mysql_query("SET NAMES 'utf8'",$link);

	$dataExplode = explode("-", $data);
	
	$idDispositivo = substr($dataExplode[0],1);
	$Temperatura = substr($dataExplode[1],1);
	$Humedad = substr($dataExplode[2],1);
	$CO2 = substr($dataExplode[3],1);
	$queryTemperatura = "INSERT INTO datoscapturados(dat_id_Dispositivo,dat_id_sensor,dat_dc_dato) VALUES('".$idDispositivo."',1,'".$Temperatura."')";
	mysql_query($queryTemperatura);
	$queryHumedad = "INSERT INTO datoscapturados(dat_id_Dispositivo,dat_id_sensor,dat_dc_dato) VALUES('".$idDispositivo."',2,'".$Humedad."')";
	mysql_query($queryHumedad);
	$queryCO2 = "INSERT INTO datoscapturados(dat_id_Dispositivo,dat_id_sensor,dat_dc_dato) VALUES('".$idDispositivo."',3,'".$CO2."')";
	mysql_query($queryCO2);
	mysql_close($link);
?>