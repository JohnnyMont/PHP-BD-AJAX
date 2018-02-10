<?php
require_once "Conexao.php";
$conexao = new Conexao();
$email = $_GET['email'];
$sql = "SELECT COUNT(*) FROM USUARIOS WHERE EMAIL = '{$email}'";
$dados2 = $conexao->getCon()->query($sql);
$total = 0;
foreach ($dados2 as $linha) {
	$total = $linha[0];
}
if ($email == "") {
	echo "<p class='red-text'><i class='medium material-icons'>close</i></p>";
}else{
if ($total != 0) {
	echo "<p class='red-text'><i class='medium material-icons'>close</i></p>";
}else{
	echo "<p class='green-text'><i class='medium material-icons'>check</i></p>";
}
}
?>