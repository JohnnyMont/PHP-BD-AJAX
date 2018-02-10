<?php
require_once "Conexao.php";
$conexao = new Conexao();
$sql = "INSERT INTO USUARIOS(senha,email) VALUES(?,?);";
$comando = $conexao->getCon()->prepare($sql);
$comando->bindParam(1,$_POST['senha']);
$comando->bindParam(2,$_POST['email']);
$comando->execute();
header("Location: index.php");
?>