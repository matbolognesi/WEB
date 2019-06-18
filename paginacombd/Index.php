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
<h1>Cadastro de usuários</h1>
<hr><br><br>
<form method = "post" action = "processa.php">
    <input type= "submit" value="salvar" class = "btn">
    <input type="reset" value="Limpar"class = "btn">
    <br><br>
    Nome<br>
    <input type="text" name= "nome"class="campo" maxlength="40" required autofocus ><br><!--autofocus serve pro campo já estar selecionado -->
    Email<br>
    <input type="text" name="email"class="campo"maxlength="50" required><br>
    Profissão<br>
    <input type="text" name="profissao"class="campo"maxlength="40" required><br>

</section>

</div>

</body>

</html>
