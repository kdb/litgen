<?php
    if(empty($_REQUEST['antal_forfattere']))
    	$antal_forfattere=1;
    else
    	$antal_forfattere=$_REQUEST['antal_forfattere'];
    
    //En forfatter mere eller mindre        
    if(empty($_REQUEST['submitKnap'])) $_REQUEST['submitKnap']="";
    if($_REQUEST['submitKnap']=="her")
    	$antal_forfattere++;
    
    //Init querystring-variabler
    if(empty($_REQUEST['forfatter_redaktor'])) $_REQUEST['forfatter_redaktor']="forfatter";                        
    if(empty($_REQUEST['efternavn'])) $_REQUEST['efternavn']="";
    if(empty($_REQUEST['fornavn'])) $_REQUEST['fornavn']="";            
    for($a=1;$a<$antal_forfattere;$a++){
    	if(empty($_REQUEST['fornavn'.$a])) $_REQUEST['fornavn'.$a]="";
        if(empty($_REQUEST['efternavn'.$a])) $_REQUEST['efternavn'.$a]=""; 
    }
    if(empty($_REQUEST['efternavn_afsnit'])) $_REQUEST['efternavn_afsnit']="";
    if(empty($_REQUEST['fornavn_afsnit'])) $_REQUEST['fornavn_afsnit']="";
		if(empty($_REQUEST['titel_bog'])) 		$_REQUEST['titel_bog']="";
    if(empty($_REQUEST['titel_afsnit'])) 	$_REQUEST['titel_afsnit']="";
    if(empty($_REQUEST['bindnummer'])) 		$_REQUEST['bindnummer']="";
    if(empty($_REQUEST['udgave'])) 			$_REQUEST['udgave']="1";
    if(empty($_REQUEST['forlag'])) 			$_REQUEST['forlag']="";
    if(empty($_REQUEST['udgivelse'])) 		$_REQUEST['udgivelse']="";
    if(empty($_REQUEST['side_fra'])) 		$_REQUEST['side_fra']="";
    if(empty($_REQUEST['side_til'])) 		$_REQUEST['side_til']="";
    if(empty($_REQUEST['url'])) 			$_REQUEST['url']="";
    if(empty($_REQUEST['dato_d'])) 			$_REQUEST['dato_d']="";
    if(empty($_REQUEST['dato_m'])) 			$_REQUEST['dato_m']="";
    if(empty($_REQUEST['dato_y'])) 			$_REQUEST['dato_y']="";
    if(empty($_REQUEST['database_d'])) 		$_REQUEST['database_d']="";
    if(empty($_REQUEST['database_m'])) 		$_REQUEST['database_m']="";
    if(empty($_REQUEST['database_y'])) 		$_REQUEST['database_y']="";
?>

<!-- Viser formularen 'Afsnit i bøger' -->
    	    
<form id="form_afsnit">
	<table border="0">
		<tr>
			<td>
				<?php
                	if($_REQUEST['forfatter_redaktor']=="forfatter")
						print("Forfatter <input type=\"radio\" name=\"forfatter_redaktor\" value=\"forfatter\" CHECKED>&nbsp;&nbsp;");
					else
						print("Forfatter <input type=\"radio\" name=\"forfatter_redaktor\" value=\"forfatter\">&nbsp;&nbsp;");
					
                    if($_REQUEST['forfatter_redaktor']=="redaktor")
						print("Redaktør <input type=\"radio\" name=\"forfatter_redaktor\" value=\"redaktor\" CHECKED>&nbsp;&nbsp;");
					else
						print("Redaktør <input type=\"radio\" name=\"forfatter_redaktor\" value=\"redaktor\">&nbsp;&nbsp;");    
				?>
			</td>
		</tr>            
		<tr>
			<td colspan=2 align="left"><hr><b>Bogens</b> forfatter(e)/redaktør(e)</td>
    </tr>
    <tr>
      	<td>
          <img src="images/dut.gif" alt="" /> <b>Fornavn</b><br><input size="30" type="text" name="fornavn" value="<?=$_REQUEST['fornavn']?>">
        </td>
		    <td>
          <img src="images/dut.gif" alt="" /> <b>Efternavn</b> <br><input size="30" type="text" name="efternavn" value="<?=$_REQUEST['efternavn']?>">
        </td>    
		</tr>
		<?php
			for($a=1;$a<$antal_forfattere;$a++){        
    			print("<tr>");        
    			print("<td>Fornavn<br><input size=\"30\" type=\"text\" name=\"fornavn".$a."\" value=\"".$_REQUEST['fornavn'.$a]."\"></td>");
    			print("<td>Efternavn<br><input size=\"30\" type=\"text\" name=\"efternavn".$a."\" value=\"".$_REQUEST['efternavn'.$a]."\"></td>");
    			print("</tr>");
			}
        ?>
			<tr>
            	<td colspan="2">Flere forfattere/redaktører, klik <input type="submit" name="submitKnap" value="her"><hr></td>
            </tr>        
			<input type="hidden" name="antal_forfattere" value="<?=$antal_forfattere?>">        
		<tr>
			<td colspan=2 align="left"><b>Afsnittets</b> forfatter/redaktør</td>
     	</tr>
        <tr>
			<td>Fornavn<br><input size="30" type="text" name="fornavn_afsnit" value="<?=$_REQUEST['fornavn_afsnit']?>"></td>
			<td>Efternavn<br><input size="30" type="text" name="efternavn_afsnit" value="<?=$_REQUEST['efternavn_afsnit']?>"></td>    
		</tr>
		<tr>
        	<td colspan=2><hr></td>
        </tr>
        <tr>
			<td><img src="images/dut.gif" alt="" /> Titel på bog</b><br><input size="30" type="text" name="titel_bog" value="<?=$_REQUEST['titel_bog']?>"></td>
			<td><img src="images/dut.gif" alt="" /> <b>Titel på afsnit</b><br><input size="30" type="text" name="titel_afsnit" value="<?=$_REQUEST['titel_afsnit']?>"></td>		
		</tr>
		<tr>
			<td>Bindnummer <br><input size="30" type="text" name="bindnummer" value="<?=$_REQUEST['bindnummer']?>"></td>       
		</tr>
		<tr>                        	
			<td><img src="images/dut.gif" alt="" /> <b>Udgave</b><br><input size="30" type="text" name="udgave" value="<?=$_REQUEST['udgave']?>"></td>
           	<td><img src="images/dut.gif" alt="" /> <b>Forlag</b><br><input size="30" type="text" name="forlag" value="<?=$_REQUEST['forlag']?>"></td>
		</tr>
    <tr>
    	<td><?=$_REQUEST['forlag']?></td>
    </tr>
		<tr>                        	
            <td><img src="images/dut.gif" alt="" /> <b>Udgivelsesår</b><br><input size="4" maxlength="4" type="text" name="udgivelse" value="<?=$_REQUEST['udgivelse']?>"> <font size="2">åååå</font></td>
            <td><img src="images/dut.gif" alt="" /> <b>Fra side til side</b><br><input size="4" type="text" name="side_fra" value="<?=$_REQUEST['side_fra']?>">&nbsp;&nbsp;<input size="4" type="text" name="side_til" value="<?=$_REQUEST['side_til']?>"></td>
        </tr>
    	<tr>
        	<td height="10"></td>
     	</tr>
     	<tr>                        	
			<td colspan="2"><i>Hvis du har læst bogen på internettet:</i></td>
		</tr>    
     	<tr>                        	
            <td>Internetadresse<br><input size="30" type="text" name="url" value="<?=$_REQUEST['url']?>"></td>
            <td>Besøgt d.<br><input size="2" maxlength="2" type="text" name="dato_d" value="<?=$_REQUEST['dato_d']?>">.<input size="2" maxlength="2" type="text" name="dato_m" value="<?=$_REQUEST['dato_m']?>">.<input size="4" maxlength="4" type="text" name="dato_y" value="<?=$_REQUEST['dato_y']?>"><font size="2">dd.mm.åååå</font></td>
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
				<input type="submit" name="submitKnap" value="Tilføj" onClick="return validateForm('afsnit')">
                <?=$reset?>                                
			</td>
		</tr>    
	</table>
	<input type="hidden" name="ressource" value="afsnit">    
</form>
