<?php
	//Forfatter/ansvarlig: Type af kilde, medvirkende, sted, år
            	    
    $vText =$_REQUEST['ansvarlig'].": ";                       	
    $vText.=$_REQUEST['type'].". ";                                   
    if(!empty($_REQUEST['medvirkende'])) $vText.= $_REQUEST['medvirkende'].", ";                                                
    if(!empty($_REQUEST['sted'])) $vText.= $_REQUEST['sted'].", ";
    $dato="";
    if(!empty($_REQUEST['dato_d'])) $dato.= $_REQUEST['dato_d'].".";
    if(!empty($_REQUEST['dato_m'])) $dato.= $_REQUEST['dato_m'].".";
    if(!empty($_REQUEST['dato_y'])) $dato.= $_REQUEST['dato_y'];                                               
    $vText.=$dato;
?>
