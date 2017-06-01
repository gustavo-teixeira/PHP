<?php
$conexao = mysql_connect("localhost", "root2", "root2");

if (!$conexao) die ("Erro de conexção com o servidor: ".msql_error());

$db = mysql_select_db("avaliacao1", $conexao);
if (!$db) die (' database not selected: '.mysql_error());

$id = $_GET['id'];

#$select = "SELECT filmes.id_filmes, nome, diretor, genero, comentario, rating FROM filmes inner join comentarios on comentarios.id_filmes = filmes.id_filmes WHERE filmes.id_filmes=$id";
$select = "SELECT * FROM filmes WHERE id_filmes=$id";
$select2 = "SELECT * FROM comentarios WHERE id_filmes=$id";


$result = mysql_query($select, $conexao);
#list($id, $nome, $diretor, $genero, $comentario, $rating)  = mysql_fetch_array($result);
#echo $id."<br>".$nome."<br>".$diretor."<br>".$genero."<br>".$comentario."<br>".$rating;
$result2 = mysql_query($select2, $conexao);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Análise Adwords</title>
<link href="bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body>

<table class="table table-bordered table-hover">

<?php
		$escrever = mysql_fetch_array($result);
		echo '<tr><td>Nome Filme</td><td>'.$escrever['nome'].'</td></tr>';
		echo '<tr><td>Diretor</td><td>'.$escrever['diretor'].'</td></tr>';
		echo '<tr><td>Genero</td><td>'.$escrever['genero'].'</td></tr>';
		echo '<tr><td>Rating</td><td>Comentários</td></tr>';


	while ($escrever = mysql_fetch_array($result2)) {
		echo '<tr><td>'.$escrever['rating'].'</td>';
		echo '<td>'.$escrever['comentario'].'</td><td><a href="excluircomentario.php?id='.$escrever['id_comentarios'].'">Excluir Comentario</a></td></tr>';
	}
?>
	<tr><td>Adicionar comentário:</td><td></td></tr>
</table>

<div>
<form class="form-group" id="comentario" name="comentario" method="post" action="inserircomentario.php">
    <input class="form-control" id="comentario" name="comentario" type="text" placeholder="Comentario"><br/>
    <input class="form-control" id="rating" name="rating" type="text" placeholder="Rating">
	<input type="hidden" name="id_filme" value="<?php echo $id; ?>"><br/>
	<button class="btn btn-primary" type="submit">Cadastrar</button>
</form>

<a href="index.php"><button class="btn btn-primary" type="button">Listar filmes</button></a>

</div>

</body>
</html>

<?php
	mysql_close();
?>