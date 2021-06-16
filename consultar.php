<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Consultando...</title>
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
<p></ br>

<?php
$buscar = $_POST['buscar'];

$conecta= mysql_connect("localhost", "root", "");
$database= mysql_select_db("ifood");

$query = "SELECT * FROM produto WHERE id='$buscar'";
$resultado=mysql_query($query) OR die (mysql_error());
$count= mysql_num_rows($resultado);

if ($count>0){
	
	$row = mysql_fetch_array($resultado);
	
	$nome = $row['nome'];
	$preco = $row['preco'];
	$tipo = $row['tipo'];
	$quantidade = $row['quantidade'];
	$descricao = $row['descricao'];
	$ingredienteadd = $row['ingredienteadd'];

echo "NOME: $nome <br>
	  PREÇO: $preco <br>
	  TIPO: $tipo <br>
	  QUANTIDADE: $quantidade <br>
	  DESCRIÇÃO: $descricao <br>
	  INGREDIENTE ADICIONAL: $ingredienteadd <br>";
}
else {
	echo "Produto $buscar não encontrado!";
}
?>
<center>
</center>
</ br>
<center>
</center>
</ br>

<center> <li> <a href = "cadastro.html" > Voltar </a> </li>  </center>

</body>
</html>