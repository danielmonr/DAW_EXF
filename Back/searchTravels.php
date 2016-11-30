<?php
   include_once("DBConnection.php");
   $db = new DBConnection();
   $dbc = $db->Connect();

   $res = $_POST['data'];
   $destino = $res[0]["value"];

   $sql = "select * from exf_Viajes where destino=" . $destino;

   if ($result = $dbc->query($sql)){
     // output data of each row
     $r = $result->fetch_assoc();
     $json = json_encode($r);
     echo $json;
   } else {
     echo 0;
   }

?>
