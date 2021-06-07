<HTML>
<HEAD>
  <TITLE>INVERNADERO</TITLE>
</HEAD>
<BODY BGCOLOR="AFEEEE">

<?PHP   
   include 'conexion.php';   
   
   $cta = $_POST['us'];   
   $pass = $_POST['password'];
 
   $result = $conexion -> query("SELECT usuario, contrasena FROM personal WHERE usuario='$cta' AND contrasena='$pass'")
                or die("ERROR, NO EXISTE EL USUARIO");

    if( ( $fila = $result->fetch_assoc() ) >  0)
      {
          session_start();
          $_SESSION['usuario_log'] = 'logeado';
          header("Location:Menu.php");
      }
     else 
      {
        echo "<CENTER><BR><BR><BR><H2>ACCESO NO AUTORIZADO</H2><BR><BR>";
	echo "<A HREF=Index.html><--REGRESAR</A></CENTER>"; 
        exit();       
      }
?>
</BODY>
</HTML>