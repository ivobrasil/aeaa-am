<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Profissional - Ficha</title>

<link rel="stylesheet" href="css/aeaasis.css" type="text/css">
  
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
</head>
</head>

<body>
<?PHP
include "menusuperior.php";
?>

<?PHP

	$profissional = $_GET['id'];

	include "conbd.php";
	
    $sql = "SELECT * FROM tb_profissional INNER JOIN tb_titulos ON tb_profissional.id_titulo = tb_titulos.id_titulo WHERE id_profissional = $profissional";
    $rs = mysql_query($sql, $conexao);
	
    $row = mysql_fetch_array($rs);
		$registro = $row['id_profissional'];
		$nomep = $row['nm_profissional'];
		$Sexo = $row['nm_sexo'];
		$Naturalidade = $row['nm_naturalidade'];
		$Nacionalidade = $row['nm_nacionalidade'];
		$Nascimento = $row['dt_aniversario'];
	
	function muda_data_amd($dt)
{
$dia = substr($dt,8,2);
$mes = substr($dt,5,2);
$ano = substr($dt,0,4);
$data = $dia."/".$mes."/".$ano;
return $data;
}

$datanasc = muda_data_amd($Nascimento);
	
		$CPF = $row['nr_cpf'];
		$RG = $row['nr_rg'];
		$rgemissor = $row['nm_orgaoemissor'];
		$rnp = $row['nr_rnp'];
	    $estadocivil = $row['nm_estadocivil'];
	    $tituloprofissional = $row['nm_titulo'];
		$enderecop = $row['end_local'];
		$endereconp = $row['end_nr'];
	 	$endcompleta = $row['end_comp'];
		$endbairro = $row['id_bairro'];
		$endcidade = $row['end_cidade'];
		$enduf = $row['end_uf'];
		$cep = $row['end_cep'];
		$foneddd = $row['nr_dddf'];
		$fonenr = $row['nr_fone'];
		$celddd = $row['nr_dddc'];
		$celnr = $row['nr_celular'];
		$email = $row['end_email'];
		
		$dataregistro = $row['dt_registro'];
		$datareg = muda_data_amd($dataregistro);
	
	
    mysql_free_result($rs);
    mysql_close ($conexao);
?>

<?PHP

	$fotoid = $_GET['id'];

$conexao = mysql_connect("localhost","aeaaamor_sispro","@3aas!spr18");
    mysql_set_charset('utf8',$conexao);
    $db = mysql_select_db("aeaaamor_controle",$conexao);
	
    $sql = "SELECT * FROM tb_imagens WHERE idprofissional = $fotoid";
    $rs = mysql_query($sql, $conexao);
    
    $rowfoto = mysql_fetch_array($rs);
		$nmfoto = $rowfoto['arquivo'];
    
    mysql_free_result($rs);
    mysql_close ($conexao);
?>



<table width="762" border="0" cellpadding="10">
  <tbody>
    <tr>
      <td width="359"><img src="upload/<?php print $nmfoto; ?>" width="120" height="170" alt=""/></td>
      <td width="357"><img src="img/logo-aeaa-h.png" width="347" height="112" alt=""/></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><strong style="font-size: 18px">FICHA DE INSCRIÇÃO</strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Nome: <?php print $nomep; ?> </td>
      <td>Sexo: <?php print $Sexo; ?></td>
    </tr>
    <tr>
      <td>Naturalidade: <?php print $Naturalidade; ?></td>
      <td>Nacionalidade: <?php print $Nacionalidade; ?></td>
    </tr>
    <tr>
      <td>Nascimento: <?php print $datanasc; ?></td>
      <td>CPF: <?php print $CPF; ?></td>
    </tr>
    <tr>
      <td>RG: <?php print $RG; ?> Órgão Emissor: <?php print $rgemissor; ?></td>
      <td>CREA/RNP: <?php print $rnp; ?></td>
    </tr>
    <tr>
      <td>Estado Civil: <?php print $estadocivil; ?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Título(s):<br>
      <?php print $tituloprofissional; ?><br></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><strong style="font-size: 18px">ENDEREÇO</strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Rua: <?php print $enderecop; ?>, <?php print $endereconp; ?> (<?php print $endcompleta; ?>)</td>
      <td>Bairro: <?php print $tituloprofissional; ?></td>
    </tr>
    <tr>
      <td>Cidade: <?php print $endcidade; ?> / <?php print $enduf; ?> </td>
      <td>CEP: <?php print $cep; ?></td>
    </tr>
    <tr>
      <td>Telefone: (<?php print $foneddd; ?>) <?php print $fonenr; ?></td>
      <td>Celular: (<?php print $celddd; ?>) <?php print $celnr; ?></td>
    </tr>
    <tr>
      <td>E-mail: <?php print $email; ?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Data de registro: <?php print $datareg; ?></td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
<?PHP
include "rodape.php";
?>
</body>
</html>