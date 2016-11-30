<?php
   include_once("DBConnection.php");
   $db = new DBConnection();
   $dbc = $db->Connect();

   $res = $_POST['data'];
   //$decode = json_decode($res);
   $dest = $res[0]["value"];
   $tipo = $res[1]["value"];
   $desc = $res[2]["value"];
   $precio = $res[3]["value"];
   $partida = $res[4]["value"];
   $regreso = $res[5]["value"];
   $medio = $res[6]["value"];

   $sql = 'insert into exf_Viajes (destino, tipo, descripcion, precio, partida, regreso, medio) values ("' . $dest . '","' . $tipo . '","' . $desc . '",' . $precio . ',"' . $partida . '","' . $regreso . '","' . $medio . '")';
   echo $sql;
   if ($dbc->query($sql)){
     // output data of each row
     echo '{"success":"true"}';
   } else {
     echo '{"eror": {"text": "no se encontó la agencia"}}';
   }

?>
