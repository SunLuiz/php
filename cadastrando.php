<?php
$link = mysqli_connect("localhost", "root", "", "hospital");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
<html>
<head>
    <title>Novo Membro</title>
    <meta charset="utf-8">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

    <link href="styles/cadastro.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$sexo = $_POST['sex'];

$sql = "INSERT INTO usuario (nome,idade,email,senha,sexo)VALUES ";
$sql .= "('$nome', '$idade', '$email', '$senha', '$sexo')"; 
mysqli_query($link,$sql) or die("Erro ao tentar incluir registro");
mysqli_close($link);
echo "Cliente cadastrado com sucesso! <br><br>";

$link = mysqli_connect("localhost", "root", "", "hospital");
$dados = mysqli_query($link, "select * from usuario");

while ($linhas = mysqli_fetch_array($dados)):

echo "Codigo: ".$linhas["Id_Usuario"]."<br>Nome: ".$linhas["nome"]." Idade: ".$linhas["idade"]." email: ".$linhas["email"];
echo " sexo: ".$linhas["sexo"]." senha: ".$linhas["senha"];
echo "<br>";
endwhile;

?>
</body>
</html>