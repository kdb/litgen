<?php
	if(!empty($_REQUEST['titel']))		$titel 		= $_REQUEST['titel'];		else $titel="";
  	if(!empty($_REQUEST['efternavn']))	$efternavn 	= $_REQUEST['efternavn'];   else $efternavn="";
  	if(!empty($_REQUEST['fornavn']))	$fornavn 	= $_REQUEST['fornavn'];		else $fornavn="";
  	if(!empty($_REQUEST['produktion']))	$produktion = $_REQUEST['produktion'];	else $produktion="";
  	if(!empty($_REQUEST['bogtitel']))	$bogtitel 	= $_REQUEST['bogtitel'];	else $bogtitel="";
    if(!empty($_REQUEST['museum']))    	$museum		= $_REQUEST['museum'];		else $museum="";
    if(!empty($_REQUEST['adresse']))   	$adresse	= $_REQUEST['adresse'];		else $adresse="";
  	if(!empty($_REQUEST['forlag']))		$forlag 	= $_REQUEST['forlag'];		else $forlag="";
    if(!empty($_REQUEST['url']))		$url	 	= $_REQUEST['url'];			else $url="";
    $dato="";
    if(!empty($_REQUEST['dato_d']))		$dato	 	.= $_REQUEST['dato_d'].".";
    if(!empty($_REQUEST['dato_m']))		$dato	 	.= $_REQUEST['dato_m'].".";
    if(!empty($_REQUEST['dato_y']))		$dato	 	.= $_REQUEST['dato_y'];
	$database_name 	= $_REQUEST['database_name'];
	$database_d 	= $_REQUEST['database_d'];
	$database_m 	= $_REQUEST['database_m'];
	$database_y 	= $_REQUEST['database_y'];
	$database_date 	= $database_d.".".$database_m.".".$database_y;
	$database="Database: ".$database_name." - Besøgt d. ".$database_date;

	if(!empty($_REQUEST['udgivelse']))	$udgivelse 	= $_REQUEST['udgivelse'];	else $udgivelse="";
  	if(!empty($_REQUEST['side_fra']))	$side_fra 	= $_REQUEST['side_fra'];	else $side_fra="";
  	if(!empty($_REQUEST['side_til']))	$side_til 	= $_REQUEST['side_til'];	else $side_til="";

   	if($produktion!="")
  		$titel="<i>".$titel."</i>, ";
    else
    	$titel="<i>".$titel."</i>. ";
    if($fornavn!="" && $efternavn !="") $kunstner = $efternavn . ", " . $fornavn . ". ";
  	if($produktion!="") $produktion .= ". ";
  	if($bogtitel!="") $bogtitel = "Set i: " . $bogtitel . ". ";
  	if($museum!="") $museum = "Set: " . $museum . ". ";
    if($adresse!="") $adresse .= ". ";
    if($url!="") $url = "Set: " . $url . ". ";
    if($dato!="") $dato .= ". ";
    if($forlag!="") $forlag .= ", ";
  	if($udgivelse!="") $udgivelse .= ". ";
  	if($side_fra!="") $sider = "s. " . $side_fra;
    if($side_til!="") $sider.= "-" . $side_til;
    if($side_fra!="") $sider.=". ";

    if($_REQUEST['sted']=="bog")
		$vText = $kunstner.$titel.$produktion.$bogtitel.$forlag.$udgivelse.$sider.$database;

	if($_REQUEST['sted']=="museum")
    	$vText = $titel.$kunstner.$produktion.$museum.$adresse.$database;

    if($_REQUEST['sted']=="internet")
    	$vText = $titel.$kunstner.$produktion.$url.$dato.$database;
?>
