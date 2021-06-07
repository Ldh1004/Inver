<?PHP
include "candado.php";
?>
<HTML>
<HEAD>
       <META http-equiv="Content-Type" content="text/html; charset=utf-8"/>
       <TITLE>SITIO WEB DE INVERNADERO</TITLE>
</HEAD>
<BODY background="HG.jpg">
<CENTER><BR><H1>ACTUALIZACIÓN EN LA BD</H1>
<BR>
<?php   
include 'conexion.php';
   
$id=$_POST['i'];
$tip= $_POST ['t'];
$nCol= $_POST ['C'];
$Ncien= $_POST ['Ci'];
$temp= $_POST ['tp'];
$lum= $_POST ['l'];
$hdd= $_POST ['hU'];
$dix= $_POST ['dx'];
$solu= $_POST ['s'];

$conexion -> query("UPDATE catalogoespecies SET tipoCultivo='$tip',nombreColoquial='$nCol',nombreCientifico='$Ncien',temperatura='$temp',luminosidad='$lum',humedadAmbiental='$hdd',dioxidoCarbono='$dix',solutosNecesarios='$solu' WHERE idEspecie='$id'")
            or die("ERROR AL ACTUALIZAR LOS DATOS");

   echo "DATOS CORRECTAMENTE ACTUALIZADOS";
?>
<BR><BR><BR><A HREF="Menu.php">INICIO</A>
<BR><BR><BR><A HREF="actualizar.php">REGRESAR</A>
</CENTER>
</BODY>
</HTML>