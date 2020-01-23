<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="cadastrando.php" method="POST">
        nome: <input type="text" name="nome" value="Monk"><br><br>
        idade : <input type="text" name="idade"><br><br><br>
        sexo<br><input type="radio" name="sex" value="Masculino"> Masculino<br>
        <input type="radio" name="sex" value="Feminino"> Feminino<br>
		<input type="radio" name="sex" value="Bisexual"> Bi<br>
        e-mail :<input type="text" name="email">
        senha :<input type="password" name="senha"><br><br>
        <input type="submit" value="Cadastrar">
    </form>
	
	<?php
$link = mysqli_connect("localhost", "root", "", "hospital");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>

	
</body>
</html>
