<?php
	session_start();

    //Ny liste?
    if(!empty($_REQUEST['nyliste']))
     	session_regenerate_id(1);

    define("SID", session_id());
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
    	<title>Litteraturlisteautomat</title>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="Med skrivOpgave.dks LitteraturlisteAutomat kan du let lave en perfekt litteraturliste. Den sikrer, at alle dine kilder står rigtigt, og at du får alle nødvendige oplysninger med.">
        <meta name="keywords" content="litteraturliste,litteraturlisteAutomat,bibliography,skrivopgave,københavn,copenhagen,denmark,school,skole">
        <script src="common.js"></script> <!-- JavaScript-funktioner -->
		    <script src="forms.validate.js"></script> <!-- Validering af forms -->
			<link rel="stylesheet" type="text/css" href="littgen.css">

    </head>
    <body>
        <!-- Definer reset-knap -->
        <?php
            if(!empty($_REQUEST['ressource'])){
                $reset="<a href='?ressource=" . $_REQUEST['ressource'];
                if(!empty($_REQUEST['sted']))
                    $reset.="&sted=" . $_REQUEST['sted'];
                $reset.="'>Reset</a>";
            }
        ?>

		<a href="http://skrivopgave.dk">
            <div id="baggrund">
    		<div id="indhold">
        </a>
    	<?php
        	//die("<br><br><br><h2>Litteraturlisteautomaten er p.t. ude af drift. Vi beklager ulejligheden</h2><br><br><br>");
        	//Definr ressource-tekst ($vResTekst)
            if(empty($_REQUEST['ressource'])) $_REQUEST['ressource']="";
            switch($_REQUEST['ressource']){
            	case "bog": 		$vResTekst="Bog"; 			break;
                case "afsnit": 		$vResTekst="Afsnit i bog"; 	break;
                case "artikel": 	$vResTekst="Artikel"; 		break;
                case "billede": 	$vResTekst="Billede";	 	break;
                case "musik": 		$vResTekst="Musik"; 		break;
                case "film":		$vResTekst="Film";			break;
                case "tv":		    $vResTekst="TV-udsendelse";	break;
                case "internet":	$vResTekst="Internet";		break;
                case "youtube":		$vResTekst="YouTube"; 		break;
                case "podcast":		$vResTekst="Podcast"; 		break;
                case "blog":		$vResTekst="Blog";	 		break;
                case "andet":		$vResTekst="Anden kilde"; 	break;
            }

        ?>

				<h1>LitteraturlisteAutomat</h1>
       <table cellpadding="10" cellspacing="0" border="0" width="100%"> <!-- Input-table -->
        	<tr>

            	 <td align="left" valign="top" width="20%" nowrap="nowrap">
                    <!-- Vlg ressource -->

                    <div class="portlet">
                    <h5 class="blue">Vælg kilde</h5>
                    <div class="portletBody">
                    <ul>
                        <li><a href="?ressource=bog">Bog</a><br></li>
                        <li><a href="?ressource=afsnit">Afsnit i en bog</a></li>
                    	<li><a href="?ressource=artikel">Artikel</a></li>
                    	<li><a href="?ressource=billede">Billede</a></li>
                        <li><a href="?ressource=musik">Musik</a></li>
                        <li><a href="?ressource=film">Film</a></li>
                        <li><a href="?ressource=tv">TV</a></li>
                        <li><a href="?ressource=youtube">YouTube</a></li>
                        <li><a href="?ressource=podcast">Podcast</a></li>
                        <li><a href="?ressource=blog">Blog</a></li>
                    	<li><a href="?ressource=internet">Internet</a></li>
                        <li><a href="?ressource=andet">Anden kilde</a></li>
					</ul>
                    </div></div>
                    <br>
                    <?php
                    	if(!empty($_REQUEST['ressource']))
                    		print("<ul class='henvisning'><li><a href='index.php'>Til forsiden</a></li></ul>");
                    ?>
				</td>
                <td align="left" valign="top">
                	<?php
                        if(!empty($_REQUEST['ressource']) AND !empty($vResTekst))
                            print("<h2><i>Kilde: </i>" . $vResTekst . "<br></h2>");
                        else{
                        	if($_REQUEST['ressource']!="faq" && $_REQUEST['ressource']!="kommentar"){
                                print("
                                	<div class='beskriv'>
                                    <p>Med skrivOpgave.dks LitteraturlisteAutomat kan du let lave en perfekt litteraturliste. Den sikrer, at alle dine kilder står rigtigt, og at du får alle nødvendige oplysninger med.</p>
                                    <p><em>Hvis du bruger Apples browser Safari fx på Mac eller iPad, kan du måske ikke se din litteraturliste. Vælger du en anden browser fx <a href='https://www.mozilla.org/da/firefox'>Firefox</a> eller <a href='http://www.google.dk/intl/da/chrome'>Google Chrome</a>, vil LitteraturlisteAutomaten virke efter hensigten.<br />Vi beklager problemerne og leder efter en løsning.</em></p>
                                      <p>Du kan bruge LitteraturlisteAutomaten til forskellige typer kilder. Se menuen til venstre.</&p>
                                        <p><strong>Hvordan gør du?</strong></p>
                                        <ol><li>Vælg kilde</li>
                                        <li>Udfyld alle felter med <img src='images/dut.gif' alt=''></li>
                                        <li>Kopier listen ind i din opgave: Her kan du også rette, hvis du har skrevet forkert</li>
                                        </ol>
                                        <strong>Husk</strong>:
                                        Læs mere om citater, referencer, alfabetisering af litteraturlisten m.m. på skrivopgave.dk.
                                        <a href='https://skrivopgave.kk.dk/artikel/litteraturlisteautomat'>Her</a> kan du også se, hvordan du gør, hvis du mangler oplysninger.
                                    </div>
                                ");
                            }
                        }
                        //Hvis billede - definr sted
                        if(!empty($_REQUEST['sted'])){
                        	switch($_REQUEST['sted']){
                            	case "bog": $vSted="i en bog"; break;
                                case "museum": $vSted="på et sted/museum"; break;
                                case "internet": $vSted="på internettet"; break;
                            }
                            print(" " . $vSted . "</b><br>");
                        }

                        switch($_REQUEST['ressource']){
                        	case "bog": 		include "form.bog.php"; 	break; //Vis formular: Bog
                        	case "afsnit": 		include "form.afsnit.php"; 	break; //Vis formular: Afsnit i bog
							case "artikel": 	include "form.artikel.php"; break; //Vis formular: Artikel
                        	case "billede": 	include "form.billede.php"; break; //Vis formular: Billede
                        	case "musik": 		include "form.musik.php";	break; //Vis formular: Musik
                        	case "film": 		include "form.film.php"; 	break; //Vis formular: Film
                        	case "tv": 		    include "form.tv.php"; 	    break; //Vis formular: TV
							case "internet":	include "form.internet.php";break; //Vis formular: Internet
							case "youtube": 	include "form.youtube.php";	break; //Vis formular: Youtube
                            case "blog":	 	include "form.blog.php";	break; //Vis formular: Blog
                            case "podcast":	 	include "form.podcast.php";	break; //Vis formular: Podcast
							case "andet": 		include "form.andet.php"; 	break; //Vis formular: Andet
                        	case "faq":			include "faq.html";			break; //Vis FAQ
                            case "kommentar":	include "kommentar.html";	break; //Vis kommentar-formular
                        }

                        if(!empty($_REQUEST['ressource']) && $_REQUEST['ressource']!="billede" && $_REQUEST['ressource']!="faq"  && $_REQUEST['ressource']!="kommentar")
                        	print("<img src='images/dut.gif'>&nbsp;Disse felter SKAL udfyldes</b>");
                        else{
                            if(!empty($_REQUEST['sted']))
                        		print("<img src='images/dut.gif'>&nbsp;<b>Disse felter SKAL udfyldes</b>");
                    	}
                    ?>
                </td>
            </tr>
        </table>

        <!-- Visning -->
        <a name="visninger"></a>
        <?php

            function skrivFil($vRessource,$SID=SID){ //Gem i txt-fil

                GLOBAL $vResTekst; //Hent $vResTekst fra globalt scop

                //Opret/ben fil (<SID>.txt)
                $vFile=$SID.".txt";
                $fd = fopen($vFile,"a"); //Append to file

                switch($vRessource){
                	case "bog": 	    include "view.bog.php"; 	    break;
                	case "afsnit": 	    include "view.afsnit.php"; 	    break;
					case "artikel":     include "view.artikel.php";     break;
                	case "billede":     include "view.billede.php";     break;
                	case "musik": 	    include "view.musik.php";	    break;
                	case "film": 	    include "view.film.php"; 	    break;
                	case "tv": 	        include "view.tv.php"; 	        break;
                    case "youtube":	    include "view.youtube.php";     break;
                    case "podcast":	    include "view.podcast.php";	    break;
                    case "blog": 	    include "view.blog.php"; 	    break;
					case "internet":    include "view.internet.php";    break;
					case "andet": 	    include "view.andet.php"; 	    break;
                }

				if(!empty($vText)){
                	//Tilføj "(ressource)" efter linjen
                    if($vResTekst!="Anden kilde")
                    	$vText.=" (" . $vResTekst . ")";
                    $vText .="\n";
                    if(!fwrite($fd,$vText))
                    	die("<br><br><b>Internetgæstekontoen har ikke skriverettigheder til mappen \\littgen</b><br><br>");
                	fclose($fd);

                    //Redirect for at undgå opdatering
                    $url = "index.php?";
                    while(list($key,$val) = each($_REQUEST)){
                    	if($key!="submitKnap")
                        	$url.=urlencode($key)."=".urlencode($val)."&amp;";
                    }
                    $url.="submittet=1#visninger";
                    ?>
                        <script language = "JavaScript">
                      		window.location = "<?=$url?>";
                    	</script>
                	<?
                }
            }

            function sendKommentar(){
            	// Opretter headers m.v. til mailen
                $mail_from = $_REQUEST['email'];
                $mail_headers = "From: $mail_from\nReply-To:$mail_from\nReturn-Path:$mail_from\nX-Mailer: PHP/Content-Type: text/plain; charset=iso-8859-1\nContent-Transfer-Encoding: 8bit";

                $mail_recipient = "system@kff.kk.dk";

                $mail_subject = "Kommentar vedr. litteraturlistegeneratoren";

                $mail_body = "\n\n" . $_REQUEST['afsender'] . " har sendt flg. kommentar:\n\n";
                $mail_body .= $_REQUEST['kommentar'];

                // Send mail
                mail($mail_recipient, $mail_subject, $mail_body, $mail_headers);
            }

        	if(!empty($_REQUEST['ressource']))
            	$vRessource = $_REQUEST['ressource'];
            else
            	$vRessource = "";

            if(!empty($_REQUEST['submitKnap']))
            	$vSubmitKnap = $_REQUEST['submitKnap'];
            else
            	$vSubmitKnap = "";

            //Skriv til fil
            if($vSubmitKnap=="Tilføj")
                skrivFil($_REQUEST['ressource']);

            //Send kommentar
            if($vSubmitKnap=="Send")
				sendKommentar();
        ?>

        <br>
        <h2><img src="images/tip.gif" alt="" />&nbsp;Kopier litteraturhenvisningerne nedenfor og sæt dem ind i din opgave</h2><br>

        <?php
            //Læs og vis fil og Vis 'Ny liste'-knap og link til hjælpeside
            $vFile=SID.".txt";
            if(file_exists($vFile)){
                $litt = file_get_contents($vFile);
            	print(nl2br($litt));
            	if(!empty($litt)){
                    print("<br>");
                    print("<form action=\"index.php\" method=\"POST\">");
                    print("<input type=\"submit\" name=\"nyliste\" value=\"Ny liste\" onClick=\"return confirm('Dette vil slette din nuværende liste!')\">");
                    print("<input type=\"submit\" name=\"nylinje\" value=\"Tilføj ny\"\">");
                    print("</form>");
                }
            }

            print("<ul class='henvisning'><li><a href=\"?ressource=faq\">Hjælp</a></li></ul>");
            print("<ul class='henvisning'><li><a href=\"?ressource=kommentar\">Kontakt</a></li></ul>");
            print("<ul class='henvisning'><li><a href=\"http://skrivopgave.dk\">Til skrivOpgave.dk</a></li></ul><br><br>");

            if(empty($_REQUEST['submitKnap']))
            	$_REQUEST['submitKnap']="";

       		if($_REQUEST['submitKnap']=="Tilføj")
            	print("JavaScript:window.location='#visninger'");

            if($_REQUEST['submitKnap']=="her")
            	print("JavaScript:window.location='#top'");
       ?>

    </body>
</html>
