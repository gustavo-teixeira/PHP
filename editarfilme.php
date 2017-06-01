<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Avaliação 1</title>
<link href="bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php

$conexao = mysql_connect("localhost", "root2", "root2");

if (!$conexao) die ("Erro de conexção com o servidor: ".msql_error());

$db = mysql_select_db("avaliacao1", $conexao);
if (!$db) die (' database not selected: '.mysql_error());

$select = "select * from filmes";

$id = $_GET['id'];

$sql = mysql_query("SELECT * FROM filmes WHERE id_filmes = $id");

$escrever = mysql_fetch_assoc($sql);


?>


<div>
<br>
<form class="form-group" id="filme" name="filme" method="post" action="update.php">
	<input type="hidden" name="id_filme" value="<?php echo $id; ?>"><br/>
    <input class="form-control" id="nome" name="nome" type="text" value="<?php echo $escrever['nome'] ?>"><br/>
    <input class="form-control" id="diretor" name="diretor" type="text" value="<?php echo $escrever['diretor'] ?>"><br/>
    <input class="form-control" id="genero" name="genero" type="text" value="<?php echo $escrever['genero'] ?>">
   	<input type="hidden" name="id_filme" value="<?php echo $id; ?>"><br/>
	<button class="btn btn-primary" type="submit">Editar</button>

</form>


<a href="index.php">
<button class="btn btn-primary" type="button">Listar filmes</button>
</a>
</div>

</body>
</html>