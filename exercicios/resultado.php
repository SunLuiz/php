<html>
<headd>
</head>
<body>
Resultado: exercicio 2<br>
<?php
$idade = $_POST['idade'];
if ($idade <18)
{
	echo 'Menor de idade';
}
else
{
	echo 'Maior de idade';
}
echo '<br>Idade:  '.$idade;
?>

<br><br>Resultado exercicio 3<br>
<?php
$numero = $_POST['numero'];
if($numero %2 ==0)
{
	echo '<br>O numero'.$numero.' é par';
}
else
{
	echo '<br>Onumero é impar';
}

?>
<button value="voltar" style="width:90;height:25" class="btn btn-warning" onClick="window.history.back();" />
</body>
</html>
