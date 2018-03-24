<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Profissionais - inserir foto</title>
<style type="text/css">
body,td,th {
	font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
}
</style>
<link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
</head>

<body>
<?PHP include "menusuperior.php"; ?>
<?PHP
	$Profissional = $_GET['id'];
	
	include "conbd.php";
	
	$sql = "SELECT id_profissional, nm_profissional, nr_cpf FROM tb_profissional WHERE nr_cpf = $Profissional";
    $rs = mysql_query($sql, $conexao);
	
	$row = mysql_fetch_array($rs);
	$registro = $row['id_profissional'];
	$nomep = $row['nm_profissional'];
	
	?>
<h1> Carregar a foto de <?php print $nomep; ?></h1>
<form method="POST" action="registra-foto.php" enctype="multipart/form-data">
<input name="idp" type="text" value="<?php print $registro; ?>" hidden="true">
	Imagem: <input name="arquivo" type="file"><br/>Extensão: jpg, png. Até 5MB.<br/><br/>
	
	<input type="submit" value="Cadastrar">
</form>
</body>
</html>