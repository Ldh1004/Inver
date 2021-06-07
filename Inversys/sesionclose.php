<?php
  session_start();
   if(!isset($_SESSION['usuario_log']))
   {
        echo "No hay ninguna sesion iniciada";
	//esto ocurre cuando la sesion caduca        
   }
   else
   { 
     
     session_destroy();
     header("Location:Index.html");         
   }   
?>