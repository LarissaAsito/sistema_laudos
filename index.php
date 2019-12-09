<!-- Larissa Yoshie Asito -->
<!doctype html> <!-- Obtém a última versão do html, neste caso HTML5 -->
<html>
	<head>
		<!-- Garante a renderização correta para celulares. E garante o zoom correto nos dispositivos. -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title> Login - Sistema Laudos </title>

		<!-- Inclui os estilos e algumas funções de javascript, por exemplo -->
		<link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>

	<!-- Corpo da página-->
	<body class="text-center">
		<!-- Seção de login -->
		<form action="gerar_laudo.php" method="POST" class="form-signin">
			<h1 class="h3 mb-3 font-weight-normal"> Faça Log In </h1>
			<label for="inputID" class="sr-only">ID</label>
			<input type="text" name="inputID" id="inputID" class="form-control" placeholder="Digite seu ID..." required autofocus>
			<label for="inputSenha" class="sr-only">Senha</label>
			<input type="password" name="inputSenha" id="inputSenha" class="form-control" placeholder="Digite sua senha..." required>
			<button type="submit" class="btn btn-primary">Login</button>
		</form>
		
		<!-- Seção de cadastro -->
		<form action="cadastrar.php" method="POST" class="form-signin">
			<h1 class="h3 mb-3 font-weight-normal"> Cadastrar </h1>
			<label for="inputID" class="sr-only">ID</label>
			<input type="text" name="inputID" id="inputID" class="form-control" placeholder="Digite seu ID..." required autofocus>
			<label for="inputNome" class="sr-only">Nome</label>
			<input type="text" name="inputNome" id="inputNome" class="form-control" placeholder="Digite seu nome..." required autofocus>
			<label for="inputEmail" class="sr-only">Email</label>
			<input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Digite seu email..." required autofocus>
			<label for="inputSenha" class="sr-only">Senha</label>
			<input type="password" name="inputSenha" id="inputSenha" class="form-control" placeholder="Digite sua senha..." required>
			<button type="submit" class="btn btn-primary">Cadastrar</button>
		</form>
	</body>
</html>