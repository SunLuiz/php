<html>

  <head>

    <meta charset="utf-8">

    <title>Elvis é Brasileiro</title>

    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

    <link href="styles/cadastro.css" rel="stylesheet" type="text/css">

  </head>

  <body>

	<p><h2> Fan Clube Brasileiro Elvis Presley </h2></p> <p><h1>Registro <h1> </p> 

        <form action="cadastrando.php" method="POST">
        nome: <input type="text" name="nome" value="Digite seu nome"><br><br>
        idade : <input type="text" name="idade"><br><br><br>
        sexo<br><input type="radio" name="sex" value="Masculino"> Masculino<br>
        <input type="radio" name="sex" value="Feminino"> Feminino<br>
		<input type="radio" name="sex" value="Bisexual"> Bi<br><br>
        e-mail :<input type="text" name="email"><br>
        senha :<input type="password" name="senha"><br><br>
        <input type="submit" value="Cadastrar">
    </form>
	
	<?php
$link = mysqli_connect("localhost", "root", "", "hospital") or die('Nao é possivel conectar ao banco. erro: '.mysql_errno().mysql_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>

    
  </body>

</html>