<?php
include "connectresults.php";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Resultado</title>
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

<?php
$buscar = $_POST['buscar'];
$conecta = mysql_query ("SELECT * FROM produto WHERE nome LIKE '%".$buscar."%'");
$row = mysql_num_rows ($conecta);
if($row > 0) {
	while ($linha = mysql_fetch_array($conecta)) {
		$nome = $linha ['nome'];
		$preco = $linha['preco'];
		$tipo = $linha['tipo'];
		$quantidade = $linha['quantidade'];
		$descricao = $linha['descricao'];
		$ingredienteadd = $linha['ingredienteadd'];
		echo "<strong> Nome:  </strong>".@$nome;
		echo "<br />  <br />";
			echo "<strong> Preço:  </strong>".@$preco;
		echo "<br />  <br />";	
		echo "<strong> Tipo:  </strong>".@$tipo;
		echo "<br />  <br />";
		echo "<strong> Quantidade:  </strong>".@$quantidade;
		echo "<br />  <br />";
		echo "<strong> Descrição:  </strong>".@$descricao;
		echo "<br />  <br />";
	    echo "<strong> Ingrediente Adicional:  </strong>".@$ingredienteadd;
		echo "<br />  <br />";
} 

} else {
	echo "Desculpe, O Produto não foi encontrado!";
}

?>


