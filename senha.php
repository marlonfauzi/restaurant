<!-- PHP -->

<?php
  ob_start();
 
  $usuario = 'marlonfauzi'; //armazena o usuario dentro da variável $usuario
  $senha = usbw; //armazena a senha dentro da variável $senha
 
if ($usuario == $_POST['usuario'] && $senha == $_POST['senha']) 
  {
  $validacao = "1";  
  $usuario = $_POST['usuario'];  //Validação do usuario
  session_start();
  $_SESSION[usuario] = $usuario; 
  $_SESSION[validacao] = $validacao;
 
  header ("Location: cadastro.html"); // Assim que validar a seção irá para a página cadastro.php
  }
  else
  {
?> 

<!-- JavaScript -->
    
<script type="text/javascript">
alert("Login ou senha incorreta")
</script>

<!-- PHP -->

<?php
echo "<a href='index.html'> DESLOGAR </a>"; // Desloga da pagina cadastro.php e volta a página inicial
}
?>
  