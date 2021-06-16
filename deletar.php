<?php
include ('connectresults.php');


$id = $_POST['id'];

$query = "DELETE FROM produto WHERE id='$id'";
$banco = mysql_select_db("ifood");

$resultado = mysql_query($query) OR die(mysql_error());

if($resultado) {
	echo 'Deletado com Sucesso.';
}
else {
	echo 'Não foi possivel excluir o cadastro tente novamente.';
}

?>

<center> <a href = "deletar.html" > Voltar </a> </center>

