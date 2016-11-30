<?php
    session_start();
    include_once("session.php");
   include_once("DBConnection.php");
   $db = new DBConnection();
   $dbc = $db->Connect();



   $sql = "delete from exf_Clientes where id=" . $_SESSION['login_user'];
   $sql2 = "delete from exf_Reservas where id_cliente=". $_SESSION['login_user'];

   if ($result = $dbc->query($sql)){
     // output data of each row
     $r = $result->fetch_assoc();
     $json = json_encode($r);
     echo $json;
   } else {
     echo 0;
   }

?>
