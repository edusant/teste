<?php
namespace App\Model;

class User extends Cone {
    public function create(){
        // var_dump(filter_input(INPUT_POST, FILTER_DEFAULT));
        // die();
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $cpf = filter_input(INPUT_POST, 'CPF', FILTER_SANITIZE_SPECIAL_CHARS);
        $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);
        $dataDeNascimento = filter_input(INPUT_POST, 'date_nascimento', FILTER_DEFAULT);
        $con = $this->criarconexao();
        $stm = $con->prepare('INSERT into usuario VALUES(DEFAULT, :nome, :email, :CPF, :telefone, :dataDeNascimento)');
        $stm->bindParam('nome', $nome);
        $stm->bindParam('email', $email);
        $stm->bindParam('CPF', $cpf);
        $stm->bindParam('telefone', $telefone);
        $stm->bindParam('dataDeNascimento', $dataDeNascimento);

        $stm->execute();
        return $con->lastInsertId();
    }
}