
<HTML>
<HEAD>
       <META http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      
	<TITLE>SITIO WEB DE INVERNADERO</TITLE>
</HEAD>
<BODY background="ju.jpg">
<CENTER><BR><H1>REGISTRAR EN LA BD</H1>
<?php   
include 'conexion.php';
   
$idP=$_POST['idPersonal'];
$t= $_POST ['tipoUsuario'];
$Usu= $_POST ['usuario'];
$Pas= $_POST ['pass'];
$nom= $_POST ['nombre'];
$ap= $_POST ['ap'];
$am= $_POST ['am'];
$p= $_POST ['prof'];
$fol= $_POST ['matricula'];

$conexion -> query("INSERT INTO personal VALUES(0,'$t','$Usu','$Pas','$nom','$ap','am','$p','$fol')")
            or die("ERROR AL INSERTAR LOS DATOS");

   echo "DATOS CORRECTAMENTE INSERTADOS";
?>
<BR><BR>
<A HREF="Index.html">INICIO</A>
</CENTER>
</BODY>
</HTML>