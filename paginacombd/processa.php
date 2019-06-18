<?php
include_once("Conexao.php");
$nome=$_POST['nome'];
$email=$_POST['email'];
$profissao=$_POST['profissao'];
$sql="insert into usuarios (nome,email,profissao) values ('$nome','$email','$profissao')";
$salvar=mysqli_query($conexao, $sql);//Pra salvar os dados inseridos é necessário colocar a var da conexao e a var da query
$linhas=mysqli_affected_rows($conexao);
mysqli_close($conexao);
?>
<html>
<head>
<title>Pagina de cadastro </title>
<link rel ="stylesheet" href="_css/Estilo.css">

</head>
<body>
<div class="container">
<nav>
<ul class = "menu">
<a href="Index.php"><li>Cadastro</li></a>
<a href="Consultas.php"><li>Consultas</li></a>


</ul>


</nav>
<section>
<h1>Confirmação de cadastro de usuários</h1>
<hr><br><br>

<?php
if($linhas==1){
    echo("Cadastro efetuado com sucesso!");//Aviso pra quando for acrescentado uma linha no bd
}
else{
    echo("Email já existente!");//Pois o campo está declarado como unique e n pode se repetir
}

?>

</section>

</div>

</body>

</html>