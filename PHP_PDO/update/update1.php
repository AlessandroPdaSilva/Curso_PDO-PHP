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

$nome = "jessica";
$sobrenome = "oliveira";
$email = "jessica@gmail.com";
$idade = 15;

$sql = "UPDATE clientes SET nome = :n, sobrenome = :s , email = :e , idade = :i WHERE id = :id ;";

$stmt = $pdo-> prepare($sql);
$stmt-> bindValue(":n",$nome);
$stmt-> bindValue(":s",$sobrenome);
$stmt-> bindValue(":e",$email);
$stmt-> bindValue(":i",$idade);

$stmt-> bindValue(":id",9);

$stmt->execute();





// ********** main *********



