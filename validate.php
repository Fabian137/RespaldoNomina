<?php
include_once('Models/db.php');
$usuario=$_POST['usuario'];
$passcode=$_POST['contraseña'];

session_start();
//$_SESSION['usuario']=$usuario;

$consulta="SELECT*FROM Usuarios WHERE usuario='$usuario' and password='$passcode'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

while ($responseQ = mysqli_fetch_array($resultado)){
  if ($responseQ['Privilegio'] == "admin") {
    header("location:f-interfaz.php");
  }
  if($responseQ['Privilegio'] == "user"){
    header("location:index.php");
  }
}
if(!$filas){
  echo '<script>alert("Error de autenticación. Por favor intente de nuevo");</script>';
  header("location:login.php");
}
