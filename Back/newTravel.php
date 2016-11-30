<?php
   include_once("DBConnection.php");
   $db = new DBConnection();
   $dbc = $db->Connect();

   $sql = "select * from exf_Viajes order by partida desc limit 5";

   if ($result = $dbc->query($sql)){
     // output data of each row
     $r = $result->fetch_assoc();
     $json = json_encode($r);
     echo $json;
   } else {
     echo '{"eror": {"text": "no se encontó la agencia"}}';
   }

?>
