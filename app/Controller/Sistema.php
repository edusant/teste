<?php
namespace App\Controller;

use App\Model\Endereco;
use App\Model\Pagamento;
use App\Model\User;

class Sistema extends User {
    function teste($request){
        require_once __DIR__.'/../views/home.php';
    }


    function cadastro(){
        // echo $request;
        $data = $this->create();
        $ende = new Endereco();
        $pag = new Pagamento();
        $pag->create($data);
        $ende->create($data);
        // var_dump($data);
        require_once __DIR__.'/../views/home.php';
    }
   
}