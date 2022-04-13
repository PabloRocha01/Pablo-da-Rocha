<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
   .container{
       text-align: center;
   }
</style>
<body>
<div class="container">
<?php include_once 'topo.php'; ?>
 <a href="novoproduto.php"><input value="Novo Produto"  class="btn btn-primary"/></a>  
           
<a href="consulta.php"><input value="Consultar Produto" class="btn btn-primary"/></a> 

<a href="consultadousuario.php"><input value="Consultar Usuários" class="btn btn-primary"/></a> 
<br><br>
<a href="sair.php"><input value="Sair" class="btn btn-primary"/></a>
</div>
</br>
</body>
</html>