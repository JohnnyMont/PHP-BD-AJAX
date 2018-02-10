<?php 
$total = 0;
if ($_GET['senha'] != $_GET['confsenha']) {
	echo "<p class='red-text'><i class='medium material-icons'>close</i></p>";
}else{
	echo "<p class='green-text'><i class='medium material-icons'>check</i></p>";
}
?>