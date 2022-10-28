<?php

use function Composer\Autoload\includeFile;

$errorMSG = "";

if (empty($nome=$_POST["name"])) {
    $errorMSG = "Nome is required ";
} else {
    $nome = $_POST["name"];
}

if (empty($email=$_POST["email"])) {
    $errorMSG = "Email is required ";
} else {
    $email = $_POST["email"];
}

if (empty($tel=$_POST["tel"])) {
    $errorMSG = "Telefone is required ";
} else {
    $tel = $_POST["tel"];
}

if (empty($assunto=$_POST["select"])) {
    $errorMSG = "Assunto is required ";
} else {
    $assunto = $_POST["select"];
}

if (empty($message=$_POST["message"])) {
    $errorMSG = "Message is required ";
} else {
    $message = $_POST["message"];
}

$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

//grava no BD
include '../inc/conectBD.php';
$squery  = "INSERT INTO contato_formulario (nome_completo,email,telefone,assunto,mensagem) VALUES ('$nome','$email','$tel','$assunto','$message')";//Monta a query para inserção no bd
mysqli_query($conn,$squery);//Executa a query
//fecha conexão
mysqli_close($conn);

if(!$conn === true) {
    echo "Erro ao salvar o e-Mail, tente outra forma de contato";
} else {
    echo "E-Mail salvo!";
}

?>