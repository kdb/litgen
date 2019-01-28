<?php
    // List files in dir
    // Open dir
    if(!$dh = opendir('.'))
        dir("Couldn't open directory");
    
    $toDage = 60*60*24*2;
    $toDageSiden = (time()-$toDage);
    
    // Delete files    
    while(false !== ($file = readdir($dh))){        
        if(strpos($file,".txt")){
            if(filemtime($file)<$toDageSiden){ //Find .txt-fil ældre end 2 dage                
                unlink($file); //Slet fil                                
                print($file . " deleted.<br />");
            }else{                
                print($file . "<br />");
            }
        }
        
    }                   
?>