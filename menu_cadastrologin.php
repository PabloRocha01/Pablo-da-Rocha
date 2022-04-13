<?php
include_once 'conexao.php';

$nome = $_POST["nome"];
$login= $_POST["login"];
$password = md5($_POST["password"]);
$perfil = $_POST["perfil"];
$cep = $_POST["cep"];
$rua = $_POST["rua"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$uf = $_POST["uf"];
$ibge = $_POST["ibge"];

 $sql ="INSERT INTO usuario VALUES (null,'$nome','$login','$password','$perfil','$cep','$rua','$bairro','$cidade','$uf',$ibge)";
$result = mysqli_query($con,$sql);
if($result){    //echo"Gravado com sucesso!";
       $msg ="Gravado com sucesso!";
}else{    //echo"Erro ao Gravar!";
$msg = "Erro ao Gravar";
}
mysqli_close($con);
echo"<script>
alert('".$msg."');
location.href='index.php';
</script>";
include_once 'rodape.php';
?>