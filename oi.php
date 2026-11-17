<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="POST">
    INFORME UM NuMERO
    <input type="number" name="numero" required>
    <input type="submit" name="gerar" value="Gerar tabuada">
  </form>
<?php
 if(isset($_POST["gerar"])){
  $numero = (int) $_POST["numero"];
  echo "<h3> Tabuada do $numero </h3>";
  for($i =1; $i<=10; $i++){
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado <br>";
  }
 } 
?>
</body>
</html>