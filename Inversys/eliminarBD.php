<?PHP
include "candado.php";
?>
<HTML>
<HEAD>
	<TITLE>SITIO WEB DE INVERNADERO</TITLE>
</HEAD>
<BODY background="jh.jpg">
<CENTER><BR><H1>ELIMINACION EN LA BD</H1>
<?PHP  
include 'conexion.php';
   
$id=$_POST['id'];
$tip= $_POST ['tip'];
$nCol= $_POST ['Col'];
$Ncien= $_POST ['Cien'];
$temp= $_POST ['tmp'];
$lum= $_POST ['lm'];
$hdd= $_POST ['h'];
$dix= $_POST ['diox'];
$solu= $_POST ['so'];

$conexion -> query("DELETE FROM catalogoespecies WHERE idEspecie='$id'")
            or die("ERROR AL ELIMINAR LOS DATOS");

   echo "REGISTRO ELIMINADO EXITOSAMENTE";
?>
<BR><BR>
<A HREF="Menu.php">INICIO</A>
<BR><BR>
<A HREF="eliminarEspecie.php">REGRESAR</A>
</CENTER>
</body>
</html>