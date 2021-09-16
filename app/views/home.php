<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<title>Document</title>
</head>
<body>
<form class="needs-validation p-5" method="POST" action="?route=Sistema/cadastro">
  <h1>Dados Pessoais</h1>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Nome</label>
      <input type="text" class="form-control" name="nome" id="validationTooltip01" placeholder="Joao silva..." value="" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Email</label>
      <input type="email" class="form-control" name="email" id="validationTooltip02" placeholder="exemple@exemple.com" value="" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltipUsername">CPF</label>
      <div class="input-group">
   
        <input type="text" class="form-control" name="CPF" id="validationTooltipUsername" placeholder="0135647..." aria-describedby="validationTooltipUsernamePrepend" required>
        <div class="invalid-tooltip">
          Please choose a unique and valid username.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
 
    <div class="col-md-3 mb-3">
      <label for="validationTooltip04">Data de nascimento</label>
      <input type="date" class="form-control" name="date_nascimento" id="validationTooltip04" placeholder="01/01/1995..." required>
      <div class="invalid-tooltip">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip05">Telefone</label>
      <input type="text" class="form-control" name="telefone" id="validationTooltip05" placeholder="1195733..." required>
      <div class="invalid-tooltip">
        Please provide a valid zip.
      </div>
    </div>

  

    
  </div>

  <div class="form-group">
    <h1>Endereco</h1>
    <label>Cep:
        <input name="cep" type="text" id="cep" value="" size="10" maxlength="9"
               onblur="pesquisacep(this.value);" /></label><br />
        <label>Rua:
        <input name="rua" type="text" id="rua" size="60" /></label><br />
        <label>Bairro:
        <input name="bairro" type="text" id="bairro" size="40" /></label><br />
        <label>Cidade:
        <input name="cidade" type="text" id="cidade" size="40" /></label><br />
        <label>Estado:
        <input name="uf" type="text" id="uf" size="2" /></label><br />
        <label>Número:
        <input name="numero" type="text" id="numero" size="8" /></label><br />   
  </div>

  <h1>Pagamento</h1>

  <div class="form-group">
    <label for="">Valor da doação</label>
    <input type="text"
      class="form-control" name="valor" id=""  placeholder="">
  </div>

  <div class="form-group">
      <label for="">Intervalo da doações</label>
      <select class="form-control" require name="intervalo" id="">
        <option value="Único">Único</option>
        <option value="Bimestral">Bimestral</option>
        <option value="Semestral">Semestral</option>
        <option value="Anual">Anual</option>
      </select>
    </div>

    <div class="form-group">
      <!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home">Pagar com cartão de crédito</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu1">Comprar na função débito</a>
  </li>

</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane container active" id="home">
    <div class="form-group">
      <label for=""></label>
      <select class="form-control" name="bandeira" id="">
        <option value="">Bandeira do cartão</option>
        <option value="Visa">Visa</option>
        <option value="Mastercard">Mastercard</option>
      </select>

      <div class="form-group">
        <label for="">Numero do cartão</label>
        <input type="text" class="form-control" name="numerocartao" id=""  placeholder="">
      </div>
    </div>
  </div>
  <!-- <input type="radio" name="tese" class="tab-pane container active"  id="home"> -->
  <div class="tab-pane container fade" id="menu1">

    <div class="form-group">
      <label for="">Nome do banco</label>
      <input type="text"
        class="form-control" name="nome_banco" id=""  placeholder="">
    </div>

    <div class="form-group">
      <label for="">Numero da conta</label>
      <input type="text"
        class="form-control" name="numero_conta" id=""  placeholder="">
    </div>

    <div class="form-group">
      <label for="">Numero da agencia</label>
      <input type="text"
        class="form-control" name="numero_agencia" id=""  placeholder="">
    </div>

  </div>
</div>         
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>
</body>

<script>
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>
</html>