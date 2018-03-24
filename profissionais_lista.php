<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>

<title>Lista de Profissionais</title>

<style type="text/css">
body,td,th {
	font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-style: normal;
	font-size: 14px;
	color: #000000;
}
</style>
</head>

<body>
    <?php
    include "conbd.php";
    $sql = "SELECT * FROM (tb_profissional INNER JOIN tb_titulos ON tb_profissional.id_titulo = tb_titulos.id_titulo) INNER JOIN tb_modalidades ON tb_profissional.id_modalidade = tb_modalidades.id_modalidade ORDER BY nm_profissional ASC";
    $rs = mysql_query($sql, $conexao);
    
    echo "<table width=\"890px\">";
    echo "<tr><th width=\"450px\" bgcolor=\"#e2e2ca\">Nome</th>";
    echo "<th width=\"90px\" bgcolor=\"#e2e2ca\">CPF</th>";
    echo "<th width=\"150px\" bgcolor=\"#e2e2ca\">E-mail</th>";
    echo "<th width=\"150px\" bgcolor=\"#e2e2ca\">RNP</th>";
    echo "<th width=\"120px\" bgcolor=\"#e2e2ca\">Modalidade</th></tr>";
    
    while ($reg = mysql_fetch_array($rs)) {
        $nomeProfissional = $reg["nm_profissional"];
        $nrCPF = $reg["nr_cpf"];
        $email = $reg["end_email"];
        $rnp = $reg["nr_rnp"];
        $titulo = $reg["id_titulo"];
        $modalidade = $reg["nm_modalidade"];
        
	echo "<tr>";
    echo "<th width=\"450px\" align=left>";
    echo $nomeProfissional;
    echo "</th>";
	echo "<th width=\"90px\">";
	echo $nrCPF;
	echo "</th>";
	echo "<th width=\"150px\">";
	echo $email;
	echo "</th>";
	echo "<th width=\"80px\">";
	echo $rnp;
	echo "</th>";
	echo "<th width=\"120px\">";
	echo $modalidade;
	echo "</th>";
	echo "</tr>";

    }
    echo "</table>";
    
    mysql_free_result($rs);
    mysql_close ($conexao);

    ?>
</body>
</html>