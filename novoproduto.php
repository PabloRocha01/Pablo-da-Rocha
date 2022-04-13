<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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

</script>
<body>
<div class="container">
<?php
session_start();
?>
<br>
<h3>Painel do sistema</h3>
    <hr>
    <br><br><br>
    <h3>Novo Produto</h3>

<form class="formgroup" action="cadastrar.php" method="post">
Nome da Cerveja:<br>
<input type="text" name="nomedacerveja"
 id="nomedacerveja" class="form-control" />
<br/>
Tipo de Cerveja:<br>
<input type="text" name="tipodacerveja" 
id="tipodacerveja" class="form-control" />
<br/>
País:<br>
<input type="text" name="pais"
 id="pais" class="form-control" />
<br/>

Nota de 1 a 5:<br/>
<select name="categoria" id="categoria" class="form-control" >
    <option value="">Nota</option>
    <option value="nota1">1</option>
    <option value="nota2">2</option>
    <option value="nota3">3</option>
    <option value="nota4">4</option>
    <option value="nota5">5</option>
</select> 
<br/><br/>

<input type="submit" value="Cadastrar Produto" class="btn btn-primary"/>  
<input type="reset" value="Limpar Campos" class="btn btn-primary"/>
</form>
</div>
</body>
</html>

