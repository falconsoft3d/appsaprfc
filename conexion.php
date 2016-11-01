<?php
    include_once ("lib/sapclasses/sap.php");

    $sap = new SAPConnection();
    // Params:                        hostname   sysnr
    $sap->ConnectToApplicationServer ("erpukpltm.dyndns.org", "15");
    // Params:  client username  password  language
    $sap->Open ("800", "EHP7USER470","marlon321","ES"); 
?>