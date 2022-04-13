<?php include_once 'topo.php'; 

// resgate de dados da URL
$id = base64_decode($_GET["id"]);
// montar a instrução para selecionar o registro na base de dados
$sql = "select * from produto where idproduto=".$id;
echo $id;
// abrir a conexão com o banco
include_once 'conexao.php';

// executar
$rs = mysqli_query($con,$sql);
if(mysqli_num_rows($rs)==1){
$reg = mysqli_fetch_array($rs);
}
?>
<h3>Atualizar Produto</h3>
<form class="formgroup" action="atualizar.php" method="post">
Nome da Cerveja.:<br>
<input type = "text" name = "nomedacerveja"
 id = "nomedacerveja" class = "form-control"  value = "<?php echo $reg["nomedacerveja"];?>"/>
<br/>
Tipo da Cerveja.:<br>
<input type = "text" name = "tipodacerveja" 
id = "tipodacerveja" class = "form-control"  value="<?php echo $reg["tipodacerveja"];?>"/>
<br/>
País.:<br>
<input type = "text" name = "pais"
 id = "pais" class = "form-control"  value="<?php echo $reg["pais"];?>" />
<br/>
Nota.:<br/>
<select name="categoria" id="categoria" class="form-control" >
    <option value="<?php echo $reg["categoria"]; ?>"></option>
    <option value="nota1">1</option>
    <option value="nota2">2</option>
    <option value="nota3">3</option>
    <option value="nota4">4</option>
    <option value="nota5">5</option>
</select> 
<br/><br/>
<input type="hidden" name="id" value="<?php echo $reg["idproduto"];?>"/> 
<input type="submit" value="Atualizar Produto" class="btn btn-primary"/>  
<input type="reset" value="Limpar Campos" class="btn btn-warning"/>
</form>
<?php include_once 'rodape.php'; ?>