<?PHP
include "candado.php";
?>
<HTML>
<HEAD>
      <TITLE>SITIO DE MONITOREO DE INVERNADERO</TITLE>
</HEAD>
<BODY background="hu.jpg">
<CENTER><BR><BR>
      <FONT SIZE="8" COLOR="BLACK" FACE="CAMBRIA"> REGISTRAR ESPECIE</FONT>
      <BR><BR><BR>
      <FONT SIZE="5" COLOR="BLACK" FACE="CAMBRIA"> 
      
      <FORM ACTION= "registrarBD.php" METHOD="POST">
            <LABEL FOR="idEspecie">ID_ESPECIE
            <INPUT TYPE="NUMBER"  ID="idEspecie" NAME="idE" READONLY />
            </LABEL>
<BR>
            <LABEL FOR="tipo">TIPO DE CULTIVO
            <INPUT TYPE="TEXT"  ID="tipo" NAME="tipoC" REQUIRED PLACEHOLDER="Introduce" />
            </LABEL>
<BR>
            <LABEL FOR="nombreColoquial">NOMBRE COLOQUIAL
            <INPUT TYPE="TEXT"  ID="nombreColoquial" NAME="nCol" REQUIRED PLACEHOLDER="Introduce" />
            </LABEL>
<BR>
            <LABEL FOR="nombreCientifico">NOMBRE CIENTIFICO	
            <INPUT TYPE="TEXT"  ID="nombreCientifico" NAME="nCien" REQUIRED PLACEHOLDER="Introduce" />
            </LABEL>
<BR>
            <LABEL FOR="Temperatura">TEMPERATURA
            <INPUT TYPE="TEXT"  ID="Temperatura" NAME="temp" REQUIRED PLACEHOLDER="Introduce" />
            </LABEL>
<BR>
            <LABEL FOR="luminosidad">LUMINOSIDAD
            <INPUT TYPE="TEXT"  ID="luminosidad" NAME="lum" REQUIRED PLACEHOLDER="Introduce" />
            </LABEL>
<BR>
            <LABEL FOR="humedadAmbiental">HUMEDAD AMBIENTAL
            <INPUT TYPE="TEXT"  ID="humedadAmbiental" NAME="hA" REQUIRED PLACEHOLDER="Introduce" />
            </LABEL>
<BR>
            <LABEL FOR="dioxidoCarbono">DIOXIDO DE CARBONO
            <INPUT TYPE="TEXT"  ID="dioxidoCarbono" NAME="dioxido" REQUIRED PLACEHOLDER="Introduce" />
            </LABEL>
<BR>
            <LABEL FOR="solutosNecesarios">SOLUTOS NECESARIOS
            <INPUT TYPE="TEXT"  ID="solutosNecesarios" NAME="solutos" REQUIRED PLACEHOLDER="Introduce" />
            </LABEL>
            <BR><BR><BR>
           
            <INPUT TYPE="SUBMIT" VALUE="REGISTRAR" NAME="registrar">
            <INPUT TYPE="RESET" VALUE="LIMPIAR" NAME="limpiar">
     </FORM>
<BR><A HREF="Menu.php"> INICIO</A>
</FONT>
</CENTER>
</BODY>
</HTML>




      














