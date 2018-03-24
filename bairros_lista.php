<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>

<title>Lista de Bairros</title>
</head>

<body>
    <?php
    include "conbd.php";
    $sql = "SELECT * FROM tb_bairros ORDER BY nm_bairro ASC";
    $rs = mysql_query($sql, $conexao);
    
    echo "<table width=\"740px\">";
    echo "<tr><th width=\"70px\" bgcolor=\"#e2e2ca\">Excluir</th>";
    echo "<th width=\"70px\" bgcolor=\"#e2e2ca\">Alterar</th>";
    echo "<th width=\"150px\" bgcolor=\"#e2e2ca\">Bairros</th></tr>";
    while ($reg = mysql_fetch_array($rs)) {
        $nome = $reg["nm_bairro"];

	echo "<tr>";
    echo "<th width=\"70px\">Excluir</th>";
	echo "<th width=\"70px\">Alterar</th>";
	echo "<th width=\"150px\">";
	echo $nome;
	echo "</th>";
	echo "</tr>";

    }
    echo "</table>";
    
    mysql_free_result($rs);
    mysql_close ($conexao);

    ?>
</body>
</html>