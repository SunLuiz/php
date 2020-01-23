<html>
<head>
<title>
  cap2 ex4
</title>
</head>
<body>
  <script language="javascript">
  function valida()
  {
  if(document.formTriagulo.lado1.value =="")
  {
  alert("Por favor entre com um Lado 1 Válido");
  document.formTriagulo.lado1.focus();
  return false;
  }
  else if(document.formTriagulo.lado2.value =="")
  {
  alert("Por favor entre com um lado 2 válida");
  document.formTriagulo.lado2.focus();
  return false;
  }
  else
  {
  return true;
  }
  }
  </script>
  <?php
  function validaphp()
  {
  		if(empty($lado1)){
  		echo "lado1 vazio";
  		}
  }
  ?>

  <br>Exercicio 4 e 5 <br>Digite os 3 lados do triângulo<br><br>
  <form action= "resultado2.php" method = "post" name="formTriangulo" onsubmit="return validaphp();">//funcao validaphp disabilitada
    <label for = "lado 1"> Lado 1: <input type="text" name="lado1" /></label>
    <label for = "lado 2"> <br>Lado 2: <input type="text" name="lado2" /></label>
    <label for = "lado 3"> <br>Lado 3: <input type="text" name="lado3" /></label>
    <input type="submit" value="verificar"/>
  </form>

<?php

 ?>
</body>
</html>
