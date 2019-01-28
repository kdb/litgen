<!-- Viser formularen 'Andre kilder' -->

<?php    
    //Init querystring-variabler    
    if(empty($_REQUEST['ansvarlig'])) 	$_REQUEST['ansvarlig']="";
    if(empty($_REQUEST['type'])) 		$_REQUEST['type']="";
    if(empty($_REQUEST['medvirkende'])) $_REQUEST['medvirkende']="";        
    if(empty($_REQUEST['sted'])) 		$_REQUEST['sted']="";                
	if(empty($_REQUEST['dato_d'])) 		$_REQUEST['dato_d']="";
    if(empty($_REQUEST['dato_m'])) 		$_REQUEST['dato_m']="";
    if(empty($_REQUEST['dato_y'])) 		$_REQUEST['dato_y']="";
?>            	
    <form id="form_andet">
    	<table border="0">
    		<tr>    
    			<td><img src="images/dut.gif" alt="" />&nbsp;<b>Ansvarlig</b><br><input size="30" type="text" name="ansvarlig" value="<?=$_REQUEST['ansvarlig']?>"></td>        
    			<td><img src="images/dut.gif" alt="" />&nbsp;<b>Kilde-type (f.eks. Interview)</b><br><input size="30" type="text" name="type" value="<?=$_REQUEST['type']?>"></td>    		
    		</tr>    
    		<tr>    
    			<td>Medvirkende<br><input size="30" type="text" name="medvirkende" value="<?=$_REQUEST['medvirkende']?>"></td>    
    			<td>Sted<br><input size="30" type="text" name="sted" value="<?=$_REQUEST['sted']?>"></td>                            
			</tr>
	        <tr>                        		    	
				<td><img src="images/dut.gif" alt="" />&nbsp;<b>Dato</b><br><input size="2" maxlength="2" type="text" name="dato_d" value="<?=$_REQUEST['dato_d']?>">.<input size="2" maxlength="2" type="text" name="dato_m" value="<?=$_REQUEST['dato_m']?>">.<input size="4" maxlength="4" type="text" name="dato_y" value="<?=$_REQUEST['dato_y']?>"> <font size="2">dd.mm.åååå</font></td>
    		</tr>
	        <tr>
	          	<td height="10"></td>
			</tr>                        
			<tr>
    			<td>
    				<input type="submit" name="submitKnap" value="Tilføj" onClick="return validateForm('andet')">
                    <?=$reset?>
    			</td>
    		</tr>    
    	</table>
    	<input type="hidden" name="ressource" value="andet">
    </form>    
