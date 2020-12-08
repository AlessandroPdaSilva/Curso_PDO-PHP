<?php
// ********** conexao *********
try{
    $pdo = new PDO("mysql:host=localhost;dbname=crudtest","root","");
  
}catch(PDOException $e){
    echo "erros no banco de dados: ".$e->getMessage();
}catch(Exception $e){
    echo "erros generico: ".$e->getMessage();
}


// ********** insert ( create )*********

$pdo-> query("INSERT INTO clientes (nome,sobrenome,email,idade) VALUES ('diego','pereira','diego@gmail.com',25) ");


// ********** main *********



