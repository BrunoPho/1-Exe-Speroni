<?php 
 
 if (isset($_POST['busca'])) {

   $busca = $_POST['busca'];
   echo ('<p> Voce busco pelo termo "'.$busca.'" </p>');
 }

  if (isset($_GET['categoria'])) {

  $nome = $_GET['nome'];
  echo 'Voce escolheu a categoria' .$nome;

  }

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1> Bem vindo!!! </h1>

</body>
</html>