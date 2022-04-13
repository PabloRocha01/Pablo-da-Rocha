<?php
include_once 'topo.php';
include_once 'conexao.php';

// retirar a decodificação
// base64_decode
$id = base64_decode($_GET["id"]);

$sql = "delete from usuario where idusuario =".$id;
if(mysqli_query($con,$sql)){
    //echo"Produto excluido com Sucesso!";
    $msg="Excluido com sucesso!";
}else{
    //echo"Erro ao Excluir";
    $msg="Erro ao Excluir!";
}
mysqli_close($con);
echo"<script>
    alert('".$msg."');
    location.href='painel.php';
</script>";

include_once 'rodape.php';


?>