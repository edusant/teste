<?php
namespace App\Model;
use PDO;

abstract class Cone {
function criarconexao(){
   try {
    $pdo = new PDO("mysql:host=localhost;dbname=teste", "root", ""); 
    $pdo->exec("set names utf8");
    return $pdo;
   } catch (\Throwable $th) {
       //throw $th;
   }
}
}