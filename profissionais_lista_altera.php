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
    $sql = "SELECT * FROM tb_profissional ORDER BY nm_profissional ASC";
    $rs = mysql_query($sql, $conexao);
    
    echo "<table width=\"890px\">";
    echo "<tr><th width=\"350px\" bgcolor=\"#e2e2ca\">Nome</th>";
    echo "<th width=\"90px\" bgcolor=\"#e2e2ca\">CPF</th>";
	echo "<th width=\"90px\" bgcolor=\"#e2e2ca\">Alterar</th>";
    
    while ($reg = mysql_fetch_array($rs)) {
		$id = $reg["id_profissional"];
        $nomeProfissional = $reg["nm_profissional"];
        $nrCPF = $reg["nr_cpf"];
        
	echo "<tr>";
    echo "<th width=\"350px\" align=left>";
    echo $nomeProfissional;
    echo "</th>";
	echo "<th width=\"90px\">";
	echo $nrCPF;
	echo "</th>";
	echo "<th width=\"90px\">";
	echo "<a href=\"profissionais_altera.php?id=$id\">Alterar</a>";
	echo "</th>";	
	echo "</tr>";

    }
    echo "</table>";
    
    mysql_free_result($rs);
    mysql_close ($conexao);

    ?>
</body>
</html>