<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Atualizando...</title>
<script type = "text/javascript"> </script>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css' />
<link rel= 'stylesheet' type='text/css' href="style2.css" />
</head>

<body bgcolor = #F0FFFF>
<center> <img src = "logomarca.png" border = 0> </center>
</ br>
<hr />
<p></ br>
</ br>
</ br>
<?php
include ('connectresults.php');

$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$tipo = $_POST['tipo'];
$quantidade = $_POST['quantidade'];
$descricao = $_POST['descricao'];
$ingredienteadd = $_POST['ingredienteadd'];

$atualizar = mysql_query ("UPDATE produto SET id= '$id', nome ='$nome', preco = '$preco', tipo ='$tipo', quantidade= '$quantidade', descricao ='$descricao', ingredienteadd = '$ingredienteadd', WHERE id='$id';");

if($atualizar) {
	echo 'Atualizado com Sucesso.';
}
else {
	echo 'Não foi possivel atualizar o cadastro.';

}
?>
</body>
</html>
