<?php              
    //Init querystring-variabler
    if(empty($_REQUEST['efternavn'])) 	$_REQUEST['efternavn']="";
    if(empty($_REQUEST['fornavn'])) 	$_REQUEST['fornavn']="";
    if(empty($_REQUEST['youtuber'])) 	$_REQUEST['youtuber']="";
    if(empty($_REQUEST['titel'])) 	    $_REQUEST['titel']="";
    if(empty($_REQUEST['serietitel']))	$_REQUEST['serietitel']="";    
    if(empty($_REQUEST['posted_d'])) 	$_REQUEST['posted_d']="";
    if(empty($_REQUEST['posted_m'])) 	$_REQUEST['posted_m']="";
    if(empty($_REQUEST['posted_y'])) 	$_REQUEST['posted_y']="";
    if(empty($_REQUEST['url'])) 		$_REQUEST['url']="";
    if(empty($_REQUEST['visit_d'])) 	$_REQUEST['visit_d']="";
    if(empty($_REQUEST['visit_m'])) 	$_REQUEST['visit_m']="";
    if(empty($_REQUEST['visit_y'])) 	$_REQUEST['visit_y']="";
?>

<!-- Viser formularen 'Youtube' -->

<form id="form_youtube">
    <table border="0">
        <tr>
        	<td colspan=2 align="left">
            	Forfatter
            </td>
        </tr>
        <tr>
        	<td>
        		Fornavn<br><input size="30" type="text" name="fornavn" value="<?=$_REQUEST['fornavn']?>">
        	</td>
        	<td>
        		Efternavn<br><input size="30" type="text" name="efternavn" value="<?=$_REQUEST['efternavn']?>">
        	</td>    
        </tr>  
        <tr>            
            <td>
            	<img src="images/dut.gif" alt="" /><b>Youtuber</b><br><input size="30" type="text" name="youtuber" value="<?=$_REQUEST['youtuber']?>">
            </td>
        </tr>      
        <tr>
            <td>
            	<img src="images/dut.gif" alt="" /><b>Titel</b><br><input size="30" type="text" name="titel" value="<?=$_REQUEST['titel']?>">
            </td>
            <td>
            	Serietitel<br><input size="30" type="text" name="serietitel" value="<?=$_REQUEST['serietitel']?>">
            </td>
        <tr>            
            <td>
            	<img src="images/dut.gif" alt="" /><b>Offentliggjort den</b><br><input size="2" maxlength="2" type="text" name="posted_d" value="<?=$_REQUEST['posted_d']?>">.<input size="2" maxlength="2" type="text" name="posted_m" value="<?=$_REQUEST['posted_m']?>">.<input size="4" maxlength="4" type="text" name="posted_y" value="<?=$_REQUEST['posted_y']?>"><font size="2">dd.mm.åååå</font>
            </td>
        </tr>
        <tr>                        	
            <td>
            	<img src="images/dut.gif" alt="" /><b>URL</b><br><input size="30" type="text" name="url" value="<?=$_REQUEST['url']?>">
            </td>
            <td>
            	<img src="images/dut.gif" alt="" /><b>Besøgt d.</b><br><input size="2" maxlength="2" type="text" name="visit_d" value="<?=$_REQUEST['visit_d']?>">.<input size="2" maxlength="2" type="text" name="visit_m" value="<?=$_REQUEST['visit_m']?>">.<input size="4" maxlength="4" type="text" name="visit_y" value="<?=$_REQUEST['visit_y']?>"><font size="2">dd.mm.åååå</font>
            </td>
        </tr>
        <tr>
        	<td height="10"></td>
        </tr>                        
        <tr>
            <td>
                <input type="submit" name="submitKnap" value="Tilføj" onClick="return validateForm('youtube')">
                <?=$reset?>
            </td>
        </tr>    
    </table>
    <input type="hidden" name="ressource" value="youtube">    
</form>
