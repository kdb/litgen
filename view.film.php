<?php
	//Fastforms film: Filmens titel: Instruktør, manuskriptforfatter. År for tilblivelse.
    //Online film:    Filmens titel: Instruktør, manuskriptforfatter. URL. Dato for besøg.

    //Da Vinci mysteriet. Instruktion: Ron Howard. Manuskript: Dan Brown. 2006. Internet: www.davincicode.dk. Besøgt 21.04.2006.

	$titel 		= $_REQUEST['titel'];
    $instruktor = $_REQUEST['instruktor'];
    $forfatter 	= $_REQUEST['forfatter'];
	$udgivelse 	= $_REQUEST['udgivelse'];
    $url 		= $_REQUEST['url'];
    $dato="";
    if(!empty($_REQUEST['dato_d'])) $dato.= $_REQUEST['dato_d'].".";
    if(!empty($_REQUEST['dato_m'])) $dato.= $_REQUEST['dato_m'].".";
    if(!empty($_REQUEST['dato_y'])) $dato.= $_REQUEST['dato_y'];
    $database_name 	= $_REQUEST['database_name'];
    $database_d 	= $_REQUEST['database_d'];
    $database_m 	= $_REQUEST['database_m'];
    $database_y 	= $_REQUEST['database_y'];
    $database_date 	= $database_d.".".$database_m.".".$database_y;
    if (!empty($database_name))
      $database="Database: ".$database_name." - Besøgt d. ".$database_date;
    else
      $database="";

    if($titel!="") $titel .= ". ";
    if($instruktor!="") $instruktor = "Instruktion: " . $instruktor . ". ";
    if($forfatter!="") $forfatter = "Manuskript: " . $forfatter . ". ";
    if($udgivelse!="") $udgivelse.=". ";
    if($url!="") $url="Internetadresse: ".$url." ";
    if($url=="") $dato=""; else $dato="- Besøgt d. ".$dato.". ";

    $vText = "<i>".$titel."</i>".$udgivelse.$instruktor.$forfatter.$url.$dato.$database;
?>
