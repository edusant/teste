<?php
namespace App\Model;

class Pagamento extends Cone {
    public  function create($user_id){
        // var_dump(filter_input(INPUT_POST, FILTER_DEFAULT));
        // die();
        $intervalo = filter_input(INPUT_POST, 'intervalo', FILTER_SANITIZE_SPECIAL_CHARS);
        $valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_SPECIAL_CHARS);
        $bandeira = $this->filtrarnull(filter_input(INPUT_POST, 'bandeira', FILTER_SANITIZE_SPECIAL_CHARS));
        $numerocartao = $this->filtrarnull(filter_input(INPUT_POST, 'numerocartao', FILTER_SANITIZE_SPECIAL_CHARS));
        $nome_banco = $this->filtrarnull(filter_input(INPUT_POST, 'nome_banco', FILTER_DEFAULT));
        $numero_conta = $this->filtrarnull(filter_input(INPUT_POST, 'numero_conta', FILTER_DEFAULT));
        $numero_agencia = $this->filtrarnull(filter_input(INPUT_POST, 'numero_agencia', FILTER_DEFAULT));
        $con = $this->criarconexao();
        $stm = $con->prepare('INSERT into pagamento VALUES(DEFAULT, :intervalo, :bandeira, 
        :valor, :numerocartao,	:user_id, :nome_banco, :numero_conta, :numero_agencia)');
        $stm->bindParam('intervalo', $intervalo);
        $stm->bindParam('valor', $valor);
        $stm->bindParam('bandeira', $bandeira);
        $stm->bindParam('numerocartao', $numerocartao) ;
        $stm->bindParam('nome_banco', $nome_banco);
        $stm->bindParam('numero_conta', $numero_conta);
        $stm->bindParam('user_id', $user_id);
        $stm->bindParam('numero_agencia', $numero_agencia);
        $stm->execute();
        // $stm->close
        return $stm;
    }

    function filtrarnull($var){
        if(isset($var)){
            return $var;
        }
        else{
          return  NULL;
        }

    }
}