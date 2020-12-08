<?php
// ********** conexao *********
try{
    $pdo = new PDO("mysql:host=localhost;dbname=crudtest","root","");
  
}catch(PDOException $e){
    echo "erros no banco de dados: ".$e->getMessage();
}catch(Exception $e){
    echo "erros generico: ".$e->getMessage();
}


// ********** select *********


// consulta
$sql = "SELECT * FROM clientes WHERE id = :id";
$stmt = $pdo -> prepare($sql);
$stmt->bindValue(":id",9);

// execute
$stmt-> execute();

// array
$resultado = $stmt-> fetch(PDO::FETCH_ASSOC);


foreach($resultado as $key => $value){
    echo "$key : $value <br>";
}




// ********** main *********

