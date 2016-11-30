<?php
   include_once("DBConnection.php");
   $db = new DBConnection();
   $dbc = $db->Connect();

   $res = $_POST['data'];
   $id = $res[0]["value"];
   $dest = $res[1]["value"];
   $tipo = $res[2]["value"];
   $desc = $res[3]["value"];
   $precio = $res[4]["value"];
   $partida = $res[5]["value"];
   $regreso = $res[6]["value"];
   $medio = $res[7]["value"];

   $sql = 'update exf_Viajes set destino="' . $dest . '",tipo="' . $tipo . '",descripcion="' . $desc . '",precio=' . $precio . ',partida="' . $partida . '",regreso="' . $regreso . '",medio="' . $medio . '" where id='.$id;
   //echo $sql;
   if ($dbc->query($sql)){
     // output data of each row
     echo 1;
   } else {
     echo 0;
   }

?>
