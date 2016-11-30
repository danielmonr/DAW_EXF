<?php
   include_once("DBConnection.php");
   $db = new DBConnection();
   $dbc = $db->Connect();

   $res = $_POST['data'];
   //$decode = json_decode($res);
   $dest = $res[0]["value"];
   $tipo = $res[0]["value"];
   $desc = $res[0]["value"];
   $precio = $res[0]["value"];
   $partida = $res[0]["value"];
   $regreso = $res[0]["value"];
   $medio = $res[0]["value"];

   $sql = 'insert into exf_Viajes (destino, tipo, descripcion, precio, partida, regreso, medio) values ("' . $dest . '","' . $tipo . '","' . $desc . '",' . $precio . ',"' . $partida . '","' . $regreso . '","' . $medio . '")';
   echo $sql;
   if ($dbc->query($sql)){
     // output data of each row
     echo '{"success":"true"}';
   } else {
     echo '{"eror": {"text": "no se encontó la agencia"}}';
   }

?>
