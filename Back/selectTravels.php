<?php
   include_once("DBConnection.php");
   $db = new DBConnection();
   $dbc = $db->Connect();

   $array = array();

   $sql = "select * from exf_Viajes";

   if ($result = $dbc->query($sql)){
     while($r = $result->fetch_assoc()){
      array_push($array, $r);
     }

     $json = json_encode($array);
     echo $json;
   } else {
     echo 0;
   }
