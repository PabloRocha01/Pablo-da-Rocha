<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
        }
</style>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<body>
<div class="container">
<?php
      echo"
      <script>
      function excluir(id){
          if(confirm('deseja realmente excluir este produto?')){
          location.href='excluirusuario.php?id'+id;
          }
      }

      </script><br><br><br>";
    echo"<br><br><h1>Consultar Usuário</h1><hr><br><br>";
    
    include_once 'conexao.php';   
    $sql = "select * from usuario ORDER BY nome  ASC";    
    $rs = mysqli_query($con,$sql);    
    if(mysqli_num_rows($rs) > 0){
        ?>
    <input id="myInput" type="text" placeholder="Search..">
<br><br>
     
       <table table class="table table-striped">
            <tr>
                <th>Nome</th>
                <th>Login</th>
                <th>Cep</th>
                <th>Rua</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Excluir</th>
            <tr>              
        <?php        
        while($linha = mysqli_fetch_array($rs)){
            ?>
            <tbody id="myTable">
            <tr>
                <td><?php echo $linha["nome"]; ?></td>
                <td><?php echo $linha["login"]; ?></td>
                <td><?php echo $linha["cep"]; ?></td>
                <td><?php echo $linha["rua"]; ?></td>
                <td><?php echo $linha["bairro"]; ?></td>
                <td><?php echo $linha["cidade"]; ?></td>
                <td><?php echo $linha["uf"]; ?></td>       
      
            
        <td>
         <a href="excluirusuario.php?id=<?php echo base64_encode($linha["idusuario"]); ?>"  >
                         Excluir
                        </a></td>   
      
                        </tr>
        <?php          } ?>
        </table>
        <?php
    }else{
        echo"não existe produto cadastrado";    }
    mysqli_close($con);
    include_once 'rodape.php';
    ?>
  </div>
</body>
</html>