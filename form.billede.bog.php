<form id='form_billede_bog'>
	<table border='0'>
		<tr>
			<td><img src="images/dut.gif" alt="" /> <b>Billedets/værkets titel</b><br><input size="30" type="text" name="titel" value="<?=$_REQUEST['titel']?>"></td>
		</tr>
		<tr>
			<td><img src="images/dut.gif" alt="" /> <b>Kunstnerens fornavn</b> <br><input size="30" type="text" name="fornavn" value="<?=$_REQUEST['fornavn']?>"></td>
			<td colspan=2><img src="images/dut.gif" alt="" /> <b>Kunstnerens efternavn</b> <br><input size="30" type="text" name="efternavn" value="<?=$_REQUEST['efternavn']?>"></td>    
		</tr>    
		<?php
			for($a=1;$a<$antal_forfattere;$a++){        
    			print("<tr>");        
    			print("<td>Fornavn<br><input size=\"30\" type=\"text\" name=\"fornavn".$a."\" value=\"".$_REQUEST['fornavn'.$a]."\"></td>");
    			print("<td>Efternavn<br><input size=\"30\" type=\"text\" name=\"efternavn".$a."\" value=\"".$_REQUEST['efternavn'.$a]."\"></td>");
    			print("</tr>");
			}
        ?>
			<!--<tr><td colspan="2">Flere kunstnere, klik <input type="submit" name="submitKnap" value="her"></td></tr>-->        
			<input type="hidden" name="antal_forfattere" value="<?=$antal_forfattere?>">
			<input type="hidden" name="sted" value="<?=$_REQUEST['sted']?>">
		<tr>            	
			<td>Produktionsår<br><input size="4" maxlength="4" type="text" name="produktion" value="<?=$_REQUEST['produktion']?>"> <font size="2">åååå</font></td>
		</tr>
    <tr>
		  <td>
        <img src="images/dut.gif" alt="" /> <b>Bogens titel</b><br><input size="30" type="text" name="bogtitel" value="<?=$_REQUEST['bogtitel']?>">
       </td>
		</tr>                    
		<tr>            
      <td><img src="images/dut.gif" alt="" />&nbsp;<b>Forlag</b><br><input size="30" type="text" name="forlag" value="<?=$_REQUEST['forlag']?>"></td>
			<td><img src="images/dut.gif" alt="" /> <b>Udgivelsesår</b><br><input size="4" maxlength="4" type="text" name="udgivelse" value="<?=$_REQUEST['udgivelse']?>"> <font size="2">åååå</font></td>
    </tr>
    <tr>
			<td><img src="images/dut.gif" alt="" /> <b>Fra side</b> til side</b><br><input size="4" type="text" name="side_fra" value="<?=$_REQUEST['side_fra']?>">&nbsp;&nbsp;<input size="4" type="text" name="side_til" value="<?=$_REQUEST['side_til']?>"></td>
		</tr>
        <tr>
            <td height="10"></td>
        </tr>
        <tr>
            <td>Fundet i: Databasenavn<br><input size="30" type="text" name="database_name" value="<?=$_REQUEST['database_name']?>"></td>
            <td>Besøgt d.<br><input size="2" maxlength="2" type="text" name="database_d" value="<?=$_REQUEST['database_d']?>">.<input size="2" maxlength="2" type="text" name="database_m" value="<?=$_REQUEST['database_m']?>">.<input size="4" maxlength="4" type="text" name="database_y" value="<?=$_REQUEST['database_y']?>"><font size="2">dd.mm.åååå</font></td>
        </tr>
        <tr>
            <td height="10"></td>
        </tr>
        <tr>
			<td>
				<input type="submit" name="submitKnap" value="Tilføj" onClick="return validateForm('billede_bog')">
                <?=$reset?>
			</td>
		</tr>    
	</table>
	<input type="hidden" name="ressource" value="<?=$_REQUEST['ressource']?>">                    
</form>
        