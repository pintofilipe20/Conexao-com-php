<?php

/*A variável $host ela recebe o nome do servidor.
por padrão os projectos de teste, têm como nome do servidor
localhost(que significa servidor local)
*/
$host= "localhost";

/*A variável $user recebe o nome do usuário do servidor. Por padrão os 
nomes de usuários de servidores é root.
*/
$user = "root";

/*A variável $pass, rece a senha do usuário do servidor.*/
$pass  = "";

/*A variável $database, captura o nome da base de dados.*/
$database = "NomeDaBaseDeDados";

/*A função abaixo, transforma a nossa variável $conexao em global.
Para poder ser acedido em diversas funçãos do 
nosso projecto*/
global $conexao;

/*A variável $conexao, faz uma função MySqli. A funão mysqli_connect permite
fazer uma conexão na base de dados, com os valores estipulados acima.*/
$conexao = @mysqli_connect($host, $user, $pass, $database);

/*A função abaixo, ajuda-nos ao que concerne aos caracteres especiais. Ex:João, Saúl.*/
@mysqli_set_charset($conexao, "utf8");

/*A função abaixo faz uma verifição condicional
O ponto de exclamação(!) quer dizer negação. Então, se os dados 
não estiverem em conformidade com as da base de dados, exibirá 
a mensagem de erro. Se não, não aparecerá nenhum informação(Quer dizer que está certo).
*/
if (!$conexao) {
	print"Desculpe, Falha na Conexão com a Base de Dados";
}

?>
