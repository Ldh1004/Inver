<?PHP
include "candado.php";
?>
<!DOCTYPE html>
<HTML>
<HEAD>
     <TITLE> ELIMINAR ESPECIE</TITLE>
</HEAD>
<BODY background="jh.jpg">
<CENTER>
       <BR>
       <FONT SIZE="8" FACE="CAMBRIA">ELIMINAR ESPECIE</FONT>
       <BR><BR><BR>
       
       <FORM ACTION="eliminarEspecie.php" METHOD="POST">
         <TABLE BORDER="0">
           <TR>
            <TD>
             <LABEL FOR="idEspecie">ID_ESPECIE
             <INPUT TYPE="NUMBER" NAME="idE" ID="idE" REQUIRED PLACEHOLDER="Introduce" MIN"1"/>
             </LABEL>
             <BUTTON TYPE="SUBMIT" NAME="buscar" VALUE="Buscar"> BUSCAR</BUTTON>
             <BUTTON TYPE="RESET" VALUE> LIMPIAR</BUTTON>
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
<br><FONT SIZE="5" FACE="CAMBRIA">ELIMINAR DATOS DE ESPECIE</FONT>

	
	<FORM ACTION="eliminarBD.php" METHOD="POST">
	<TABLE border="0">
	<TR>
		<TD>
		<LABEL FOR="idEspecie">ID_ESPECIE</LABEL>
		<INPUT TYPE="NUMBER" NAME="id" ID="id" READONLY VALUE="<?php echo $filas['idEspecie'] ?>" />
                </TD>
	</TR>

	<TR>
		<TD>
		<LABEL FOR="tipoCultivo">TIPO DE CULTIVO </LABEL>
                <INPUT TYPE="TEXT"  ID="tip" NAME="tip"  READONLY  VALUE="<?php echo $filas['tipoCultivo'] ?>" />
                </TD>
	</TR>

        <TR>
		<TD>
		<LABEL FOR="nombreColoquial">NOMBRE COLOQUIAL </LABEL>
                <INPUT TYPE="TEXT"  ID="Col" NAME="Col" READONLY  VALUE="<?php echo $filas['nombreColoquial'] ?>" />
                </TD>
        </TR>
		
        <TR>
		<TD>
		<LABEL FOR="nombreCientifico">NOMBRE CIENTIFICO</LABEL>
                <INPUT TYPE="TEXT"  ID="Cien" NAME="Cien" READONLY  VALUE="<?php echo $filas['nombreCientifico'] ?>" />
                </TD>
	</TR>

        <TR>
		<TD>
		<LABEL FOR="Temperatura">TEMPERATURA</LABEL>
                <INPUT TYPE="TEXT"  ID="tmp" NAME="tmp" READONLY  VALUE="<?php echo $filas['temperatura'] ?>" />
                </TD>
        </TR>

        <TR>
		<TD>
		<LABEL FOR="luminosidad">LUMINOSIDAD</LABEL>
                <INPUT TYPE="TEXT"  ID="lm" NAME="lm" READONLY  VALUE="<?php echo $filas['luminosidad'] ?>" />
                </TD>
        </TR>

        <TR>
		<TD>
		<LABEL FOR="humedadAmbiental">HUMEDAD AMBIENTAL </LABEL>
                <INPUT TYPE="TEXT"  ID="h" NAME="h" READONLY  VALUE="<?php echo $filas['humedadAmbiental'] ?>" />
                </TD>
	</TR>

        <TR>
		<TD>
		<LABEL FOR="dioxidoCarbono">DIOXIDO DE CARBONO</LABEL>
                <INPUT TYPE="TEXT"  ID="diox" NAME="diox" READONLY  VALUE="<?php echo $filas['dioxidoCarbono'] ?>" />
                </TD>
        </TR>

        <TR>
		<TD>
		<LABEL FOR="solutosNecesarios">SOLUTOS NECESARIOS</LABEL>
                <INPUT TYPE="TEXT"  ID="so" NAME="so" READONLY  VALUE="<?php echo $filas['solutosNecesarios'] ?>" />
                </TD>
       </TR>

                <TR>
		<TD>
		<CENTER><button type="SUBMIT">ELIMINAR</button>				
		<INPUT TYPE="button" onclick="location.replace('eliminarEspecie.php');"value="LIMPIAR"></CENTER>
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
        