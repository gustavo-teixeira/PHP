<?php 
$conexao = mysql_connect("localhost", "root2", "root2");

if (!$conexao) die ("Erro de conexção com o servidor: ".msql_error());

$db = mysql_select_db("avaliacao1", $conexao);
if (!$db) die (' database not selected: '.mysql_error());

$select = "select * from filmes";

#$id = $_GET['id'];

$nome = $_POST["nome"];
$diretor = $_POST["diretor"];
$genero = $_POST["genero"];

if (msql_query("UPDATE filmes SET nome='$nome', diretor='$diretor', genero='$genero' WHERE id_filmes = $id")) {
	echo "Filme alterado com sucesso!";
    exit;
}else{
	echo mysql_error();
	exit;
}
?>