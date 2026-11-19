<?php

  $conexao = mysqli_connect("localhost:3307", "root", "", "agenda");
  
  if(!$conexao){
    die("erro ao conectar ao db" + mysqli_connect_error());
  }else{
    echo "conectado!!";
  };
$nome = $_POST["nome"];
$tel = $_POST["tel"]; 
$email = $_POST["email"];
$sql = "insert into contatos(nome, telefone, email) values('$nome','$tel','$email')";

$inserir = mysqli_query($conexao,$sql);
if(!$inserir){
    die("erro ao inserir no db");
  }else{
    echo "inserido!!";
  };
?>