<?php
   include_once("DBConnection.php");
   $db = new DBConnection();
   $dbc = $db->Connect();

   $res = $_POST['data'];
   //$decode = json_decode($res);
   $nombre = $res[0]["value"];
   $apat = $res[1]["value"];
   $amat = $res[2]["value"];
   $tel = $res[3]["value"];
   $email = $res[4]["value"];
   $password = $res[5]["value"];

   $sql = 'insert into exf_Clientes (nombre, apaterno, amaterno, tel, email, password) values ("' . $nombre . '","' . $apat . '","' . $amat . '",' . $tel . ',"' . $email . '","' . $password . '")';
   echo $sql;
   if ($dbc->query($sql)){
     // output data of each row
     echo '{"success":"true"}';
   } else {
     echo '{"eror": {"text": "no se encontó la agencia"}}';
   }

?>
