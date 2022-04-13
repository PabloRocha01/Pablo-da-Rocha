<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <scrip src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></scrip>

</head>
<style>
       body{
            margin:auto;
            display:table;
        }
        .container{
            margin:auto;
            width:960px;
            float:left;
            background-color:  #1E90FF;
        }
        html{
            background-color:  #1E90FF;
        }
</style>

<script>

    var check = function () {
      if (document.getElementById('password').value ==
        document.getElementById('confirm_password').value) {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'Senhas Iguais';
      } else {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Senhas Diferentes';
      }
    }
  
function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            document.getElementById('ibge').value=(conteudo.ibge);
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
                document.getElementById('ibge').value="...";

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
<body>
           
 
<div class="container">
<?php

?>
<br><br>
<h3>Cadastro </h3>
    <hr>
    <br>
    

    <form class="formgroup" action="menu_cadastrologin.php" method="post">
Nome:<br>
<input type="text" name="nome" id="nome" class="form-control" />
<br/>
Login:<br>
<input type="text" name="login" id="login" class="form-control" />
<br/>
<label>
Senha:<br>
<input name="password" id="password" type="password" onkeyup="check();" class="form-control"/>
<br>
Repetir Senha:<br>
<input name="confirm_password" id="confirm_password" type="password" onkeyup="check();" class="form-control"/>
<span id="message" style="color: green;">Senha Iguais</span>
</label>
<br/></br>
Perfil do usuário:<br/>
            <select name="perfil" id="perfil" class="form-control">
                <option value="">Selecione</option>
                <option value="user">Usuário</option>
                <option value="adm">Administrador</option>
            
            </select>
            <br>
<h4>Endereço</h4>
<hr>

    <label>Cep:
    <input name="cep" type="text" id="cep" value="" size="10" maxlength="9" class="form-control"
               onblur="pesquisacep(this.value);" /></label><br>
    <label>Rua:
    <br>
    <input name="rua" type="text" id="rua" size="60" class="form-control"/></label><br />
        <label>Bairro:
        <br>
    <input name="bairro" type="text" id="bairro" size="40" class="form-control" /></label><br />
        <label>Cidade:
        <br>
    <input name="cidade" type="text" id="cidade" size="40" class="form-control" /></label>
        <label>Estado:
        <br>
    <input name="uf" type="text" id="uf" size="2" class="form-control"/></label><br />
        <label>IBGE:
        <br>
    <input name="ibge" type="text" id="ibge" size="8" class="form-control"/></label><br />
    <br>
    
    <input type="submit" value="Cadastrar" class="btn btn-primary"/> 
    <input type="reset" value="Excluir" class="btn btn-danger"/>

  </form>
  <br>
</div>
</body>
</html>