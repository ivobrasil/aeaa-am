<?PHP
/* Pagina de cadastro do profissional
* data: 12 de março de 2018
* Obs: Teste de insercao de dados obrigatorios
*/
	
	
//CONEXAO
	

	
    include "conbd.php"; 
	 // obter dados do formulario
	$NomeCompleto = strtoupper($_POST['nomecompleto']);
	$Sexo = $_POST['selectsexo'];
	$Naturalidade = $_POST['naturalde'];
	$Nacionalidade = $_POST['nacionalidade'];
	$DataNascimento = $_POST['datanasc'];
	
	function muda_data_amd($dt)
{
$dia = substr($dt,0,2);
$mes = substr($dt,3,2);
$ano = substr($dt,6,4);
$data = $ano."/".$mes."/".$dia;
return $data;
}

$datanasc = muda_data_amd($DataNascimento);


	$NumeroDoCPF = $_POST['numerocpf'];
	$nridentidade = $_POST['identidade'];
	$idemissor = $_POST['identidadeemissor'];
	$EstadoCivil = $_POST['selectecivil'];
	$titulopro = $_POST['selecttitulo'];
	$creaRNP = $_POST['crearnp'];
	$endrua = $_POST['enderecorua'];
	$endnumero = $_POST['endereconr'];
	$endbairro = $_POST['selectebairro'];
	$endcomp = $_POST['endcomplemento'];
	$endcidade = $_POST['endcidade'];
	$enduf = $_POST['selectuf'];
	$endcep = $_POST['endcep'];
	$dddtel = $_POST['dddtel'];
	$numerotel = $_POST['numerotel'];
	$dddcel = $_POST['dddcel'];
	$numerocel = $_POST['numerocel'];
	$endemail = $_POST['endemail'];
	$situacaopro = $_POST['selectsit'];

	// Inserir dados no banco
	mysql_select_db("aeaaamor_controle, $conexao");
	mysql_query("INSERT INTO tb_profissional (nm_profissional, nm_sexo, nm_naturalidade, nm_nacionalidade, dt_aniversario, nr_cpf, nr_rg, nm_orgaoemissor, end_email, nr_rnp, nm_estadocivil, id_titulo, end_local, end_nr, id_bairro, end_comp, end_cep, end_cidade, end_uf, nr_dddf, nr_fone, nr_dddc, nr_celular, dt_registro, situacaop) VALUES ('$NomeCompleto', '$Sexo', '$Naturalidade', '$Nacionalidade', '$datanasc', '$NumeroDoCPF', '$nridentidade', '$idemissor', '$endemail', '$creaRNP', '$EstadoCivil', '$titulopro', '$endrua', '$endnumero', '$endbairro', '$endcomp', '$endcep', '$endcidade', '$enduf', '$dddtel', '$numerotel', '$dddcel', '$numerocel', NOW(), '$situacaopro')");
	mysql_close($conexao);

?>


<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>

<title>Cadastro de Profissionais</title>

<style type="text/css">
body,td,th {
	font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-style: normal;
	font-size: 14px;
	color: #000000;
}
</style>
<link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
</head>

<body>
<?PHP include "menusuperior.php"; ?>
<div style="background-color:#BDC2C9">
<h1>Cadastro de <strong><?php print $NomeCompleto?></strong> realizado com sucesso.</h1><br><br>

Nome: <?php print $NomeCompleto . "<br />"; ?>
Sexo: <?php print $Sexo . "<br />"; ?>
Naturalidade: <?php print $Naturalidade . "<br />"; ?>
Nacionalidade: <?php print $Nacionalidade . "<br />"; ?>
Nascimento: <?php print $DataNascimento . "<br />"; ?>
CPF: <?php print $NumeroDoCPF . "<br />"; ?>
Numero da Identidade: <?php print $nridentidade . "<br />"; ?>
Orgao Emissor: <?php print $idemissor . "<br />"; ?>
Estado Civil: <?php print $EstadoCivil . "<br />"; ?>
Titulo: <?php print $titulopro . "<br />"; ?>
Rua: <?php print $endrua?> N.: <?php print $endnumero . "<br />"; ?>
Complemento: <?php print $endcomp . "<br />"; ?>
Bairro: <?php print $endbairro . "<br />"; ?>
Cidade: <?php print $endcidade?> Estado: <?php print $enduf . "<br />"; ?>
CEP: <?php print $endcep . "<br />"; ?>
Telefone: <?php print $dddtel; ?>-<?php print $numerotel . "<br />"; ?>
Celular: <?php print $dddcel; ?>-<?php print $numerocel . "<br />"; ?>
Email: <?php print $endemail . "<br />"; ?>
Situacao: <?php print $situacaopro . "<br />"; ?>
<br /><br />
	</div>
<table width="100%" border="0">
  <tbody>
    <tr>
      <td align="center"><a href="profissionais_cadastra.php"><img src="img/icones/i-cad-profissional.jpg" /></a></td>
      <td align="center"><a href="profissionais_cadfoto.php?id=<?php print $NumeroDoCPF ?>"><img src="img/icones/i-cad-foto.jpg" /></a></td>
      <td align="center"><a href="profissionais_cadtitulo.php?id=<?php print $NumeroDoCPF ?>"><img src="img/icones/i-cad-titulo.jpg" /></a></td>
      <td align="center"><a href="profissionais_cadficha.php?id=<?php print $NumeroDoCPF ?>"><img src="img/icones/i-cad-ficha.jpg" /></a></td>
    </tr>
    <tr>
      <td align="center">Novo Profissional</td>
      <td align="center">Cadastrar Foto</td>
      <td align="center">Adicionar Titulo</td>
      <td align="center">Cadastrar Ficha</td>
    </tr>
  </tbody>
</table>

</body>
</html>