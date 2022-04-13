<?php
//abrir a conexão com o banco
include_once 'conexao.php';

// pegar os dados da tela 
$nomedacerveja = $_POST["nomedacerveja"];
$tipodacerveja = $_POST["tipodacerveja"];
$pais = $_POST["pais"];
$categoria = $_POST["categoria"];
$id =  $_POST["id"];

//montar a instrução de atualizar
$sql = "UPDATE produto SET nomedacerveja ='$nomedacerveja', tipodacerveja ='$tipodacerveja', pais ='$pais',categoria ='$categoria' WHERE idproduto=$id";
//executar
$rs = mysqli_query($con,$sql);
if($rs){
    //echo"Atualizado com Sucesso!";
    $msg="Atualizado com sucesso!";
}else{
    //echo"erro ao atualizar...";
    $msg="Erro ao Gravar!";
}
//fechar conexão com o banco
mysqli_close($con);

echo"<script>
    alert('".$msg."');
    location.href='consulta.php';

</script>";

?>