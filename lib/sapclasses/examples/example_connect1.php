<html>
<head>
   <title> SAPConnection Class: Server</title>
</head>
<body>
<h1>SAPConnection Class: Connection to Application Server</h1>
<?
    include_once ("../sap.php");

    $sap = new SAPConnection();
    // Params: hostname   sysnr
    $sap->ConnectToApplicationServer ("server", "15");
    // Params:  client username  password  language
    $sap->Open ("800", "user","marlon321","ES");
    $sap->PrintStatus();
    $sap->GetSystemInfo();
    echo "<BR><PRE>"; print_r ($sap); echo ("</PRE>");
    $sap->Close();
?>
</body>
</html>
