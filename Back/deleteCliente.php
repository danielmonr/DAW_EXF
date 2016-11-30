<?php
    session_start();
    include_once("session.php");
   include_once("DBConnection.php");
   $db = new DBConnection();
   $dbc = $db->Connect();



   $sql = "delete from exf_Clientes where id=" . $_SESSION['login_user'];
   $sql2 = "delete from exf_Reservas where id_cliente=". $_SESSION['login_user'];

   if ($dbc->query($sql) && $dbc->query($sql2)){
     // output data of each row
     echo 1;
   } else {
     echo 0;
   }

?>
