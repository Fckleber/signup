<?php
$servename = "localhost";
$name = "root";
$password = "";
$db_name = "db";
$conn = new mysqli($servename, $name, $password, $db_name, 3306);
if($conn->connect_error){
    die("Conexão falhou".$conn->connect_error);
}
echo "Conetado!";

?>