<?php
include ('connectresults.php'); // inclusão para a conexão com o banco de dados

$nome = $_POST['nome']; // nome do produto.
$preco = $_POST['preco']; // preço do produto.
$tipo = $_POST['tipo']; // tipo do produto.
$quantidade = $_POST['quantidade']; // quantidade do produto (unidade).
$descricao = $_POST['descricao']; // descrição do produto.
$ingredienteadd = $_POST['ingredienteadd']; // Ingrediente adicional do produto.

$cadastrar = mysql_query ("INSERT INTO produto (nome, preco, tipo, quantidade, descricao, ingredienteadd) VALUES ('$nome', '$preco', '$tipo', '$quantidade', '$descricao', '$ingredienteadd')"); // inserção dos dados no banco.
$banco = mysql_select_db("ifood");

if($cadastrar) {
	echo 'Cadastrado com Sucesso.';
}
else {
	echo 'Não foi possivel efetuar seu cadastro.';

}

mysql_close($conecta)
?>

<p> <a href = "cadastro.html" > Voltar </a> </p>