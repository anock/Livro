<?php
   
$conn = mysqli_connect('localhost', 'root','','livro');

//insere varios registros

mysqli_query($conn, "INSERT INTO famosos(id,nome)VALUES (1,'lucke skywalker')");
mysqli_query($conn, "INSERT INTO famosos(id,nome)VALUES (2,'salamander')");
mysqli_query($conn, "INSERT INTO famosos(id,nome)VALUES (3,'troompes')");
mysqli_query($conn, "INSERT INTO famosos(id,nome)VALUES (4,'limonada valor')");

//fecha conexao;

mysqli_close($conn);


?>