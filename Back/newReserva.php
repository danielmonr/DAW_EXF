<?php
session_start();
include_once("session.php");
   include_once("DBConnection.php");
   $db = new DBConnection();
   $dbc = $db->Connect();

   $viaje = $_GET['viaje'];

   $sql = 'insert into exf_Reservas (id_cliente, id_viaje) values (' . $_SESSION['login_user'] . ',' . $viaje . ')';
   echo $sql;
   if ($dbc->query($sql)){
     // output data of each row
     echo 1;
   } else {
     echo 0;
   }

?>
