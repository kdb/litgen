<?php
	//Fast form: Kunstner: Titel på cd. Titel/titler på nummer/numre adskilt med komma. Pladeselskab. Udgivelsesår.              
    //Online:    Kunstner: Titel på værket. Titel/titler på nummer/numre adskilt med komma. URL. Dato for besøg.
	
    //Jodle Birge: Søde lille mormor (fra 'Til krobal med Jodle Birge'). Smagløs. 1978 (Musik)
    
    $kunstner = $_REQUEST['kunstner'];               
	$cd = $_REQUEST['titel'];
    $sang = $_REQUEST['sang'];                
    $pladeselskab = $_REQUEST['pladeselskab'];        
    $udgivelse = $_REQUEST['udgivelse'];    
	$url = $_REQUEST['url'];                    
    $dato="";
    if(!empty($_REQUEST['dato_d'])) $dato.= $_REQUEST['dato_d'].".";
    if(!empty($_REQUEST['dato_m'])) $dato.= $_REQUEST['dato_m'].".";
    if(!empty($_REQUEST['dato_y'])) $dato.= $_REQUEST['dato_y'];                             
	if($kunstner!="") $kunstner .= ": ";                         
    if($sang!="")
    	$cd = " (fra '" . $cd . "'). ";
    else
    	$cd .= ". ";
    if($udgivelse!=""){                    
    	if($pladeselskab!="") $pladeselskab .= ", ";
    }else{
    	if($pladeselskab!="") $pladeselskab .= ". ";
    }    
    if($udgivelse!="") $udgivelse.=". ";
    if($url!="") $url="Internetadresse: ".$url." ";
    if($url=="") $dato=""; else $dato="- Besøgt d. ".$dato;
    
    $vText = $kunstner.$sang.$cd.$pladeselskab.$udgivelse.$url.$dato;
?>
