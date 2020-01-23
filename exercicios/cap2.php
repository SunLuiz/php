<html>
<head>
<title>
cap2
</title>
</head>
<body>
<!--funcao que verifica os resultados-->
	<script>

	function numeros()
	{
		if(numero10.numero.value <11)
		{
			window.location="resultado.php";
			
		}else
		{
			alert('Apenas numeros abaixo de 10');
		}
			
	}
	</script>


<?php
echo 'Exercicio 1<br><br>';
$horas = date('H:i:s');
$dias = date('d-m-Y');
echo 'Hora : '.$horas.'<br>Dia: '.$dias;

?>
<br><br>Exercicio 2 <br>

    <form name="numero10" action="resultado.php" method="POST">
        <br><br>Digite sua idade: <input type="text" name="idade" value="0"><br><br>
        
        <input type="submit" value="Verificar maioridade">
   
	
	<br><br>Exercicio 3<br>
	   
        <br><br>Digite um numero menor que 10: <input type="text" name="numero" value="0"><br><br>
        
		<input type="submit" onclick="numeros()" >
		
		
    </form>

</body>
</html>