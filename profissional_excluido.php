
<?PHP
/* Pagina de alteracao do profissional
* data: 12 de março de 2018
* Obs: Teste de alteracao de dados obrigatorios
*/

include "conbd.php";

//recupera o ID do profissional
$id = $_GET['id'];


//Instrucao de exclusao
$sql = "DELETE FROM tb_profissional WHERE id_profissional = '" . $id . "' ";

mysql_query($sql, $conexao);

print "<meta HTTP-EQUIV='Refresh'CONTENT='0;URL=profissionais_lista_exclui.php'>";

?>