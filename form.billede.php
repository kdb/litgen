<!-- Viser formularen 'Billede' -->
<?php
    //Init querystring-variabler
    if(empty($_REQUEST['titel'])) 			$_REQUEST['titel']="";                            
    if(empty($_REQUEST['bogtitel'])) 		$_REQUEST['bogtitel']="";
    if(empty($_REQUEST['fornavn'])) 		$_REQUEST['fornavn']="";
    if(empty($_REQUEST['efternavn'])) 		$_REQUEST['efternavn']="";                
    if(empty($antal_forfattere))			$antal_forfattere=1;
    for($a=1;$a<$antal_forfattere;$a++){
    	if(empty($_REQUEST['fornavn'.$a])) 	$_REQUEST['fornavn'.$a]="";
        if(empty($_REQUEST['efternavn'.$a]))$_REQUEST['efternavn'.$a]=""; 
    }
    if(empty($_REQUEST['produktion'])) 		$_REQUEST['produktion']="";
    if(empty($_REQUEST['kildetype'])) 		$_REQUEST['kildetype']=""; //Bog, Museum, Plads, Internet
    if(empty($_REQUEST['kildenavn'])) 		$_REQUEST['kildenavn']=""; //Bogens titel, Museets navn...
    if(empty($_REQUEST['forlag'])) 			$_REQUEST['forlag']="";
    if(empty($_REQUEST['udgivelse'])) 		$_REQUEST['udgivelse']="";
    if(empty($_REQUEST['side_fra'])) 		$_REQUEST['side_fra']="";
    if(empty($_REQUEST['side_til'])) 		$_REQUEST['side_til']="";
    if(empty($_REQUEST['adresse'])) 		$_REQUEST['adresse']="";
    if(empty($_REQUEST['postnr'])) 			$_REQUEST['postnr']="";
    if(empty($_REQUEST['by'])) 				$_REQUEST['by']="";
    if(empty($_REQUEST['land'])) 			$_REQUEST['land']="";
    if(empty($_REQUEST['url'])) 			$_REQUEST['url']="";
    if(empty($_REQUEST['dato_d'])) 			$_REQUEST['dato_d']="";
    if(empty($_REQUEST['dato_m'])) 			$_REQUEST['dato_m']="";
    if(empty($_REQUEST['dato_y'])) 			$_REQUEST['dato_y']="";
    if(empty($_REQUEST['database_d'])) 		$_REQUEST['database_d']="";
    if(empty($_REQUEST['database_m'])) 		$_REQUEST['database_m']="";
    if(empty($_REQUEST['database_y'])) 		$_REQUEST['database_y']="";
    if(empty($_REQUEST['museum'])) 			$_REQUEST['museum']="";
        
    if(empty($_REQUEST['sted'])){
    	print("
            <h3>Hvor er billedet set?</h3>
        	<ul><li><a href='?ressource=billede&sted=bog'>I en bog</a></li>
            <li><a href='?ressource=billede&sted=museum'>På et sted/museum</a></li>
            <li><a href='?ressource=billede&sted=internet'>På internet</a></li></ul>
        ");                
    }else if($_REQUEST['sted']=="bog"){        	        
        include "form.billede.bog.php";
    }else if($_REQUEST['sted']=="museum"){
        include "form.billede.museum.php";
    }else if($_REQUEST['sted']=="internet"){
    	include "form.billede.internet.php";
    }
?>