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

<link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
</head>

<body>
<?PHP
include "menusuperior-rel.php";
?>
<br/><br/><br/>
   
   
   
    <?php
    include "conbd.php";
	
	
	$count = mysql_query("SELECT COUNT(*) AS Total FROM tb_profissional");
	echo "Total de Profissionais: ";
	echo mysql_result($count, 0);
	
	?>
   
    <?php
	
    $sql = "SELECT * FROM tb_profissional ORDER BY nm_profissional ASC";
    $rs = mysql_query($sql, $conexao);
    
    echo "<table width=\"890px\">";
    echo "<tr><th width=\"450px\" bgcolor=\"#e2e2ca\">Nome</th>";
    echo "<th width=\"90px\" bgcolor=\"#e2e2ca\">CPF</th>";
    
    while ($reg = mysql_fetch_array($rs)) {
        $nomeProfissional = $reg["nm_profissional"];
        $nrCPF = $reg["nr_cpf"];
		$idprofissional = $reg["id_profissional"];
        
	echo "<tr>";
    echo "<th width=\"450px\" align=left>";
    echo "<a href='profissional_ficha.php?id=$idprofissional'>$nomeProfissional</a>";
    echo "</th>";
	echo "<th width=\"90px\">";
	echo $nrCPF;
	echo "</th>";
	echo "</tr>";

    }
    echo "</table>";
    
    mysql_free_result($rs);
    mysql_close ($conexao);

    ?>
</body>
</html>