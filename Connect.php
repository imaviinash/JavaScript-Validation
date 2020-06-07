<?php
    $Servername = "localhost";
    $Username = "root";
    $Password = "";
    $DName = "project";

    $connect = mysql_connect($Servername,$Username,$Password,$DName);
    if($connect){
        echo "Connection established !!";
    }
    
    else{
        die(Error in connection because . mysql_connect_error());
    }
       
    

?>