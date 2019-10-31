<?php
// pegar os dados da tela

$email = $_POST["email"];
$senha = $_POST["senha"];

/*
echo"E-mail :".$email. "<br>";
echo"Senha :".$senha. "<br>";
*/
//Abrir a conexão com o banco de dados my sql
// mysql_connect(SERVIDOR,USUARIO,SENHA,BANCO);

$con = mysqli_connect("localhost","root","","aulaprojeto");

//Montar a instrução de seleção para ir ao banco

$sql = "select * from usuario where email = '".$email."'and senha = '".$senha."'";

//excutar a instrução
$rs = mysqli_query($con,$sql);
if(mysqli_num_rows($rs)==1){
    //echo "Encontrei";
    echo "<script>";
    echo "location.href='ADM/painel.php'";
    echo "</script>";
    
}else{
    //echo "Não Encontrei";
    echo "<script>";
    $msg = base64_encode("Usuario e senha inválido");
    echo"location.href = 'logar.php?m=".$msg."'";
    echo "</script>";
   
}

?>