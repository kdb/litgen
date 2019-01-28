<script src="common.js"></script> <!-- JavaScript-funktioner -->
<script language="JavaScript" type="text/javascript">
<!--
        
    /* Viser formularen 'Bøger' */        
           
    if(qs['antal_forfattere'] == undefined)
    	antal_forfattere=1;
    else
    	antal_forfattere=qs['antal_forfattere'];
    
    //En forfatter mere eller mindre        
    if(qs['submitKnap']=="her")
    	antal_forfattere++;
    
    //Init querystring-variabler
    if(qs['forfatter_redaktor']==undefined) qs['forfatter_redaktor']="forfatter";	
    if(qs['efternavn']==undefined) qs['efternavn']="";
    if(qs['fornavn']==undefined) qs['fornavn']="";            
    for(a=1;a<antal_forfattere;a++){
    	if(qs['fornavn'+a]==undefined) qs['fornavn'+a]="";
        if(qs['efternavn'+a]==undefined) qs['efternavn'+a]=""; 
    }    
    if(qs['titel']==undefined) qs['titel']="";
    if(qs['serietitel']==undefined) qs['serietitel']="";
    if(qs['bindnummer']==undefined) qs['bindnummer']="";
    if(qs['bindtitel']==undefined) qs['bindtitel']="";
    if(qs['udgave']==undefined) qs['udgave']="1";
    if(qs['forlag']==undefined) qs['forlag']="";
    if(qs['udgivelse']==undefined) qs['udgivelse']="";
    if(qs['side_fra']==undefined) qs['side_fra']="";
    if(qs['side_til']==undefined) qs['side_til']="";    
    if(qs['url']==undefined) qs['url']="";
    if(qs['dato_d']==undefined) qs['dato_d']="";
    if(qs['dato_m']==undefined) qs['dato_m']="";
    if(qs['dato_y']==undefined) qs['dato_y']="";
    if(qs['database_name']==undefined) qs['database_name']="";
    if(qs['database_d']==undefined) qs['database_d']="";
    if(qs['database_m']==undefined) qs['database_m']="";
    if(qs['database_y']==undefined) qs['database_y']="";

    document.write("<form id=\"form_bog\">"); //Form: "Bøger"
    document.write("	<table border=\"0\">");
	document.write("		<tr>");
    document.write("			<td>");
    if(qs['forfatter_redaktor']=="forfatter")
    	document.write("				Forfatter <input type=\"radio\" name=\"forfatter_redaktor\" value=\"forfatter\" CHECKED>&nbsp;&nbsp;");
    else
    	document.write("				Forfatter <input type=\"radio\" name=\"forfatter_redaktor\" value=\"forfatter\">&nbsp;&nbsp;");
    if(qs['forfatter_redaktor']=="redaktor")
    	document.write("				Redaktør <input type=\"radio\" name=\"forfatter_redaktor\" value=\"redaktor\" CHECKED>&nbsp;&nbsp;");
    else
    	document.write("				Redaktør <input type=\"radio\" name=\"forfatter_redaktor\" value=\"redaktor\">&nbsp;&nbsp;");    
    document.write("			</td>");
	document.write("		</tr>");
    document.write("		<tr>");    
    document.write("			<td><!--<img src='images/dut.gif'/>-->Fornavn<br><input size=\"30\" type=\"text\" name=\"fornavn\" value=\""+qs['fornavn']+"\"></td>");
    document.write("			<td><img src='images/dut.gif'/> <b>Efternavn </b>eller<b> Organisation</b><br><input size=\"30\" type=\"text\" name=\"efternavn\" value=\""+qs['efternavn']+"\"></td>");    
    document.write("		</tr>");    
    for(a=1;a<antal_forfattere;a++){        
        document.write("		<tr>");        
        document.write("			<td>Fornavn<br><input size=\"30\" type=\"text\" name=\"fornavn"+a+"\" value=\""+qs['fornavn'+a]+"\"></td>");
        document.write("			<td>Efternavn<br><input size=\"30\" type=\"text\" name=\"efternavn"+a+"\" value=\""+qs['efternavn'+a]+"\"></td>");
        document.write("		</tr>");
    }
    document.write("			<tr><td colspan=\"2\">Flere forfattere/redaktører, klik <input type=\"submit\" name=\"submitKnap\" value=\"her\"></td></tr>");        
    document.write("<input type=\"hidden\" name=\"antal_forfattere\" value=\""+antal_forfattere+"\">");
    document.write("		<tr>");
    document.write("			<td><img src='images/dut.gif'/> <b>Titel</b><br><input size=\"30\" type=\"text\" name=\"titel\" value=\""+qs['titel']+"\"></td>");
    document.write("			<td>Serietitel<br><input size=\"30\" type=\"text\" name=\"serietitel\" value=\""+qs['serietitel']+"\"></td>");
    document.write("        </tr>");
    document.write("        <tr>");
    document.write("			<td>Bindnummer <br><input size=\"30\" type=\"text\" name=\"bindnummer\" value=\""+qs['bindnummer']+"\"></td>");
    document.write("			<td>Bindtitel <br><input size=\"30\" type=\"text\" name=\"bindtitel\" value=\""+qs['bindtitel']+"\"></td>");		
    document.write("		</tr>");       
    document.write("		<tr>");                        	
	document.write("			<td><img src='images/dut.gif'/> <b>Udgave</b><br><input size=\"30\" type=\"text\" name=\"udgave\" value=\""+qs['udgave']+"\"></td>");
    document.write("           	<td><img src='images/dut.gif'/> <b>Forlag</b><br><input size=\"30\" type=\"text\" name=\"forlag\" value=\""+qs['forlag']+"\"></td>");
    document.write("		</tr>");
	document.write("        <tr>");                        	
	document.write("			<td><img src='images/dut.gif'/> <b>Udgivelsesår</b><br><input size=\"4\" maxlength=\"4\" type=\"text\" name=\"udgivelse\" value=\""+qs['udgivelse']+"\"> <font size=\"2\">åååå</font></td>");
    document.write("            <td>Fra side til side<br><input size='4' type='text' name='side_fra' value=\""+qs['side_fra']+"\">&nbsp;&nbsp;<input size='4' type='text' name='side_til' value=\""+qs['side_til']+"\"></td>");
	document.write("        </tr>");
	document.write("       	<tr>");
	document.write("           	<td height=\"10\"></td>");
	document.write("        </tr>");
	document.write("        <tr>");                        	
	document.write("			<td colspan=\"2\"><i>Hvis du har læst bogen på internettet:</i></td>");
	document.write("		</tr>");    
	document.write("        <tr>");                        	
	document.write("			<td>Internetadresse<br><input size=\"30\" type=\"text\" name=\"url\" value=\""+qs['url']+"\"></td>");                            
	document.write("			<td>Besøgt d.<br><input size=\"2\" maxlength=\"2\" type=\"text\" name=\"dato_d\" value=\""+qs['dato_d']+"\">.<input size=\"2\" maxlength=\"2\" type=\"text\" name=\"dato_m\" value=\""+qs['dato_m']+"\">.<input size=\"4\" maxlength=\"4\" type=\"text\" name=\"dato_y\" value=\""+qs['dato_y']+"\"><font size=\"2\">dd.mm.åååå</font></td>");
	document.write("		</tr>");
    document.write("        <tr>");
    document.write("          	<td height=\"10\"></td>");
    document.write("		</tr>");
    document.write("        <tr>");
    document.write("			<td>Fundet i: Databasenavn<br><input size=\"30\" type=\"text\" name=\"database_name\" value=\""+qs['database_name']+"\"></td>");
    document.write("			<td>Besøgt d.<br><input size=\"2\" maxlength=\"2\" type=\"text\" name=\"database_d\" value=\""+qs['database_d']+"\">.<input size=\"2\" maxlength=\"2\" type=\"text\" name=\"database_m\" value=\""+qs['database_m']+"\">.<input size=\"4\" maxlength=\"4\" type=\"text\" name=\"database_y\" value=\""+qs['database_y']+"\"><font size=\"2\">dd.mm.åååå</font></td>");
    document.write("		</tr>");
    document.write("        <tr>");
	document.write("          	<td height=\"10\"></td>");
	document.write("		</tr>");                        
	document.write("		<tr>");
    document.write("			<td>");
    document.write("				<input type=\"submit\" name=\"submitKnap\" value=\"Tilføj\" onClick=\"return validateForm('bog')\">");    
</script>
                                    <?=$reset?>
<script language="JavaScript" type="text/javascript">                                  
    document.write("			</td>");
    document.write("		</tr>");    
    document.write("	</table>");
    document.write("	<input type=\"hidden\" name=\"ressource\" value=\"bog\">");
    document.write("</form>");

//-->
</script>
    
