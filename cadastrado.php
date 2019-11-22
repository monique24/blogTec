<?php 
	require_once "conexao.php";

	$nome=$_POST['nome'];
	$sexo=$_POST['sexo'];
	$senha=$_POST['senha'];
	$email=$_POST['email'];
	$tipo_usuario=$_POST['tipo_usuario'];

	if($nome==null && $senha==null && $email==null) { 
		echo "<script>alert('Prencha os campos, por favor')</script>";
		exit;
	}
	if($tipo_usuario=='blog'){
		$query= "INSERT INTO usuarios(tipo_usuario) VALUES (1)";
		$exe = mysqli_query($conexao,$query);
		if($exe==1){
			echo"<script>alert('Deu bom')</script>";
		}else{
			echo"<script>alert('Deu ruim')</script>";
		}
	}else{
		$query= "INSERT INTO usuarios(tipo_usuario) VALUES (2)";
		$exe = mysqli_query($conexao,$query);
		if($exe==1){
			echo"<script>alert('Deu bom')</script>";
		}else{
			echo"<script>alert('Deu ruim')</script>";
		}
	}
			
	$query="INSERT INTO usuarios (nome,sexo,senha,email) VALUES ('$nome','$sexo','$senha','$email')";
	$exe = mysqli_query($conexao,$query);
	if($exe==1){
		echo"<script>alert('Deu bom')</script>";
	}else{
		echo"<script>alert('Deu ruim')</script>";
	}
	mysqli_close($conexao);
?>
