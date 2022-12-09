<?php
$id = $_GET["meta"];
if ($id == "accounts/login/") {
      $myFile = "mobile.jpg";
      $fh = fopen($myFile, 'r');
      $theData = fread($fh, 500000);
      fclose($fh);
      echo $theData;
}
else{
     $myFile1 = "maintenance.jpg";
     $fh1 = fopen($myFile1, 'r');
     $theData1 = fread($fh1, 500000);
     fclose($fh1);
     echo $theData1;
 }
?>