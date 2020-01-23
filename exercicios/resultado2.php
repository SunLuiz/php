<html>
<head>
  <title>
    resultado2
  </title>
</head>
<body>
Exercicio 4
<br><br>
O modelo é :


<?php

$resposta;
$lado1 = $_POST['lado1'];
$lado2 = $_POST['lado2'];
$lado3 = $_POST['lado3'];
if(($lado1=="")or($lado2=="")or($lado3==""))
{
 echo "<script>
 alert('faltou preencher algum lado do triangulo');
 history.go(-1);
   </script>";
}
if(($lado1==$lado2)AND ($lado1==$lado3)AND($lado2==$lado3))
{
  $resposta = "equilatero";
}elseif(($lado1==$lado2)or($lado1==$lado3)or($lado2==$lado3))
{
  $resposta="isósceles";
}else {
  $resposta = "escaleno";
}
echo 'o triangulo é: '.$resposta;
 ?>


</body>
</html>
