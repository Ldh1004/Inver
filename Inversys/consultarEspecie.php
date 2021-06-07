<?PHP
include "candado.php";
?>
<HTML>
<HEAD>
     <TITLE>SITIO DE MONITOREO DE UN INVERNADERO</TITLE>
</HEAD>
<BODY BGCOLOR="AFEEEE">
<CENTER><FONT SIZE ="8" FACE="CAMBRIA">CONSULTA DE ESPECIES<BR><BR></FONT>
      <TABLE BORDER="1">
        <TR>
          <TD><LABEL>IDESPECIE</LABEL</TD>
          <TD><LABEL>TIPO DE CULTIVO</LABEL</TD>
          <TD><LABEL>NOMBRE COLOQUIAL</LABEL</TD>
          <TD><LABEL>NOMBRE CIENTIFICO</LABEL</TD>
          <TD><LABEL>TEMPERATURA</LABEL</TD>
          <TD><LABEL>LUMINOSIDAD</LABEL</TD>
          <TD><LABEL>HUMEDAD AMBIENTAL</LABEL</TD>
          <TD><LABEL>DIOXIDO DE CARBONO</LABEL</TD>
          <TD><LABEL>SOLUTOS NECESARIOS</LABEL</TD>
        </TR>
     <?PHP
       include "conexion.php";
       $result=$conexion -> query("SELECT * FROM catalogoespecies")
                                 or die("NO SE LOGRO CARGAR LA CONSULTA");
       while($fila=$result->fetch_assoc())
       {
       echo "<TR>
                <TD>".$fila['idEspecie']."</TD>
                <TD>".$fila['tipoCultivo']."</TD>
                <TD>".$fila['nombreColoquial']."</TD>
                <TD>".$fila['nombreCientifico']."</TD>
                <TD>".$fila['temperatura']."</TD>
                <TD>".$fila['luminosidad']."</TD>
                <TD>".$fila['humedadAmbiental']."</TD>
                <TD>".$fila['dioxidoCarbono']."</TD>
                <TD>".$fila['solutosNecesarios']."</TD>
              </TR>";
       }
     ?>
</TABLE>
<BR><A HREF="Menu.php"> INICIO</A>
</CENTER>
</BODY>
</HTML>