<?php
if(isset($_POST["nome"])){
 $nome = $_POST["nome"];
 $diretor = $_POST["diretor"];
 $genero = $_POST["genero"];

$conexao = mysql_connect("localhost", "root2", "root2");

if (!$conexao) die ("Erro de conexção com o servidor: ".msql_error());

$db = mysql_select_db("avaliacao1", $conexao);
if (!$db) die ('database not selected: '.mysql_error());

$query = "INSERT INTO filmes (nome,diretor,genero) VALUES ('$nome', '$diretor', '$genero')";

mysql_query($query, $conexao);


echo "Filme adicionado";
mysql_close();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Avaliação 1</title>
<link href="bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div>
<br>
<form class="form-group" id="filme" name="filme" method="post" action="inserirfilme.php">
    <input class="form-control" id="nome" name="nome" type="text" placeholder="Nome Filme"><br/>
    <input class="form-control" id="diretor" name="diretor" type="text" placeholder="Diretor do Filme"><br/>
    <input class="form-control" id="genero" name="genero" type="text" placeholder="Genero do Filme">
    
</form>

<a href="javascript:void(0);" onClick="javascript:filme.submit();">
<button class="btn btn-primary" type="button">Cadastrar</button>
</a>

<a href="index.php">
<button class="btn btn-primary" type="button">Listar filmes</button>
</a>
</div>

</body>
</html>