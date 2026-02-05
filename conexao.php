<?php
    $conn = mysqli_connect("localhost", "root", "" , "crud_simples");

    if (!$conn) {
        die("Erro de conexão: " . mysqli_connect_error());
    }
?>