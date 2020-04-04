<?php
/*if($_POST)
{
    $name = $_POST["name"];
    $mail = $_POST["email"];
    $niño = $_POST["niño"];
    $niña = $_POST["niña"];
}
*/
 //conectar al server
 $host = "localhost";
 $user = "root";
 $password = "";
 $database = "pruebah";
 $name_table = "datos";

 //checar conexion
 $conexion = new mysqli($host, $user, $password, $database);
 if($conexion->connect_error){
     die("la conexion falló: " . $conexion->connect_error);
 }

 //recibir y enviar datos
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $genero = $_POST["genero"];

if(isset($_POST["submit"])){
    $sql = "INSERT INTO datos (name, email, genero)";
    $sql.= "VALUES ('".$name."','".$mail."','".$genero."')";


    if (mysqli_query($conexion, $sql)) {
        //echo"Registro ingresado correctamente";
     } else {
        echo "Error: " . $sql . "" . mysqli_error($conexion);
     }
     $conexion->close();
}

//creando session
session_start();

/*$query = "SELECT COUNT(*) as contar from datos where name = '$name' and email = '$mail' ";
$consulta = mysqli_query($conexion, $query);
$array = mysqli_fetch_array($consulta);*/

if(!isset($_SESSION['user3'])){
    $_SESSION['user3'] = $name;
    header("location: catalogo.php");
}else
echo "Datos incorrectos.";

?>
