<?PHP
include "candado.php";
?>
<HTML>
<HEAD>
       <META http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      
	<TITLE>SITIO WEB DE INVERNADERO</TITLE>
</HEAD>
<BODY background="hu.jpg">
<CENTER><BR><H1>ACTUALIZACIÓN EN LA BD</H1>
<?php   
include 'conexion.php';
   
$id=$_POST['idE'];
$tip= $_POST ['tipoC'];
$nCol= $_POST ['nCol'];
$Ncien= $_POST ['nCien'];
$temp= $_POST ['temp'];
$lum= $_POST ['lum'];
$hdd= $_POST ['hA'];
$dix= $_POST ['dioxido'];
$solu= $_POST ['solutos'];

$conexion -> query("INSERT INTO catalogoespecies VALUES(0,'$tip','$nCol','$Ncien','$temp','$lum','$hdd','$dix','$solu')")
            or die("ERROR AL INSERTAR LOS DATOS");

   echo "DATOS CORRECTAMENTE INSERTADOS";
?>
<BR><BR>
<A HREF="Menu.php">INICIO</A>
<BR><BR>
<A HREF="registrarEspecie1.php">REGRESAR</A>
</CENTER>
</BODY>
</HTML>