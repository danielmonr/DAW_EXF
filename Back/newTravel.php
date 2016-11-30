<?php
   include_once("DBConnection.php");
   $db = new DBConnection();
   $dbc = $db->Connect();

   $res = $_POST['jsonf'];

   echo $res;

   $decode = json_decode($res);

   $sql = "insert into exf_Viajes (destino, tipo, descripcion, foto, precio, partida, regreso, medio) values ()";

   /*if ($result = $dbc->query($sql)){
     // output data of each row
     $r = $result->fetch_assoc();
     $json = json_encode($r);
     echo $json;
   } else {
     echo '{"eror": {"text": "no se encontó la agencia"}}';
   }*/

?>
