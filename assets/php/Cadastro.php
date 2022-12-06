<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro | DOCprot</title>
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">
	<link rel="stylesheet" type="text/css" href="#"> <!~~ adicionar~~>
	<link rel="preconnect" href="https://fonts.googleapis.com"/>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto&display=swap">
</head>
<body>
	<div id="cadastro">
		<form class="card" action="">
			<label for="nome">Nome</label>
			<input type="text" id="nome" nome="nome" required>
			<label for="sobrenome">Sobrenome</label>
			<input type="text" id="sobrenome" nome="sobrenome" required>
			<label for="email">E-mail</label>
			<input type="email" id="email" name="email" required>
			<label for="senha">Senha</label>
			<input type="password" id="senha" name="senha">
			<div class="link"><a href="../../public/index.php">Cancelar</a></div>
			<div class="botao">
				<input type="submit" value="criar" name="submit" onclick="">
			</div>
		</form>
	</div>

</body>
</html>