<?php

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
    $efternavn 			= $_REQUEST['efternavn'];
    $fornavn 			= $_REQUEST['fornavn'];
	$titel	 			= $_REQUEST['titel'];
    $serietitel	 		= $_REQUEST['serietitel'];
    $udgave 			= $_REQUEST['udgave'];
    $bindnummer 		= $_REQUEST['bindnummer'];
    $bindtitel   		= $_REQUEST['bindtitel'];
    $forlag 			= $_REQUEST['forlag'];
    $udgivelse 			= $_REQUEST['udgivelse'];
    $side_fra 		    = $_REQUEST['side_fra'];
    $side_til 		    = $_REQUEST['side_til'];
    $url 				= $_REQUEST['url'];
    $dato_d 			= $_REQUEST['dato_d'];
    $dato_m 			= $_REQUEST['dato_m'];
    $dato_y 			= $_REQUEST['dato_y'];
    $dato 				= $dato_d.".".$dato_m.".".$dato_y.". ";
    $database_name 	    = $_REQUEST['database_name'];
    $database_d 	    = $_REQUEST['database_d'];
    $database_m 	    = $_REQUEST['database_m'];
    $database_y 	    = $_REQUEST['database_y'];
    $database_date 	    = $database_d.".".$database_m.".".$database_y;
    if (!empty($database_name))
      $database="Database: ".$database_name." - Besøgt d. ".$database_date;
    else
      $database="";

    if($forfatter_redaktor=="forfatter"){
    	if(!empty($fornavn))
            $efternavn.=", ";
        $flere_forfattere.=": ";
        if(!empty($serietitel))
            $titel.=", ";
        else
            $titel.=". ";
        if(!empty($serietitel))
            $serietitel.=". ";
        $udgave.=". udg. ";
        if($bindnummer!=""){
            if($bindtitel!="")
                $bindnummer="Bind ".$bindnummer.", ";
            else
                $bindnummer="Bind ".$bindnummer.". ";
        }
        if($bindtitel!="")
            $bindtitel.=". ";
        $forlag.=", ";
        $udgivelse.=". ";
        $sider="";
        if(!empty($side_fra) AND !empty($side_til))
            $sider="Side ".$side_fra."-".$side_til.". ";
        if($url!="") $url="Internetadresse: ".$url." ";
        if($url=="") $dato=""; else $dato="- Besøgt d. ".$dato;

        $vText = $efternavn.$fornavn.$flere_forfattere."<i>".$titel."</i>".$serietitel.$sider.$bindnummer.$bindtitel.$udgave.$forlag.$udgivelse.$url.$dato.$database;
    }

    //En redaktør: Titel. Redigeret af: Fornavn Efternavn. Udgave. Forlag. Udgivelsesår
    //Flere redaktører: Bogens titel. Redigeret af fornavn efternavn, øvrige redaktørers fornavne og efternavne. Udgave. Forlag. Udgivelsesår
    if($forfatter_redaktor=="redaktor"){
    	if(!empty($serietitel))
            $titel.=", ";
        else
            $titel.=". ";
        if(!empty($serietitel))
            $serietitel.=". ";
        //redaktor="Redigeret af: "+fornavn+" "+efternavn;
        if($antal_forfattere<3)
        	$flere_forfattere.=". ";
        $udgave.=". udg. ";
        if($bindnummer!=""){
            if($bindtitel!="")
                $bindnummer="Bind ".$bindnummer.", ";
            else
                $bindnummer="Bind ".$bindnummer.". ";
        }
        if($bindtitel!="")
            $bindtitel.=". ";
        $forlag.=", ";
        $udgivelse.=". ";
        if(!empty($side_fra) AND !empty($side_til))
            $sider="Side ".$side_fra."-".$side_til.". ";
        if($url!="") $url="Internetadresse: ".$url." ";
        if($url=="") $dato=""; else $dato="- Besøgt d. ".$dato.". ";
        $vText = "<i>".$titel."</i>".$serietitel.$sider."Redigeret af: ".$fornavn." ".$efternavn.$flere_forfattere.$bindnummer.$bindtitel.$udgave.$forlag.$udgivelse.$url.$dato.$database;
    }

?>
