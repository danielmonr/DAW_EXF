<?php
   include_once("DBConnection.php");
   $db = new DBConnection();
   $dbc = $db->Connect();

   $res = $_POST['data'];
   $id = $res[0]["value"];

   $sql = "delete from exf_Viajes where id=" . $id;
   $sql2 = "delete from exf_Reservas where id_viaje=" . $id;

   if ($dbc->query($sql) $$ $dbc->query($sql2)){
     // output data of each row
     echo 1;
   } else {
     echo 0;
   }

?>
