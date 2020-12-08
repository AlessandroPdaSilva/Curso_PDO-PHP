<?php

namespace App\model;

class Connect{

    private static $connect;

    public static function getConnect(){

        if( !isset(Connect::$connect) ){
            Connect::$connect = new \PDO("mysql:host=localhost;dbname=crudtest","root","");
            return Connect::$connect;
        }else{
            return Connect::$connect;
        }

    } 

    


}

