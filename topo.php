<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        body{
            margin:auto;
            display:table;
        }
        #container{
            margin:auto;
            width:960px;
            float:left;
        }
        #topo{            
            width:960px;
            float:left;
            height:20px;
            padding:10px;
            text-align: center;
        }
        #menu{            
            width:960px;
            float:left;
            margin-top:10px;
            margin-bottom:10px;
            text-align: center;
        }
        #menu a{            
            display:inline;
            text-decoration:none;
            padding:10px;
            color: #000;
        }
        #menu a:hover{            
            background: white;
            text-decoration:underline;
        }

    </style>
    <script>
    function excluir(id){
        if(confirm('deseja realmente excluir este produto?')){
            location.href='excluir.php?id='+id;
        }
    }
    function excluir(id){
        if(confirm('deseja realmente excluir este usuario?')){
            location.href='excluirusuario.php?id='+id;
        }
    }

    </script>
</head>
<body>
    <div id="container">
    <br><br>
        <div id="topo">
            SISTEMA DE PRODUTOS
        </div>
        <br>
        <br/>
        <div id="menu">
         
            <br>
        </div>
        <div id="conteudo">


    
