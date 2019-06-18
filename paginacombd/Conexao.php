<?PHP 
$hostname="127.0.0.1";
$user="root";
$pasword="";
$database="cadastro";
$conexao = mysqli_connect($hostname,$user,$pasword,$database);
if(!$conexao){
    print"Falha na conexão com banco de dados!";
    exit;
}
echo("Conexão bem sucedida!");




?>