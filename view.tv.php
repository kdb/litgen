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

    $efternavn 	= $_REQUEST['efternavn'];
    $fornavn 	= $_REQUEST['fornavn'];
	$titel 		= $_REQUEST['titel'];
    $serietitel = $_REQUEST['serietitel'];
    $indhold 	= $_REQUEST['indhold'];
	$len     	= $_REQUEST['len'];
    $tvStation 	= $_REQUEST['tvStation'];
    $sendt 	= $_REQUEST['sendt'];
    $url 	= $_REQUEST['url'];
    $dato="";
    if(!empty($_REQUEST['dato_d'])) $dato.= $_REQUEST['dato_d'].".";
    if(!empty($_REQUEST['dato_m'])) $dato.= $_REQUEST['dato_m'].".";
    if(!empty($_REQUEST['dato_y'])) $dato.= $_REQUEST['dato_y'];
    if(!empty($_REQUEST['sendt_d'])) $sendt_dato.= $_REQUEST['sendt_d'].".";
    if(!empty($_REQUEST['sendt_m'])) $sendt_dato.= $_REQUEST['sendt_m'].".";
    if(!empty($_REQUEST['sendt_y'])) $sendt_dato.= $_REQUEST['sendt_y'];
    if($titel!="") $titel = "<i>".$titel."</i>. ";
    if($serietitel!="") $serietitel .= " ";
    if($indhold!="") $indhold = "(".$indhold."). ";
    if($tvStation!="") $tvStation .= ", ";
    if($url!="") $url="Internetadresse: ".$url;
    if($len!="") $len=$len." min., ";
    if($sendt_dato!="") $sendt_dato="sendt d. ".$sendt_dato . ". ";
    if($url=="") $dato=""; else $dato = " - Besøgt d. " . $dato;

    if($efternavn!="") $efternavn.=", ";
    if($flere_forfattere!="") $flere_forfattere.=": ";
    if($flere_forfattere=="" && ($fornavn!="" || $efternavn!="")) $flere_forfattere.=": ";

    $vText = $efternavn.$fornavn.$flere_forfattere.$titel.$serietitel.$indhold.$len.$tvStation.$sendt_dato.$url.$dato;
