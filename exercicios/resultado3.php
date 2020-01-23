<html>
<head>
  <title>
    resultado3
  </title>
</head>
<body>
Exercicio 6
<br><br>
Dados :<br><br>
<?php

$resposta = array();
$resposta["nome"]= $_GET['nome'];
$resposta["idade"]= $_GET['idade'];
$resposta["sexo"]= $_GET['sexo'];


if(($resposta["nome"]=="")or($resposta["idade"]=="")or($resposta["sexo"]==""))
{
 echo "<script>
 alert('faltou preencher algum campo');
 history.go(-1);
   </script>";
}else
{
echo 'Nome: '.$resposta["nome"].'Idade : '.$resposta["idade"].'Sexo :'.$resposta["sexo"];
}
 ?>


</body>
</html>
