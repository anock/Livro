<?php
// abre conexao 

$conn = mysqli_connect('localhost','root','','livro');

//define a consulta realizada 

$query = 'SELECT id , nome FROM famosos';


//envia consulta ao banco 

$result = mysqli_query($conn,$query);

if($result){
    while($row = mysqli_fetch_assoc($result)){
        echo $row['id'] . '- ' . $row['nome']."<br>";//consulta
    }
}

mysqli_close($conn); // fecha conexao 



?>

