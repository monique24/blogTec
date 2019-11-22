<!DOCTYPE html/>
<html lang="pt br">
<meta charset="utf-8">
	<head>
		<title>Cadastro</title>
	</head>
	<body>
		<div class="cadastro">
			<form action="cadastrado.php" method="post">
				<p>Nome:<input type="text" name="nome"/></p>

				<p>Sexo:
					<input type="radio" name="sexo" value="m" checked>Masculino 
					<input type="radio" name="sexo" value="f">Feminino
				</p>
				<p>Tipo:
					<select name="tipo_usuario">
						<option value="user"> Usuário </option> 
						<option value="blog"> Blogueira </option>
					</select>
				</p>
				<p>Senha:<input type="password" name="senha"/></p>
				<p>Email:<input type="text" name="email"/></p>
				<p><input type="submit" value="enviar"></p>
			</form>
		</div>	
	</body>
</html>