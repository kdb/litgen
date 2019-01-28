<?php
	//Sidens titel: Udgiver. Sidst opdateret. URL. Besøgt d.
	               	
    //Sceptica. Udgivet af Willy Wegner. Sidst opdateret: 01.01.2006. www.sceptica.dk. Besøgt: 03.03.2006. (Internet)
    
    $websted = $_REQUEST['websted'];
	$titel = $_REQUEST['titel'];                  
    $udgiver = $_REQUEST['udgiver'];        
    $opdateret="";	
    if(!empty($_REQUEST['opdateret_d'])) $opdateret .= $_REQUEST['opdateret_d'].".";
    if(!empty($_REQUEST['opdateret_m'])) $opdateret .= $_REQUEST['opdateret_m'].".";
    if(!empty($_REQUEST['opdateret_y'])) $opdateret .= $_REQUEST['opdateret_y'];    
	//$opdateret = $opdateret_d.$opdateret_m.$opdateret_y;
    $url = $_REQUEST['url'];    
    $dato="";
    if(!empty($_REQUEST['dato_d'])) $dato.= $_REQUEST['dato_d'].".";
    if(!empty($_REQUEST['dato_m'])) $dato.= $_REQUEST['dato_m'].".";
    if(!empty($_REQUEST['dato_y'])) $dato.= $_REQUEST['dato_y'];                            	     
    if($websted!="") $websted .= ": ";
    if($titel!="") $titel .= ". ";    
    if($udgiver!="") $udgiver = "Udgivet af " . $udgiver . ". "; 
    if($opdateret!="") $opdateret = "Sidst opdateret: " . $opdateret . ". ";
    if($url!="") $url="Internetadresse: <u><font color='blue'>".$url."</font></u> ";
    if($url=="") $dato=""; else $dato="- Besøgt d. ".$dato;
    
    $vText = $websted.$titel.$udgiver.$opdateret.$url.$dato;
?>
