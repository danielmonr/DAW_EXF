<?php
   include_once("DBConnection.php");

   //print("entro<br/>");


    $_SESSION['login_user'] = $user["id"];
    header("location: http://ubiquitous.csf.itesm.mx/~daw-1021514/content/DAW_EXF/Front/index.html");

?>
