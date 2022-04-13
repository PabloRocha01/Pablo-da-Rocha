<?php
session_start();
?>
<br>
<h3>Painel do sistema</h3>
    <hr>
    
    <?php
        echo"Seja Bem Vindo(a)".$_SESSION["nome"];
     
    ?>

    <?php include_once 'topo.php'; ?>

    </br> </br>
    

<?php

    if($_SESSION["perfil"]== "adm"){
        include_once 'menu_adm.php';
    }else{
        include_once 'menu_user.php';
    }
    ?>

