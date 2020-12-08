<?php
// ********** conexao *********
try{
    $pdo = new PDO("mysql:host=localhost;dbname=crudtest","root","");
  
}catch(PDOException $e){
    echo "erros no banco de dados: ".$e->getMessage();
}catch(Exception $e){
    echo "erros generico: ".$e->getMessage();
}


// ********** delete *********
$id = 17;

$sql = "DELETE FROM clientes WHERE id = $id";
$stmt = $pdo-> prepare($sql);

$stmt-> execute();


// ********** main *********