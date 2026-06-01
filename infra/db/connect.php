<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "sistema_simples";
$conn = new mysqli($host,$user,$pass,$db, 6608);

if($conn->connect_error){
    die("Erro na conexão");
}else{
    echo ("<p> BD: ok </p>");
}
?>