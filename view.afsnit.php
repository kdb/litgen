<?php
	// Afsnit i bog

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

    // 1 forfatter: Efternavn, Fornavn: Titel. #. udg. Forlag. Udgivelsesår.
	  // 2 forfattere: Efternavn, Fornavn og Fornavn Efternavn: Titel. #. udg. Forlag. Udgivelsesår.
    // 3 eller flere forfattere: Efternavn, Fornavn m.fl.: Titel. #. udg. Forlag. Udgivelsesår.

    // 1 forfatter
    if($antal_forfattere==1)
    	$flere_forfattere = "";

    // 2 forfattere
    if($antal_forfattere==2){
    	if(!empty($_REQUEST['fornavn1']) && !empty($_REQUEST['efternavn1']))
        	$flere_forfattere = " og " . $_REQUEST['fornavn1'] . " " . $_REQUEST['efternavn1'];
    	else
        	$flere_forfattere = "";
    }

    // 3 eller flere forfattere
    if($antal_forfattere>=3)
    	$flere_forfattere = " m.fl.";

    $forfatter_redaktor = $_REQUEST['forfatter_redaktor'];
    $efternavn_afsnit 		= $_REQUEST['efternavn_afsnit'];
    $fornavn_afsnit 		= $_REQUEST['fornavn_afsnit'];
    $efternavn 		= $_REQUEST['efternavn'];
    $fornavn 		= $_REQUEST['fornavn'];
	  $titel_bog 		= $_REQUEST['titel_bog'];
    $titel_afsnit 	= $_REQUEST['titel_afsnit'];
    $udgave 		= $_REQUEST['udgave'];
    if($udgave==0)
    	$udgave		= "";
    $forlag 		= $_REQUEST['forlag'];
    $udgivelse 		= $_REQUEST['udgivelse'];
    if(empty($_REQUEST['bindnummer']))
    	$bindnummer	= "";
    else
    	$bindnummer	= $_REQUEST['bindnummer'];
    $side_fra 		= $_REQUEST['side_fra'];
    $side_til 		= $_REQUEST['side_til'];
    $url 			= $_REQUEST['url'];
    $dato_d = $_REQUEST['dato_d'];
    $dato_m = $_REQUEST['dato_m'];
    $dato_y = $_REQUEST['dato_y'];
    $dato = $dato_d.".".$dato_m.".".$dato_y;

    $database_name 	= $_REQUEST['database_name'];
    $database_d 	= $_REQUEST['database_d'];
    $database_m 	= $_REQUEST['database_m'];
    $database_y 	= $_REQUEST['database_y'];
    $database_date 	= $database_d.".".$database_m.".".$database_y;
    $database="Database: ".$database_name." - Besøgt d. ".$database_date;

    if($forfatter_redaktor=="forfatter"){
    	if($efternavn_afsnit!="") $efternavn_afsnit.=", ";
    	if($fornavn_afsnit!="") $fornavn_afsnit.=": ";
    }
    if($forfatter_redaktor=="redaktor"){
       	if($efternavn_afsnit!="") $efternavn_afsnit.=", ";
    	if($fornavn_afsnit!="") $fornavn_afsnit.=". ";
    }

    $titel_afsnit.=". ";
    //$efternavn.=". ";
    $titel_bog="I: <i>".$titel_bog."</i>. ";
    $udgave.=". udg. ";
    $forlag.=", ";
    $udgivelse.=". ";
    if($bindnummer!="") $bindnummer="Bind " . $bindnummer.", ";
    $sider=" side ".$side_fra."-".$side_til.". ";
    if($url!="") $url="Internetadresse: ".$url." ";
    if($url=="") $dato=""; else $dato="- Besøgt d. ".$dato.". ";

    if($forfatter_redaktor=="forfatter"){
    	$efternavn.=", ";
    	$flere_forfattere.=": ";

        //af=afsnittets forfatter, bf=bogens forfatter
        //afEfternavn, afFornavn: TitelAfsnit. bfEfternavn, bfFornavn: I: TitelBog. 1. udg. Forlag, 2004. 1, (side 5-18). Internetadresse: Internetadresse Besøgt d. 01.08.2007 (Afsnit i bog)
		$vText = $efternavn_afsnit.$fornavn_afsnit.$titel_afsnit.$efternavn.$fornavn.$flere_forfattere.$titel_bog.$udgave.$forlag.$udgivelse.$bindnummer.$sider.$url.$dato.$database;
    }

    //En redaktør: Titel. Redigeret af: Fornavn Efternavn. Udgave. Forlag. Udgivelsesår
    //Flere redaktører: Bogens titel. Redigeret af fornavn efternavn, øvrige redaktørers fornavne og efternavne. Udgave. Forlag. Udgivelsesår
    if($forfatter_redaktor=="redaktor"){
    	//redaktor="Redigeret af: "+fornavn+" "+efternavn;
        if($antal_forfattere<3)
        	$flere_forfattere.=". ";
        $vText = $efternavn_afsnit.$fornavn_afsnit.$titel_afsnit.$titel_bog.$sider."Redigeret af: ".$fornavn." ".$efternavn.$flere_forfattere.$bindnummer.$udgave.$forlag.$udgivelse.$url.$dato.$database;
    }

    $vText = str_replace("..",".",$vText);
?>
