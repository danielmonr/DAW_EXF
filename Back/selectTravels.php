<?php
   include_once("DBConnection.php");
   $db = new DBConnection();
   $dbc = $db->Connect();


   $sql = "select * from exf_Viajes";

   if ($result = $dbc->query($sql)){
     // output data of each row
     $r = $result->fetch_assoc();
     $json = json_encode($r);
     echo $json;
   } else {
     echo 0;
   }
