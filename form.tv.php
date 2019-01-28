<!-- Viser formularen 'TV' -->

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
    if(empty($_REQUEST['efternavn'])) $_REQUEST['efternavn']="";
    if(empty($_REQUEST['fornavn'])) $_REQUEST['fornavn']="";
    for($a=1;$a<$antal_forfattere;$a++){
        if(empty($_REQUEST['fornavn'.$a])) $_REQUEST['fornavn'.$a]="";
        if(empty($_REQUEST['efternavn'.$a])) $_REQUEST['efternavn'.$a]="";
    }

    //Init querystring-variabler    
    if(empty($_REQUEST['titel'])) $_REQUEST['titel']="";
    if(empty($_REQUEST['serietitel'])) $_REQUEST['serietitel']="";
    if(empty($_REQUEST['indhold'])) $_REQUEST['indhold']="";
    if(empty($_REQUEST['len'])) $_REQUEST['len']="";
    if(empty($_REQUEST['tvStation'])) $_REQUEST['tvStation']="";
    if(empty($_REQUEST['url'])) $_REQUEST['url']="";
    if(empty($_REQUEST['dato_d'])) $_REQUEST['dato_d']="";
    if(empty($_REQUEST['dato_m'])) $_REQUEST['dato_m']="";
    if(empty($_REQUEST['dato_y'])) $_REQUEST['dato_y']="";            
    if(empty($_REQUEST['sendt_d'])) $_REQUEST['sendt_d']="";
    if(empty($_REQUEST['sendt_m'])) $_REQUEST['sendt_m']="";
    if(empty($_REQUEST['sendt_y'])) $_REQUEST['sendt_y']="";
?>
    
<form id="form_tv">
	<table border="0">
		<tr>    
			<td><img src="images/dut.gif" alt="" />&nbsp;<b>Titel</b><br><input size="30" type="text" name="titel" value="<?=$_REQUEST['titel']?>"></td>
			<td><b>Serietitel</b><br><input size="30" type="text" name="serietitel" value="<?=$_REQUEST['serietitel']?>"></td>
		</tr>

        <tr>
            <td colspan=2 align="left"><hr><b>TVs</b> (Instruktør/kunstner/studievært m.m.)</td>
        </tr>
        <tr>
            <td>
                <b>Fornavn</b><br><input size="30" type="text" name="fornavn" value="<?=$_REQUEST['fornavn']?>">
            </td>
            <td>
                <b>Efternavn</b> <br><input size="30" type="text" name="efternavn" value="<?=$_REQUEST['efternavn']?>">
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
            <td colspan="2">Ved flere medvirkende, klik<input type="submit" name="submitKnap" value="her"><hr></td>
        </tr>
        <input type="hidden" name="antal_forfattere" value="<?=$antal_forfattere?>">

        <tr>
			<td colspan="2"><b>Indhold</b> (interview/dokumentar/debat m.m.)<br><input size="70" type="text" name="indhold" value="<?=$_REQUEST['indhold']?>"></td>
		</tr>
     	<tr>                        	
            <td><img src="images/dut.gif" alt="" />&nbsp;<b>Udsendelseslængde i min.</b><br><input size="4" maxlength="4" type="text" name="len" value="<?=$_REQUEST['len']?>"></td>
     	</tr>

        <tr>
            <td colspan="2"><img src="images/dut.gif" alt="" />&nbsp;<b>TV-station</b><br><input size="70" type="text" name="tvStation" value="<?=$_REQUEST['tvStation']?>"></td>
        </tr>
        <tr>
            <td><img src="images/dut.gif" alt="" />&nbsp;Sendt<br><input size="2" maxlength="2" type="text" name="sendt_d" value="<?=$_REQUEST['sendt_d']?>">.<input size="2" maxlength="2" type="text" name="sendt_m" value="<?=$_REQUEST['sendt_m']?>">.<input size="4" maxlength="4" type="text" name="sendt_y" value="<?=$_REQUEST['sendt_y']?>"><font size="2">dd.mm.åååå</font></td>
        </tr>
    	<tr>
    		<td colspan="2"><i>Hvis du har set udsendelsen på internettet:</i></td>
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
				<input type="submit" name="submitKnap" value="Tilføj" onClick="return validateForm('tv')">
                <?=$reset?>
			</td>
		</tr>    
	</table>
	<input type="hidden" name="ressource" value="tv">
</form>
