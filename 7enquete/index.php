<html>
<head>
<title>Enquete</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body ><center>
<form action="votar.php" method="post">
    <table width="300" border="1">
      <tr bgcolor="#FFFFFF"> 
        <td colspan="2" align="center" bordercolor="#000000"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>
          Enquete</strong></font></td>
      </tr>
      <tr bgcolor="#FFFFFF"> 
        <td colspan="2" align="center" bordercolor="#000000"><em><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>O 
          que voc&ecirc; acha da linguagem PHP ?</strong></font></em></td>
      </tr>
      <tr bgcolor="#FFFFFF"> 
        <td width="67" align="center" bordercolor="#000000"> <input type="radio" name="opc" value="otimo"> 
          &nbsp;</td>
        <td width="217" align="left" bordercolor="#000000"><strong><font color="#00FF33" size="2" face="Verdana, Arial, Helvetica, sans-serif">&Oacute;timo</font></strong></td>
      </tr>
      <tr bgcolor="#FFFFFF"> 
        <td align="center" bordercolor="#000000"> <input type="radio" name="opc" value="bom"> 
          &nbsp;</td>
        <td align="left" bordercolor="#000000"><strong><font color="#0000FF" size="2" face="Verdana, Arial, Helvetica, sans-serif">Bom</font></strong></td>
      </tr>
      <tr bgcolor="#FFFFFF"> 
        <td align="center" bordercolor="#000000"> <input type="radio" name="opc" value="mais_ou_menos"> 
          &nbsp;</td>
        <td align="left" bordercolor="#000000"><strong><font color="#FF9900" size="2" face="Verdana, Arial, Helvetica, sans-serif">Mais 
          ou Menos</font></strong></td>
      </tr>
      <tr bgcolor="#FFFFFF"> 
        <td align="center" bordercolor="#000000"> <input type="radio" name="opc" value="ruim"> 
          &nbsp;</td>
        <td align="left" bordercolor="#000000"><strong><font color="#FF0000" size="2" face="Verdana, Arial, Helvetica, sans-serif">Ruim</font></strong></td>
      </tr>
      <tr align="right" bgcolor="#FFFFFF"> 
        <td bordercolor="#000000"> <input name="submit" type="submit" value="Votar"> 
          &nbsp;</td>
        <td bordercolor="#000000"><a href="resultado.php" target="_blank"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Resultado 
          Parcial</font></a>&nbsp;</td>
      </tr>
      
    </table>
</form>
<?php 
     if(isset($_POST["Votar2"])){
		if($_POST["Votar"]=="Votar2"){  
?>
<form action="votar2.php" method="post">
<?php }}?>
    <table width="300" border="1">
      <tr bgcolor="#FFFFFF"> 
        <td colspan="2" align="center" bordercolor="#000000"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>
          Enquete</strong></font></td>
      </tr>
      <tr bgcolor="#FFFFFF"> 
        <td colspan="2" align="center" bordercolor="#000000"><em><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>O 
          que voc&ecirc; acha da linguagem Java ?</strong></font></em></td>
      </tr>
      <tr bgcolor="#FFFFFF"> 
        <td width="67" align="center" bordercolor="#000000"> <input type="radio" name="opc" value="otimo"> 
          &nbsp;</td>
        <td width="217" align="left" bordercolor="#000000"><strong><font color="#00FF33" size="2" face="Verdana, Arial, Helvetica, sans-serif">&Oacute;timo</font></strong></td>
      </tr>
      <tr bgcolor="#FFFFFF"> 
        <td align="center" bordercolor="#000000"> <input type="radio" name="opc" value="bom"> 
          &nbsp;</td>
        <td align="left" bordercolor="#000000"><strong><font color="#0000FF" size="2" face="Verdana, Arial, Helvetica, sans-serif">Bom</font></strong></td>
      </tr>
      <tr bgcolor="#FFFFFF"> 
        <td align="center" bordercolor="#000000"> <input type="radio" name="opc" value="mais_ou_menos"> 
          &nbsp;</td>
        <td align="left" bordercolor="#000000"><strong><font color="#FF9900" size="2" face="Verdana, Arial, Helvetica, sans-serif">Mais 
          ou Menos</font></strong></td>
      </tr>
      <tr bgcolor="#FFFFFF"> 
        <td align="center" bordercolor="#000000"> <input type="radio" name="opc" value="ruim"> 
          &nbsp;</td>
        <td align="left" bordercolor="#000000"><strong><font color="#FF0000" size="2" face="Verdana, Arial, Helvetica, sans-serif">Ruim</font></strong></td>
      </tr>
      <tr align="right" bgcolor="#FFFFFF"> 
        <td bordercolor="#000000"> <input name="Votar" type="submit" value="Votar2"> 
          &nbsp;</td>
        <td bordercolor="#000000"><a href="resultado2.php" target="_blank"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Resultado 
          Parcial</font></a>&nbsp;</td>
      </tr>
      
    </table>
</form>

</center>
</body>
</html>
