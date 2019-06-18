<?php
include_once("Conexao.php");
$filtro=isset($_GET['filtro'])?$_GET['filtro']:"";//Determinar se uma variável é diferente de null
$sql="select * from usuarios where profissao like '%$filtro%' order by nome";
$consulta=mysqli_query($conexao,$sql);
$registros=mysqli_num_rows($consulta);//Vai pegar todas as linhas da consulta
?>
<html>
<head>
<title>Pagina de consultas </title>
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
<h1>Consultas</h1>
<hr><br><br>
<form method="get"action ="Consultas.php">
Filtrar por profissão: <input type = "text" name ="filtro" class="campo" required autofocus>
<input type="submit" value= "Pesquisar" class="btn">

</form>

<?php
print"Resultado da pesquisa com a palavra <strong> $filtro. </strong> <br><br>";
print"$registros registros encontrados";
print"<br><br>";

while($exibirRegistros = mysqli_fetch_array($consulta)){
    $codigo=$exibirRegistros[0];
    $nome=$exibirRegistros[1];
    $email=$exibirRegistros[2];
    $profissao=$exibirRegistros[3];

    print"<article>";

    print "$codigo<br>";
    print "$nome<br>";
    print "$email<br>";
    print "$profissao<br>";

    print"</article>";
}


mysqli_close($conexao);
?>

</section>

</div>

</body>

</html>