<!-- Viser formularen 'Artikel' -->       

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
    
    //Init querystring-variabler                            
    if(empty($_REQUEST['efternavn'])) $_REQUEST['efternavn']="";
    if(empty($_REQUEST['fornavn'])) $_REQUEST['fornavn']="";            
    for($a=1;$a<$antal_forfattere;$a++){
    	if(empty($_REQUEST['fornavn'.$a])) $_REQUEST['fornavn'.$a]="";
        if(empty($_REQUEST['efternavn'.$a])) $_REQUEST['efternavn'.$a]=""; 
    }
    if(empty($_REQUEST['titel'])) 		$_REQUEST['titel']="";
    if(empty($_REQUEST['bindnummer'])) 	$_REQUEST['bindnummer']="";    
    if(empty($_REQUEST['forlag'])) 		$_REQUEST['forlag']="";
    if(empty($_REQUEST['udgivelse_d'])) $_REQUEST['udgivelse_d']="";
    if(empty($_REQUEST['udgivelse_m'])) $_REQUEST['udgivelse_m']="";
    if(empty($_REQUEST['udgivelse_y'])) $_REQUEST['udgivelse_y']="";
    if(empty($_REQUEST['url'])) 		$_REQUEST['url']="";
    if(empty($_REQUEST['dato_d'])) 		$_REQUEST['dato_d']="";
    if(empty($_REQUEST['dato_m'])) 		$_REQUEST['dato_m']="";
    if(empty($_REQUEST['dato_y'])) 		$_REQUEST['dato_y']="";                
    if(empty($_REQUEST['kilde'])) 		$_REQUEST['kilde']="";
    if(empty($_REQUEST['nr'])) 		    $_REQUEST['nr']="";
    if(empty($_REQUEST['sektion'])) 	$_REQUEST['sektion']="";
    if(empty($_REQUEST['side_fra'])) 	$_REQUEST['side_fra']="";
    if(empty($_REQUEST['side_til'])) 	$_REQUEST['side_til']="";
    if(empty($_REQUEST['database_d'])) 		$_REQUEST['database_d']="";
    if(empty($_REQUEST['database_m'])) 		$_REQUEST['database_m']="";
    if(empty($_REQUEST['database_y'])) 		$_REQUEST['database_y']="";
?>
<form id="form_artikel">
    <table border="0">
        <tr>
            <td colspan=2 align="left"><b>Artiklens forfatter</b></td>
        </tr>
        <tr>
            <td nowrap="nowrap"><img src="images/dut.gif" alt="" />&nbsp;<b>Fornavn</b><br><input size="30" type="text" name="fornavn" value="<?=$_REQUEST['fornavn']?>"></td>
            <td nowrap="nowrap"><img src="images/dut.gif" alt="" />&nbsp;<b>Efternavn</b> <br><input size="30" type="text" name="efternavn" value="<?=$_REQUEST['efternavn']?>"></td>
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
                <td colspan="2">Flere forfattere, klik <input type="submit" name="submitKnap" value="her"></td>
            </tr>
            <input type="hidden" name="antal_forfattere" value="<?=$antal_forfattere?>">
        <tr>
            <td><img src="images/dut.gif" alt="" />&nbsp;<b>Artiklens titel</b><br><input size="30" type="text" name="titel" value="<?=$_REQUEST['titel']?>"></td>
            <td nowrap="nowrap"><img src="images/dut.gif" alt="" />&nbsp;<b>Kildens navn, f.eks.et tidsskrift eller en avis</b><br><input size="30" type="text" name="kilde" value="<?=$_REQUEST['kilde']?>"></td>
        </tr>
        <tr>
            <td>Udgivelsesdato eller <img src="images/dut.gif" alt="" />&nbsp;<b>Årgang</b><br><input size="2" maxlength="2" type="text" name="udgivelse_d" value="<?=$_REQUEST['udgivelse_d']?>">.<input size="2" maxlength="2" type="text" name="udgivelse_m" value="<?=$_REQUEST['udgivelse_m']?>">.<input size="4" maxlength="4" type="text" name="udgivelse_y" value="<?=$_REQUEST['udgivelse_y']?>">
                <!--<font size="2">dd.mm.åååå eller åååå</font>-->
            </td>
            <td>
                Nr.<br><input size="5" type="text" name="nr" value="<?=$_REQUEST['nr']?>">
            </td>
        </tr>
        <tr>
            <td>Sektion<br><input size="30" type="text" name="sektion" value="<?=$_REQUEST['sektion']?>"></td>
            <td><img src="images/dut.gif" alt="" />&nbsp;<b>Fra side</b> til side<br><input size="4" type="text" name="side_fra" value="<?=$_REQUEST['side_fra']?>">&nbsp;&nbsp;<input size="4" type="text" name="side_til" value="<?=$_REQUEST['side_til']?>"></td>
        </tr>
        <tr>
            <td height="10"></td>
        </tr>
        <tr>
            <td colspan="2"><i>Hvis du har læst artiklen på internettet:</i></td>
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
            <td colspan="2" height="10"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submitKnap" value="Tilføj" onClick="return validateForm('artikel')">
                <?=$reset?>
            </td>
        </tr>
    </table>
    <input type="hidden" name="ressource" value="<?=$_REQUEST['ressource']?>">
</form>