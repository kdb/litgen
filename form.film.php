<!-- Viser formularen 'Film' -->

<?php
    //Init querystring-variabler    
    if(empty($_REQUEST['titel'])) $_REQUEST['titel']="";
    if(empty($_REQUEST['instruktor'])) $_REQUEST['instruktor']="";
    if(empty($_REQUEST['forfatter'])) $_REQUEST['forfatter']="";    
    if(empty($_REQUEST['udgivelse'])) $_REQUEST['udgivelse']="";
    if(empty($_REQUEST['url'])) $_REQUEST['url']="";
    if(empty($_REQUEST['dato_d'])) $_REQUEST['dato_d']="";
    if(empty($_REQUEST['dato_m'])) $_REQUEST['dato_m']="";
    if(empty($_REQUEST['dato_y'])) $_REQUEST['dato_y']="";
    if(empty($_REQUEST['database_d'])) 		$_REQUEST['database_d']="";
    if(empty($_REQUEST['database_m'])) 		$_REQUEST['database_m']="";
    if(empty($_REQUEST['database_y'])) 		$_REQUEST['database_y']="";
?>   	
    
<form id="form_film">
	<table border="0">
		<tr>    
			<td colspan="2"><img src="images/dut.gif" alt="" />&nbsp;<b>Filmens titel</b><br><input size="70" type="text" name="titel" value="<?=$_REQUEST['titel']?>"></td>        
		</tr>    
		<tr>
			<td><img src="images/dut.gif" alt="" />&nbsp;<b>Instruktør</b><br><input size="30" type="text" name="instruktor" value="<?=$_REQUEST['instruktor']?>"></td>    		
			<td>Manuskriptforfatter<br><input size="30" type="text" name="forfatter" value="<?=$_REQUEST['forfatter']?>"></td>    
		</tr>
     	<tr>                        	
			<td>Udgivelsesår<br><input size="4" maxlength="4" type="text" name="udgivelse" value="<?=$_REQUEST['udgivelse']?>"> <font size="2">åååå</font></td>
     	</tr>
    	<tr>
        	<td height="10"></td>
    	</tr>
    	<tr>                        	
    		<td colspan="2"><i>Hvis filmen er set på internettet:</i></td>
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
				<input type="submit" name="submitKnap" value="Tilføj" onClick="return validateForm('film')">
                <?=$reset?>
			</td>
		</tr>    
	</table>
	<input type="hidden" name="ressource" value="film">
</form>
