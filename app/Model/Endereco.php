<?php
namespace App\Model;

class Endereco extends Cone {
    public  function create($user_id){
        // var_dump(filter_input(INPUT_POST, FILTER_DEFAULT));
        // die();
        $rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_SPECIAL_CHARS);
        $bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS);
        $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
        $numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_SPECIAL_CHARS);
        $cep = filter_input(INPUT_POST, 'cep', FILTER_DEFAULT);
        $uf = filter_input(INPUT_POST, 'uf', FILTER_DEFAULT);
        $con = $this->criarconexao();
        $stm = $con->prepare('INSERT into endereco VALUES(DEFAULT, :rua, :bairro, :cidade, :numero, :cep, :uf, :user_id)');
        $stm->bindParam('rua', $rua);
        $stm->bindParam('bairro', $bairro);
        $stm->bindParam('cidade', $cidade);
        $stm->bindParam('numero', $numero);
        $stm->bindParam('cep', $cep);
        $stm->bindParam('uf', $uf);
        $stm->bindParam('user_id', $user_id);
        $stm->execute();
        // $stm->close
        return $stm;
    }
}