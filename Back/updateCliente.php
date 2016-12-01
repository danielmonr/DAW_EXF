<?php
include_once("session.php");
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

   $sql = 'update exf_Clientes set nombre="' . $nombre . '",apaterno="' . $apat . '",amaterno="' . $amat . '",telefono=' . $tel . ',email="' . $email . '",password="' . $password . '" where id=' . $_SESSION['login_user'];
   echo $sql;
   if ($dbc->query($sql)){
     // output data of each row
     echo 1;
   } else {
     echo 0;
   }

?>
