
<?php
$nomedacerveja = $_POST["nomedacerveja"];
$tipodacerveja = $_POST["tipodacerveja"];
$pais = $_POST["pais"];
$categoria = $_POST["categoria"];
include_once 'conexao.php';
 $sql ="insert into produto values
 (NULL,'".$nomedacerveja."','".$tipodacerveja."','".$pais."','".$categoria."')";
$result = mysqli_query($con,$sql);
if($result){    //echo"Gravado com sucesso!";
        $msg ="Gravado com sucesso!";
}else{    //echo"Erro ao Gravar!";
$msg = "Erro ao Gravar";
}
mysqli_close($con);
echo"<script>
alert('".$msg."');
location.href='painel.php';
</script>";
include_once 'rodape.php';
?>