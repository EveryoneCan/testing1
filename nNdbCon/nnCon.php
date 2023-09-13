<?php
    $nnSeverName=$nnDatabaseName=$nnUserName=$nnPass=$nnConnString ="";

    $nnSeverName= "localhost";
    $nnUserName = "root";
    $nnPass="";
    $nnDatabaseName = "sjiit_hrms";

    $nnConnString = mysqli_connect($nnSeverName,$nnUserName,$nnPass,$nnDatabaseName);

    if($nnConnString){
        return $nnConnString;
    }

    else{
        
    }

?>