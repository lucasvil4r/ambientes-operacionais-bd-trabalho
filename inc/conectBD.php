<?php

$host = 'mysql-db.cbfpnvjdyeio.us-east-1.rds.amazonaws.com';
$user = 'admin';
$pass = 'FSJshqMQ1P1vVaaJV4XX';
$bd = 'AtividadeContinua05_AO';

//procedural style
//$conn = mysqli_connect($host,$user,$pass,$bd);

$conn = new mysqli($host,$user,$pass,$bd);

/*
if($conn->connect_errno){
	echo "Ocorreu um erro na conexao com o Banco de Dados";
	exit;
} else {
	echo "Conexão bem sucedida";
}
*/

$conn->set_charset('utf8');