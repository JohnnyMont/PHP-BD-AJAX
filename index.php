<!DOCTYPE html>
<html>
<head>
	<title>Formulario Ajax</title>
	<link rel="stylesheet" type="text/css" href="materialize.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<form action="cadastrar.php" method="post">
		<div class="row">
			<div class="col s1"></div>
			<div class="col s9">
				<label for="email">Email</label>
				<input type="email" name="email" id="email">
			</div>
			<div class="col s2" id="email2"></div>
		</div>
		<div class="row">
			<div class="col s1"></div>
			<div class="col s9">
				<label for="senha">Senha</label>
				<input type="password" id="senha" name="senha">
			</div>
			<div class="col s2" id="senha2"></div>
		</div>
		<div class="row">
			<div class="col s1"></div>
			<div class="col s9">
				<label for="confsenha">Confirmar Senha</label>
				<input type="password" id="confsenha" name="confsenha">
			</div>
			<div class="col s2" id="confsenha2"></div>
		</div>
				<center><input type="submit" class="btn" name="enviar"></center>
	</form>
</body>
<script src="materialize.js"></script>
<script src="ajax.js"></script>
<script>
	var email = document.getElementById('email');
	var email2 = document.getElementById('email2');
	var senha = document.getElementById('senha');
	var senha2 = document.getElementById('senha2');
	var confsenha = document.getElementById('confsenha');
	var confsenha2 = document.getElementById('confsenha2');
	email.onblur = function(){
		requisitarArquivo("index2.php?email="+email.value,email2);
	};
	confsenha.onblur = function(){
		requisitarArquivo("index3.php?senha="+senha.value+"&confsenha="+confsenha.value,senha2);
		requisitarArquivo("index3.php?senha="+senha.value+"&confsenha="+confsenha.value,confsenha2);
	};
</script>
</html>