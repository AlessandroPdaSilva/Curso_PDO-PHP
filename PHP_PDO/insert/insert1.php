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

$nome="jessica";
$sobrenome="pereira";
$email="jessica@gmail.com";
$idade="17";


$sql = "INSERT INTO clientes (nome,sobrenome,email,idade) VALUE (:n,:s,:e,:i)";
$resultado = $pdo-> prepare($sql);

$resultado-> bindValue(":n",$nome);
$resultado-> bindValue(":s",$sobrenome);
$resultado-> bindValue(":e",$email);
$resultado-> bindValue(":i",$idade);

$resultado-> execute();


// ********** main *********



