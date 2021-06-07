<?php
session_start();

if($_SESSION['usuario_log'] != 'logeado')
{
  header("Location:Index.html");
  exit();
}
?>