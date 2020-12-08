<?php
// ********** conexao *********
try{
    $pdo = new PDO("mysql:host=localhost;dbname=crudtest","root","");
  
}catch(PDOException $e){
    echo "erros no banco de dados: ".$e->getMessage();
}catch(Exception $e){
    echo "erros generico: ".$e->getMessage();
}


// ********** update *********
$id = 11;
$nome = "Diego";
$sobrenome = "oliveira";
$email = "diego@gmail.com";
$idade = 15;

$pdo-> query("UPDATE clientes SET nome = '$nome' WHERE id = 11;");




// ********** main *********



