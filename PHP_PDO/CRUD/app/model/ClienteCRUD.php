<?php

use App\model\Connect;

require_once "Cliente.php";

$connect = new Connect();

class ClienteCRUD{

    public function create(){
        
    }

    public function read($connect){

        $sql = "SELECT * FROM clientes";
        $stmt = Connect::getConnect()-> query($sql);

        $array = $stmt-> fetchAll(PDO::FETCH_ASSOC);
        
        return $array;

    }

    public function update(){

    }

    public function delete(){

    }



}

