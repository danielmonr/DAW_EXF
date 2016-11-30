<?php
   include_once("DBConnection.php");
   $db = new DBConnection();
   $dbc = $db->Connect();

   $res = $_POST['data'];
   //$decode = json_decode($res);
   echo $res;
   /*$dest = $decode["destino"];
   $tipo = $decode["tipo"];
   $desc = $decode["descripcion"];
   $precio = $decode["precio"];
   $partida = $decode["partida"];
   $regreso = $decode["regreso"];
   $medio = $decode["medio"];

   $sql = "insert into exf_Viajes (destino, tipo, descripcion, precio, partida, regreso, medio) values (".$dest . $tipo . $desc . $precio . $precio . $partida . $regreso . $medio . ")";

   if ($dbc->query($sql)){
     // output data of each row
     echo '{"success":"true"}';
   } else {
     echo '{"eror": {"text": "no se encontó la agencia"}}';
   }
*/
?>
