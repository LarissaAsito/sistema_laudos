<!-- Larissa Yoshie Asito -->
<!doctype html> <!-- Obtém a última versão do html, neste caso HTML5 -->
<html>
	<?php
		$inputID = $_POST['inputID'];
		$inputSenha = $_POST['inputSenha'];
		$servidor = 'localhost';
		$banco = '';
		$usuario = '';
		$senha = '';
		// Conexão com o banco de dados
		$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
		if(!$conexao)
		{
			echo "Erro ao conectar ao banco de dados!";
			exit();
		}
		// Seleciona o usuário de acordo com ID e senha informados na tela de login
		$comandoSQL = "SELECT nome, email FROM Usuario WHERE ".$inputID." = id_usuario AND '".$inputSenha."' = senha;";
		$result = mysqli_query($conexao, $comandoSQL);
		if ($row = mysqli_fetch_array($result)) 
		{
			$nome = $row['nome'];
			$email = $row['email'];
			mysqli_close($conexao);
		}
		else{ //se não encontrar usuário volta para a tela de login
			mysqli_close($conexao);
			echo "<SCRIPT type='text/javascript'>
				alert('ID e/ou senha incorretos! Tente novamente.');
				window.location.replace(\"index.php\");
				</SCRIPT>";
		}
	?>
	<head>
		<meta charset="UTF-8">
		<!-- Garante a renderização correta para celulares. E garante o zoom correto nos dispositivos. -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title> Laudo - Sistema Laudos </title>

		<!-- Inclui os estilos e algumas funções de javascript, por exemplo -->
		<link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>

	<!-- Corpo da página-->
	<body>
		<form action="gerar_laudo_pdf.php" method="POST" class="form-signin">
			<h1 class="h3 mb-3 font-weight-normal"> Seus dados </h1>
			<p>ID: <?php echo $inputID;?></p>
			<p>Nome: <?php echo $nome;?></p>
			<p>Email: <?php echo $email;?></p>
			<input type="hidden" name="inputID" value="<?php echo $inputID;?>" />
			<input type="hidden" name="inputNome" value="<?php echo $nome;?>" />
			<input type="hidden" name="inputEmail" value="<?php echo $email;?>" />
			<button type="submit" class="btn btn-primary">Gerar Laudo</button>
			<button type="submit" class="btn btn-primary" formaction="index.php">Logout</button>
		</form> 
	</body>
</html>