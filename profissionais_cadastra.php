<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Documento sem título</title>
<link rel="stylesheet" href="css/aeaasis.css" type="text/css">



<link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   
<!-- Valida campos do formulário de entrega -->
<script language="javascript">
function valida_form()	 {
	if (document.registroprofissional.nomecompleto.value == "") {
		alert("Por favor, preencha o campo [Nome].");
		registroprofissional.nomecompleto.focus();
		return false;
	}
	
		if (document.registroprofissional.selectsexo.value == "-") {
		alert("Por favor, selecione o [Sexo].");
		registroprofissional.selectsexo.focus();
		return false;
	}
		if (document.registroprofissional.naturalde.value == "") {
		alert("Por favor, preencha o campo [Naturalidade].");
		registroprofissional.naturalde.focus();
		return false;
	}
		if (document.registroprofissional.nacionalidade.value == "") {
		alert("Por favor, preencha o campo [Nacionalidade].");
		registroprofissional.nacionalidade.focus();
		return false;
	}
		if (document.registroprofissional.numerocpf.value == "") {
		alert("Por favor, preencha o campo [CPF].");
		registroprofissional.numerocpf.focus();
		return false;
	}
	return true;
}
	
	//Aceita somente valores numericos.
	function numero_inteiro(e) {
		var tecla=(window.event)?event.keyCode:e.which;
		if((tecla > 47 && tecla < 58)) return true;
		else {
			if (tecla != 8) return false;
			else return true;
		}
	}
	
	//Colocar campo em caixa alta
	function toUpper(element) {
   element.value = element.value.toUpperCase();
}
		
/*function validaCPF($cpf = null) {
 
    // Verifica se um número foi informado
    if(empty($cpf)) {
        return false;
    }
 
    // Elimina possivel mascara
    $cpf = ereg_replace('[^0-9]', '', $cpf);
    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
     
    // Verifica se o numero de digitos informados é igual a 11 
    if (strlen($cpf) != 11) {
        return false;
    }
    // Verifica se nenhuma das sequências invalidas abaixo 
    // foi digitada. Caso afirmativo, retorna falso
    else if ($cpf == '00000000000' || 
        $cpf == '11111111111' || 
        $cpf == '22222222222' || 
        $cpf == '33333333333' || 
        $cpf == '44444444444' || 
        $cpf == '55555555555' || 
        $cpf == '66666666666' || 
        $cpf == '77777777777' || 
        $cpf == '88888888888' || 
        $cpf == '99999999999') {
        return false;
     // Calcula os digitos verificadores para verificar se o
     // CPF é válido
     } else {   
         
        for ($t = 9; $t < 11; $t++) {
             
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }
 
        return true;
    }
}*/
	
</script>

<!--jQuery-->
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/jquery.mask.min.js"></script>

<script>
$(document).ready(function(){
    $('#data').mask('00/00/0000');
	$('#cpf').mask('000.000.000-00');
	$('#numerornp').mask('000000000-0');
	$('#numerocep').mask('00.000-000');
});

</script>
</head>
<body>


<table width="825" border="0">
  <tbody>
    <tr>
      <td colspan="2"><?PHP include "menusuperior.php";?></td>
    </tr>
	</tbody>
	</table>

<div style="background-color:#BDC2C9">

<form name="registraprofissional" method="post" action="profissional_salva.php" onSubmit="return valida_form(this);">




<table width="825" border="0">
  <tbody>
    <tr>
      <td colspan="2" style="background-color:#424B56"><div style="align-content: center; font-weight: bold; color: white;" align="center">FICHA DE INSCRIÇÃO</div></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="439"><label>Nome Completo</label></td>
      <td width="376">Sexo</td>
    </tr>
    <tr>
      <td><input type="text" name="nomecompleto" size="40" maxlength="200" class="fsInput" onkeyup="toUpper(this);"></td>
      <td><select name="selectsexo" class="fsSelect">
      <option value="-" selected>-</option>
      <option value="F">Feminino</option>
      <option value="M">Masculino</option>
    </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><label>Naturalidade</label></td>
      <td><label>Nacionalidade</label></td>
    </tr>
    <tr>
      <td><input type="text" name="naturalde" class="fsInput"></td>
      <td><input type="text" name="nacionalidade" value="Brasileira" class="fsInput"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><label>Data de Nascimento</label></td>
      <td><label>CPF</label></td>
    </tr>
    <tr>
      <td><input type="date" name="datanasc" id="data" maxlength="10" size="10" class="fsInput"></td>
      <td><input type="text" name="numerocpf" maxlength="11" size="16" class="fsInput" onKeyPress="return numero_inteiro(event)"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><label>Identidade</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Órgão Emissor</label></td>
      <td><label>Estado Civil</label></td>
    </tr>
    <tr>
      <td><input type="text" name="identidade" maxlength="15" size="15" class="fsInput"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="identidadeemissor" maxlength="15" size="15" class="fsInput"></td>
      <td><select name="selectecivil" class="fsSelect">
      <option value="-" selected>-</option>
      <option value="Solteiro(a)">Solteiro(a)</option>
      <option value="Casado(a)">Casado(a)</option>
      <option value="Divorciado(a)">Divorciado(a)</option>
      <option value="Viúva(a)">Viúvo(a)</option>
      <option value="Separado(a)">Separado(a)</option>
    </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><label>Formação</label></td>
      <td><label>CREA/RNP</label></td>
    </tr>
    <tr>
      <td>
	<select name="selecttitulo" class="fsSelect">
   <?PHP
	//Carrega titulos
	$lista_titulos = "<option value='0'>-- Selecione um titulo</otion><br/> ";
	include "conbd.php";
	$sql_titulo = "SELECT * FROM tb_titulos ORDER BY nm_titulo ";
	$rs_titulo = mysql_query($sql_titulo,$conexao);
		 while ($reg_titulo = mysql_fetch_array($rs_titulo)) {
			 $lista_titulos = $lista_titulos . "<option value='" . $reg_titulo['id_titulo'] . "'>" . $reg_titulo['nm_titulo'] . "</option><br /> ";
		 }
		 print $lista_titulos;
	?>
     
    </select>	
     </td>
      <td><input type="text" name="crearnp" id="numerornp" maxlength="15" size="15" class="fsInput"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" style="background-color:#424B56"><div style="align-content: center; font-weight: bold; color: white;" align="center">ENDEREÇO</div></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><label>Rua / Número</label></td>
      <td><label>Bairro</label></td>
    </tr>
    <tr>
      <td><input type="text" name="enderecorua" maxlength="60" size="40" class="fsInput">
        ,
          <input type="text" name="endereconr" maxlength="5" size="5" class="fsInput"></td>
      <td>
	<select name="selectebairro" class="fsSelect">
   <?PHP
	//Carrega bairros
	$lista_bairros = "<option value='0'>-- Selecione um bairro</otion><br/> ";
	
	$sql_bairro = "SELECT * FROM tb_bairros ORDER BY nm_bairro ";
	$rs_bairro = mysql_query($sql_bairro,$conexao);
		 while ($reg_bairro = mysql_fetch_array($rs_bairro)) {
			 $lista_bairros = $lista_bairros . "<option value='" . $reg_bairro['id_bairro'] . "'>" . $reg_bairro['nm_bairro'] . "</option><br /> ";
		 }
		 print $lista_bairros;
	?>
     
    </select>	
   </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><label>Complemento</label></td>
      <td><label>Cidade / UF</label></td>
    </tr>
    <tr>
      <td><input type="text" name="endcomplemento" maxlength="50" size="50" class="fsInput"></td>
      <td>
	<input type="text" name="endcidade" maxlength="40" size="25" value="Manaus" class="fsInput"> 
	/ 
	<select name="selectuf" class="fsSelect">
      <option value="AC">AC</option>
      <option value="AL">AL</option>
      <option value="AM" selected>AM</option>
      <option value="AP">AP</option>
      <option value="BA">BA</option>
      <option value="CE">CE</option>
      <option value="DF">DF</option>
      <option value="ES">ES</option>
      <option value="GO">GO</option>
      <option value="MA">MA</option>
      <option value="MG">MG</option>
      <option value="MS">MS</option>
      <option value="MT">MT</option>
      <option value="PA">PA</option>
      <option value="PB">PB</option>
      <option value="PE">PE</option>
      <option value="PI">PI</option>
      <option value="PR">PR</option>
      <option value="RJ">RJ</option>
      <option value="RN">RN</option>
      <option value="RR">RR</option>
      <option value="RO">RO</option>
      <option value="RS">RS</option>
      <option value="SC">SC</option>
      <option value="SE">SE</option>
      <option value="SP">SP</option>
      <option value="TO">TO</option>
    </select>	
   
   </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><label>CEP</label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input type="text" name="endcep" id="numerocep" maxlength="9" size="10" class="fsInput"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><label>Fone</label></td>
      <td><label>Celular</label></td>
    </tr>
    <tr>
      <td>(<input type="text" name="dddtel" maxlength="2" size="4" value="92" class="fsInput">) <input type="tel" name="numerotel" maxlength="9" size="10" class="fsInput"></td>
      <td>(<input type="text" name="dddcel" maxlength="2" size="4" value="92" class="fsInput">) <input type="tel" name="numerocel" maxlength="9" size="10" class="fsInput"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><label>E-mail: </label></td>
      <td><label>Situação:</label></td>
    </tr>
    <tr>
      <td><input type="text" name="endemail" maxlength="40" size="40" class="fsInput"></td>
      <td><select name="selectsit" class="fsSelect">
      <option value="Ativo" selected>Ativo</option>
      <option value="Inativo">Inativo</option>
      <option value="Falecido">Falecido</option>
      <option value="Interrompido">Interrompido</option>
      <option value="Cancelado">Cancelado</option>
    </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><div style="align-content: center;" align="center"><input type="submit" value="Cadastrar" class="fsSubmitButton"></div></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

  </form>
</div>	
	<?PHP
include "rodape.php";
?>
</body>
</html>