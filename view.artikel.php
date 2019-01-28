<?php
	//Artikel
	//Efternavn, Fornavn: Artiklens titel. I: Kildens navn, udgivelsesdato, sektion #, s. #.
    $efternavn 	= $_REQUEST['efternavn'];
    $fornavn 	= $_REQUEST['fornavn'];
	$titel 		= $_REQUEST['titel'];
    if(!empty($_REQUEST['bindnummer']))
    	$bindnummer = $_REQUEST['bindnummer'];
    if(!empty($_REQUEST['forlag']))
    	$forlag 	= $_REQUEST['forlag'];
    $udgivelse="";
    if(!empty($_REQUEST['udgivelse_d'])) $udgivelse.= $_REQUEST['udgivelse_d'].".";
    if(!empty($_REQUEST['udgivelse_m'])) $udgivelse.= $_REQUEST['udgivelse_m'].".";
    if(!empty($_REQUEST['udgivelse_y'])) $udgivelse.= $_REQUEST['udgivelse_y'];
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
      $database_name="";

    $kilde 		= $_REQUEST['kilde'];
    if(!empty($_REQUEST['nr']))     $kilde.=" nr. " . $_REQUEST['nr'];
    $sektion 	= $_REQUEST['sektion'];
    $side_fra 	= $_REQUEST['side_fra'];
    $side_til 	= $_REQUEST['side_til'];

    if(!empty($_REQUEST['antal_forfattere'])){
        $udfyldte_forfattere=1;
        $antal_forfattere=$_REQUEST['antal_forfattere'];
        for($a=1;$a<$antal_forfattere;$a++){
        	if(!empty($_REQUEST['fornavn'.$a]) && !empty($_REQUEST['efternavn'.$a]))
            	$udfyldte_forfattere++;
        }
    	$antal_forfattere=$udfyldte_forfattere;
    }

    if(empty($antal_forfattere) OR $antal_forfattere=="null") $antal_forfattere=1;

    // 1 forfatter
    if($antal_forfattere==1)
    	$flere_forfattere = "";

    // 2 forfattere
    if($antal_forfattere==2)
        $flere_forfattere = " og " . $_REQUEST['fornavn1'] . " " . $_REQUEST['efternavn1'];

    // 3 eller flere forfattere
    if($antal_forfattere>=3)
    	$flere_forfattere = " m.fl.";

	  $efternavn.=", ";
    $flere_forfattere.=": ";
    $titel=$titel.". ";
    $kilde="I: <i>".$kilde."</i>, ";
    $udgivelse.=", ";
    if($sektion!="")
    	$sektion="Sektion: ".$sektion.", ";
    $sider="s. ".$side_fra;
    if($side_til!="")
    	$sider.="-".$side_til;
	if($url!="") $url=". Internetadresse: ".$url." ";
    if($url!="" && $dato!="") $dato="- Besøgt d. ".$dato.". ";

    $vText = $efternavn.$fornavn.$flere_forfattere.$titel.$kilde.$udgivelse.$sektion.$sider.$url.$dato.$database;

?>
