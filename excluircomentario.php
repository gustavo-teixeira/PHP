<?php
$conexao = mysql_connect("localhost", "root2", "root2");

if (!$conexao) die ("Erro de conexção com o servidor: ".msql_error());

$db = mysql_select_db("avaliacao1", $conexao);
if (!$db) die (' database not selected: '.mysql_error());

$id = $_GET['id'];

    if(mysql_query("DELETE FROM comentarios WHERE id_comentarios=$id")){

    echo "Comentarios removidos com sucesso! <br> <a href='javascript:history.back(-1);'>Voltar</a>";
    exit;
}else{
	echo mysql_error();
	exit;
}

?>