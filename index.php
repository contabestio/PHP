<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .ap{
      color: green;
    }
    .rep{
      color: red;
    }
    .rec{
      color: yellow;
    }
  </style>
</head>
<body>
  <form method="POST">
    <label for="nota1">Nota 1</label>
    <input type="text" id="nota1" name="nota1"><br>
    <label for="nota2">Nota 2</label>
    <input type="text" id="nota2" name="nota2"><br>
    <input type="submit" value="calcular">
  </form>
  <?php
  echo "programa de media<br><br>";
  $nota1 = $_POST["nota1"];
  $nota2= $_POST["nota2"];
  $media = ($nota1 + $nota2)/2;
  echo "A média é: " . $media;
  
  if($media >=6){
    echo "<p class= 'ap'> Aprovado!</p>";
  } else if($media<3){
    echo "<p class= 'rep'> Reprovado!</p>";
  } else {
    echo "<p class= 'rec'> Recuperacao!</p>";
  }
  ?>
</body>
</html>