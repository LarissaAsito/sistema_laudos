<!-- Larissa Yoshie Asito -->
<?php
	$inputID = $_POST['inputID'];
	$inputNome = $_POST['inputNome'];
	$inputEmail = $_POST['inputEmail'];
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
	else
	{
		// Teste de consistência (se já tem usuário cadastrado com o ID digitado)
		$comandoSQL = "SELECT nome, email FROM Usuario WHERE ".$inputID." = id_usuario;";
		$result = mysqli_query($conexao, $comandoSQL);
		if ($row = mysqli_fetch_array($result)) 
		{
			mysqli_close($conexao);
			echo "<SCRIPT type='text/javascript'>
					alert('Usuário já cadastrado!');
					window.location.replace(\"index.php\");
					</SCRIPT>";
		}
		else {
			// Insere novo cadastro na tabela Usuario
			$comandoSQL = "INSERT INTO Usuario VALUES (".$inputID.", '".$inputNome."', '".$inputEmail."', '".$inputSenha."');";
			if (mysqli_query($conexao, $comandoSQL)) {
				mysqli_close($conexao);
				echo "<SCRIPT type='text/javascript'> 
						alert('Usuário cadastrado com sucesso!');
						window.location.replace(\"index.php\");
						</SCRIPT>";
			} else {
				echo $comandoSQL;
				echo "Error";
				echo $inputID;
				echo $inputNome;
				echo $inputEmail;
			}
		}
	}
?>