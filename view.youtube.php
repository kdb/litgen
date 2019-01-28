<?php      
	          
    // Serietitel, <i>Titel</i>, Youtuber, Forfatter, dato for indlæg, url, dato for besøg.

    $efternavn 	= $_REQUEST['efternavn'];
    $fornavn 	= $_REQUEST['fornavn'];    
    $youtuber 	= $_REQUEST['youtuber'];
	$titel	 	= $_REQUEST['titel'];
    $serietitel	= $_REQUEST['serietitel'];
    $visit_d 	= $_REQUEST['visit_d'];
    $visit_m 	= $_REQUEST['visit_m'];
    $visit_y 	= $_REQUEST['visit_y'];
    $visit	 	= $visit_d.".".$visit_m.".".$visit_y;
    $url 		= $_REQUEST['url'];
    $posted_d 	= $_REQUEST['posted_d'];
    $posted_m 	= $_REQUEST['posted_m'];
    $posted_y 	= $_REQUEST['posted_y'];
    $posted 	= $posted_d.".".$posted_m.".".$posted_y;
        
    if(!empty($serietitel)) $serietitel .= ", ";
    $titel .= ". ";
    $youtuber .= ". ";
    if(!empty($fornavn) && !empty($efternavn)){
        $efternavn .= ", ";            
    } 
    if(!empty($fornavn) || !empty($efternavn)){
        $fornavn .= ". ";
    }
    $posted .= ". ";
    $url="Internetadresse: " . $url . " ";
    $visit="- Besøgt d. " . $visit;        
    
    $vText = $youtuber.$efternavn.", ". $fornavn.": ".$serietitel."<i>".$titel."</i>".$posted.$url.$visit;
?>