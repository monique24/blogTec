<?php
    require_once "conexao.php";
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email == "" && $password == "") {
            echo "<script>alert('Campos nulos, preencha os campos')</script>";
    }else {
        $query = "SELECT nome,tipo_usuario FROM usuarios WHERE email = '$email' and senha = '$password'";
        $result = mysqli_query($conexao, $query);
        if($result->num_rows > 0){
                echo "Login efetuado";
                $dados = mysqli_fetch_array($result);
                print_r($dados);
                if($dados['tipo_usuario']==1){
                    echo $dados['tipo_usuario'];
                    echo "blogueirinho";
                }else{
                    echo "comum";
                }
            }else{
                echo "Senha ou email incorreto";
            }
    }
?>