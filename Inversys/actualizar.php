<?PHP
include "candado.php";
?>
<!DOCTYPE html>
<HTML>
<HEAD>
     <TITLE> ACTUALIZAR ESPECIE</TITLE>
</HEAD>
<BODY background="HG.jpg">
<CENTER>
       <BR>
       <FONT SIZE="8" FACE="CAMBRIA">BUSCAR ESPECIE</FONT>
       <BR><BR><BR>
       
       <FORM ACTION="actualizar.php" METHOD="POST">
         <TABLE BORDER="0">
           <TR>
            <TD>
             <LABEL FOR="idEspecie">ID_ESPECIE
             <INPUT TYPE="NUMBER" NAME="idE" ID="idE" REQUIRED PLACEHOLDER="Introduce" MIN"1"/>
             </LABEL>
             <BUTTON TYPE="SUBMIT" NAME="buscar" VALUE="Buscar"> BUSCAR</BUTTON>
             <BUTTON TYPE="RESET">LIMPIAR</BUTTON>
             </TD>
            </TR>
           </TABLE>
         </FORM>

<?php
	
     error_reporting(E_ALL ^ E_NOTICE);

     $valorB=$_POST['buscar'];

     if($valorB=="Buscar")
     {
       include 'conexion.php';

       $idEsp = $_POST['idE'];

       $result = $conexion -> query ("SELECT * FROM catalogoespecies WHERE idEspecie='$idEsp'");   
  
       if (!($filas = $result->fetch_assoc()) > 0 )
	{
             print '<script language="JavaScript">';
             print 'alert("NO SE ENCUENTRA EL REGISTRO");';
             print '</script>';                  
	}
else{

     $result->free();
    
?>
<br><FONT SIZE="5" FACE="CAMBRIA">ACTUALIZAR DATOS DE ESPECIE</FONT>

	
	<FORM ACTION="actualizarBDI.php" METHOD="POST">
	<TABLE border="0">
	<TR>
		<TD>
		<LABEL FOR="idEspecie">ID_ESPECIE</LABEL>
		<INPUT TYPE="NUMBER" NAME="i" ID="i" READONLY VALUE="<?php echo $filas['idEspecie'] ?>" />
                </TD>
	</TR>

	<TR>
		<TD>
		<LABEL FOR="tipoCultivo">TIPO DE CULTIVO </LABEL>
                <INPUT TYPE="TEXT"  ID="t" NAME="t"  REQUIRED VALUE="<?php echo $filas['tipoCultivo'] ?>" />
                </TD>
	</TR>

        <TR>
		<TD>
		<LABEL FOR="nombreColoquial">NOMBRE COLOQUIAL </LABEL>
                <INPUT TYPE="TEXT"  ID="C" NAME="C" REQUIRED VALUE="<?php echo $filas['nombreColoquial'] ?>" />
                </TD>
        </TR>
		
        <TR>
		<TD>
		<LABEL FOR="nombreCientifico">NOMBRE CIENTIFICO</LABEL>
                <INPUT TYPE="TEXT"  ID="Ci" NAME="Ci" REQUIRED VALUE="<?php echo $filas['nombreCientifico'] ?>" />
                </TD>
	</TR>

        <TR>
		<TD>
		<LABEL FOR="Temperatura">TEMPERATURA</LABEL>
                <INPUT TYPE="TEXT"  ID="tp" NAME="tp" REQUIRED VALUE="<?php echo $filas['temperatura'] ?>" />
                </TD>
        </TR>

        <TR>
		<TD>
		<LABEL FOR="luminosidad">LUMINOSIDAD</LABEL>
                <INPUT TYPE="TEXT"  ID="l" NAME="l" REQUIRED VALUE="<?php echo $filas['luminosidad'] ?>" />
                </TD>
        </TR>

        <TR>
		<TD>
		<LABEL FOR="humedadAmbiental">HUMEDAD AMBIENTAL </LABEL>
                <INPUT TYPE="TEXT"  ID="hU" NAME="hU" REQUIRED VALUE="<?php echo $filas['humedadAmbiental'] ?>" />
                </TD>
	</TR>

        <TR>
		<TD>
		<LABEL FOR="dioxidoCarbono">DIOXIDO DE CARBONO</LABEL>
                <INPUT TYPE="TEXT"  ID="dx" NAME="dx" REQUIRED VALUE="<?php echo $filas['dioxidoCarbono'] ?>" />
                </TD>
        </TR>

        <TR>
		<TD>
		<LABEL FOR="solutosNecesarios">SOLUTOS NECESARIOS</LABEL>
                <INPUT TYPE="TEXT"  ID="s" NAME="s" REQUIRED VALUE="<?php echo $filas['solutosNecesarios'] ?>" />
                </TD>
       </TR>

                <TR>
		<TD>
		<CENTER><button type="SUBMIT">ACTUALIZAR</button>
                <INPUT TYPE="button" onclick="location.replace('actualizar.php');"value="LIMPIAR"></CENTER>
						
		<BR><BR>
		</TD>
		</TR>

                <BR><BR>
		
                			
		</TABLE>		
	</FORM>
<?PHP
}
}
?>

<BR><BR><A HREF="Menu.php">INICIO</A>
</CENTETR>
</BODY>
</HTML>
        