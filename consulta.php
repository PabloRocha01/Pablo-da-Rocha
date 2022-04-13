<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>  
   
<style>
       body{
            margin: 0 auto;
            display:table;
        }
        .container{
            margin: 0 auto;
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

<br>
     
<?php
    echo"
    <script>
    function excluir(id){
        if(confirm('deseja realmente excluir este produto?')){
        location.href='excluir.php?id'+id;
        }
    }
    </script><br>";
    echo"<h1>Consultar Produto</h1>";
    include_once 'topo.php';
    include_once 'conexao.php';   
    $sql = "select * from produto ORDER BY nomedacerveja  ASC";   
    
    $rs = mysqli_query($con,$sql);    
    if(mysqli_num_rows($rs) > 0){
        ?>
    <input id="myInput" type="text" placeholder="Search..">
<br><br>
       
       <table table class="table table-striped">
            <tr>
                <th>Nome da Cerveja</th>
                <th>Tipo de Cerveja</th>
                <th>País</th>
                <th>Categoria</th>
                <th>Atualizar</th>
                <th>Excluir</th>
            <tr>               
        <?php        
        while($linha = mysqli_fetch_array($rs)){
            ?>
             <tbody id="myTable">
            <tr>
                <td><?php echo $linha["nomedacerveja"]; ?></td>
                <td><?php echo $linha["tipodacerveja"]; ?></td>
                <td><?php echo $linha["pais"]; ?></td>
                <td><?php echo $linha["categoria"]; ?></td>
                <td>
                <a href="editar.php?id=<?php echo base64_encode($linha["idproduto"]); ?>">
                Editar
                </a>
                </td>
               
                <td>
                <a href="excluir.php?id=<?php echo base64_encode($linha["idproduto"]); ?>"  >
                        
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
  
    
    
</body>
</html>