<?php
   include_once("DBConnection.php");
   $db = new DBConnection();
   $dbc = $db->Connect();

   $sql = "select * from exf_Agencia where id = 1";

   if ($result = $dbc->query($sql)){
     // output data of each row
     $r = $result->fetch_assoc();
     $json = json_encode($r);
     echo '{"items": ' . $json . '}';
   } else {
     echo '{"eror": {"text": "no se encontó la agencia"}}';
   }

?>
