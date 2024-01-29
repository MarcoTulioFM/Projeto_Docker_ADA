<?php
$servername = "db";
$username = "marcotfm";
$password = "2474";
$database = "server";

// Criar conexão


$link = new mysqli($servername, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}else{
    echo "Deu bom";
}

?>