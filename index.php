<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<style>




</style>
<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
            <h5 class="my-0 mr-md-auto font-weight-normal">  <a button class="btn btn-primary" href="index.php">Página inicial</a></h5>
            <nav class="my-2 my-md-0 mr-md-3">
            
            <a href="cadastrologin.php"><input value="Cadastre-se"  class="btn btn-primary"/></a>

           
    </nav>



   <div class="container"> 
    </br>
    <h3>Login do Usuário</h3>
    <br>
    <form action="login.php" method="post" >
    Login:</br>
    <input type="text" name="login" placeholder="Digite seu login" class ="form-control"/></br>
    
    Senha:</br>
    <input type="password" name="senha" id="senha" placeholder="Digite sua senha" class = "form-control" />
     </br>
    <input type="checkbox" onclick="mostrarOcultarSenha()"> Mostrar Senha
    <script type="text/javascript" src="script.js"></script>
    </br></br>
    <input type="submit" value="Login" class="btn btn-primary"/>
    <input type="reset" value="Limpar" class="btn btn-primary"/>
    </form>
    <br>

    <?php
    if(isset($_GET["msg"])){
    echo $_GET["msg"];
    }
    ?>
</div>
</body>
</html>