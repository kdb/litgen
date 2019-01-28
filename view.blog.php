<?php      
	          
    // Titel på indlæg. Titel på blog, forfatter. Dato for indlæg. url, dato for besøg

    $efternavn 	= $_REQUEST['efternavn'];    
    $fornavn 	= $_REQUEST['fornavn'];       
	$titel	 	= $_REQUEST['titel'];
    $blogtitel	= $_REQUEST['blogtitel'];
    $visit_d 	= $_REQUEST['visit_d'];
    $visit_m 	= $_REQUEST['visit_m'];
    $visit_y 	= $_REQUEST['visit_y'];
    $visit	 	= $visit_d.".".$visit_m.".".$visit_y;
    $url 		= $_REQUEST['url'];
    $posted_d 	= $_REQUEST['posted_d'];
    $posted_m 	= $_REQUEST['posted_m'];
    $posted_y 	= $_REQUEST['posted_y'];
    $posted 	= $posted_d.".".$posted_m.".".$posted_y;
    
    $titel .= ". ";
    $blogtitel .= ", ";
    $efternavn .= ", ";
    $fornavn .= ". ";
    $posted .= ". ";
    $url="Internetadresse: ".$url." ";
    $visit="- Besøgt d. ".$visit;
    
    // Titel på indlæg. Titel på blog, forfatter. Dato for indlæg. url, dato for besøg.

    $vText = $efternavn.$fornavn.": ". $titel."<i>".$blogtitel."</i>".$posted.$url.$visit;

?>