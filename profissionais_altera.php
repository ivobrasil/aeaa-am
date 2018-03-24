<?PHP
include "conbd.php";

// Recupera o ID do profissional
$id = $_GET['id'];

// Recupera os dados do registro
$sql = "SELECT * FROM tb_profissional ";
$sql = $sql . " WHERE id_profissional = '". $id . "'";
$rs = mysql_query($sql, $conexao);
$reg = mysql_fetch_array($rs);
$id2 = $_GET['id'];
$nomeprofissional = $reg['nm_profissional'];
$sexo = $reg['nm_sexo'];
$naturalidade = $reg['nm_naturalidade'];
$nacionalidade = $reg['nm_nacionalidade'];
$datanascimento = $reg['dt_aniversario'];
$numerocpf = $reg['nr_cpf'];
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Documento sem título</title>
<style type="text/css">
body,td,th {
	font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
}
</style>
</head>

<body>

ALTERA DE PROFISSIONAL <br/>
	
<form name="alteraprofissional" method="post" action="profissional_alterado.php">
	
  <p>
  <label>ID:</label><input type="text" name="codprofissional" value="<?PHP print $id2; ?>" /><br /><br />
  <label>Nome Completo:</label>
  <input type="text" name="nomecompleto" value="<?PHP print $nomeprofissional; ?>" />

  <p>
    <label>Sexo:</label>
    <select name="selectsexo">
      <option value="-">-</option>
      <option value="F">Feminino</option>
      <option value="M">Masculino</option>
    </select>

  <p>
    <label>Natural de:</label>
    <input type="text" name="naturalde" value="<?PHP print $naturalidade; ?>" /></p>

    <p>
    <label>Nacionalidade:</label>
    <input type="text" name="nacionalidade" value="<?PHP print $nacionalidade; ?>" /></p>

  <p>
    <label>Data de Nascimento: </label>
    <input type="text" name="datanasc" value="<?PHP print date('d/m/Y',strtotime($datanascimento));  ?>" /></p>

  <p>
    <label>CPF: </label>
    <input type="text" name="numerocpf" value="<?PHP print $numerocpf; ?>" /></p>


  <p>&nbsp;</p>
	<input type="submit" value="Cadastrar">
	
	</form>
	
	
</body>
</html>