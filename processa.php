<?php 
	require_once"conexao.php";
	$email=$_POST['email'];
	$senha=$_POST['senha'];
	
	
	$query="SELECT email,senha FROM usuarios";
	$exe=mysqli_query($conexao,$query);
	$login= mysqli_fetch_array($exe);
	if($login["email"]==$email&&$login["senha"]==$senha){
		echo"<script>alert('Deu bom')</script>";
	}else{
		echo"<script>alert('Deu ruim')</script>";
	}
	mysqli_close($conexao);
?>