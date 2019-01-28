<!-- Viser formularen 'Musik' -->

<?php
    //Init querystring-variabler    
    if(empty($_REQUEST['titel'])) $_REQUEST['titel']="";
    if(empty($_REQUEST['sang'])) $_REQUEST['sang']="";
    if(empty($_REQUEST['kunstner'])) $_REQUEST['kunstner']="";
    if(empty($_REQUEST['pladeselskab'])) $_REQUEST['pladeselskab']="";
    if(empty($_REQUEST['udgivelse'])) $_REQUEST['udgivelse']="";
    if(empty($_REQUEST['url'])) $_REQUEST['url']="";
    if(empty($_REQUEST['dato_d'])) $_REQUEST['dato_d']="";
    if(empty($_REQUEST['dato_m'])) $_REQUEST['dato_m']="";
    if(empty($_REQUEST['dato_y'])) $_REQUEST['dato_y']="";            
?>        	
    <form id="form_musik">
    	<table border="0">
    		<tr>    
    			<td colspan="2"><img src="images/dut.gif" alt="" />&nbsp;<b>Titel på CD</b> <br><input size="40" type="text" name="titel" value="<?=$_REQUEST['titel']?>"></td>        
    		</tr>    
    		<tr>
    			<td colspan="2">Titel på nummer <font size="2">(Evt. flere numre adskildt med komma)</font><br><input size="80" type="text" name="sang" value="<?=$_REQUEST['sang']?>"></td>    		
    		</tr>       
    		<tr>                        	
				<td><img src="images/dut.gif" alt="" />&nbsp;<b>Kunstner/Bandnavn</b><br><input size="30" type="text" name="kunstner" value="<?=$_REQUEST['kunstner']?>"></td>
               	<td>Pladeselskab<br><input size="30" type="text" name="pladeselskab" value="<?=$_REQUEST['pladeselskab']?>"></td>
    		</tr>
	        <tr>                        	
				<td>Udgivelsesår<br><input size="4" maxlength="4" type="text" name="udgivelse" value="<?=$_REQUEST['udgivelse']?>"> <font size="2">åååå</font></td>
	        </tr>
	       	<tr>
	           	<td height="10"></td>
	        </tr>
	        <tr>                        	
				<td colspan="2"><i>Hvis CD'en/nummeret er hørt på internettet:</i></td>
			</tr>    
	        <tr>                        	
				<td>Internetadresse<br><input size="30" type="text" name="url" value="<?=$_REQUEST['url']?>"></td>                            
					<td>Besøgt d.<br><input size="2" maxlength="2" type="text" name="dato_d" value="<?=$_REQUEST['dato_d']?>">.<input size="2" maxlength="2" type="text" name="dato_m" value="<?=$_REQUEST['dato_m']?>">.<input size="4" maxlength="4" type="text" name="dato_y" value="<?=$_REQUEST['dato_y']?>"><font size="2">dd.mm.åååå</font></td>
			</tr>
	        <tr>
	          	<td height="10"></td>
			</tr>                        
			<tr>
    			<td>
    				<input type="submit" name="submitKnap" value="Tilføj" onClick="return validateForm('musik')">
                    <?=$reset?>
    			</td>
    		</tr>    
    	</table>
    	<input type="hidden" name="ressource" value="musik">
    </form>