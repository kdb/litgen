<!-- Viser formularen 'Internet' -->

<?php
    //Init querystring-variabler    
    if(empty($_REQUEST['websted'])) 	$_REQUEST['websted']="";
    if(empty($_REQUEST['titel'])) 		$_REQUEST['titel']="";
    if(empty($_REQUEST['udgiver'])) 	$_REQUEST['udgiver']="";
    if(empty($_REQUEST['opdateret_d'])) $_REQUEST['opdateret_d']="";
    if(empty($_REQUEST['opdateret_m'])) $_REQUEST['opdateret_m']="";
    if(empty($_REQUEST['opdateret_y'])) $_REQUEST['opdateret_y']="";        
    if(empty($_REQUEST['url'])) 		$_REQUEST['url']="";
    if(empty($_REQUEST['dato_d'])) 		$_REQUEST['dato_d']="";
    if(empty($_REQUEST['dato_m'])) 		$_REQUEST['dato_m']="";
    if(empty($_REQUEST['dato_y'])) 		$_REQUEST['dato_y']="";            
?>
        
<form id="form_internet">
	<table border="0">
		<tr>    
			<td colspan="2">Webstedets titel<br><input size="70" type="text" name="websted" value="<?=$_REQUEST['websted']?>"></td>        
		</tr>        
		<tr>    
			<td colspan="2"><img src="images/dut.gif" alt="" />&nbsp;<b>Sidens titel</b><br><input size="70" type="text" name="titel" value="<?=$_REQUEST['titel']?>"></td>        
		</tr>    
		<tr>
			<td><img src="images/dut.gif" alt="" />&nbsp;<b>Udgiver</b><br><input size="30" type="text" name="udgiver" value="<?=$_REQUEST['udgiver']?>"></td>   
			<td>Senest opdateret<br><input size="2" maxlength="2" type="text" name="opdateret_d" value="<?=$_REQUEST['opdateret_d']?>">.<input size="2" maxlength="2" type="text" name="opdateret_m" value="<?=$_REQUEST['opdateret_m']?>">.<input size="4" maxlength="4" type="text" name="opdateret_y" value="<?=$_REQUEST['opdateret_y']?>"> <font size="2">dd.mm.åååå eller åååå</font></td>
		</tr>
    	<tr>
        	<td height="10"></td>
     </tr>
     <tr>                        	
		<td><img src="images/dut.gif" alt="" />&nbsp;<b>Internetadresse (URL)</b><br><input size="30" type="text" name="url" value="<?=$_REQUEST['url']?>"></td>                            
		<td><img src="images/dut.gif" alt="" />&nbsp;<b>Besøgt d.</b><br><input size="2" maxlength="2" type="text" name="dato_d" value="<?=$_REQUEST['dato_d']?>">.<input size="2" maxlength="2" type="text" name="dato_m" value="<?=$_REQUEST['dato_m']?>">.<input size="4" maxlength="4" type="text" name="dato_y" value="<?=$_REQUEST['dato_y']?>"><font size="2">dd.mm.åååå</font></td>
	 </tr>
     <tr>
       	<td height="10"></td>
	</tr>                        
	<tr>
		<td>
			<input type="submit" name="submitKnap" value="Tilføj" onClick="return validateForm('internet')">
            <?=$reset?>
		</td>
	</tr>    
	</table>
	<input type="hidden" name="ressource" value="internet">
</form>    
