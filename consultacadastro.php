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
        }
</style>
<body>
<?php
    echo"
    <script>
    function excluir(id){
        if(confirm('deseja realmente excluir este produto?')){
        location.href='excluir.php?id'+id;
        }
    }
    </script>";
    echo"<h1>Consultar Produto</h1>";
    include_once 'topo.php';
    include_once 'conexao.php';   
    $sql = "select * from produto ORDER BY nomedacerveja  ASC";    
    $rs = mysqli_query($con,$sql);    
    if(mysqli_num_rows($rs) > 0){
        ?>
     
       <table table class="table table-striped">
            <tr>
                <th>Nome da Cerveja</th>
                <th>Tipo de Cerveja</th>
                <th>País</th>
                <th>Categoria</th>
                <th>Atualizar</th>
                <th>Editar</th>
            <tr>               
        <?php        
        while($linha = mysqli_fetch_array($rs)){
            ?>
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
                <a href="#" onclick="excluir(<?php echo($linha["idproduto"]); ?>)" >
                        
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