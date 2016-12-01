<?php
   include_once("DBConnection.php");
   $db = new DBConnection();
   $dbc = $db->Connect();
   session_start();

   $valid = false;

   //print("entro<br/>");

   $res = $_POST['data'];
   $myusername = $res[0]["value"];
   $mypassword = $res[1]["value"];

   $sql = "SELECT * FROM exf_Clientes WHERE email = '$myusername' and password = '$mypassword' limit 1";
   //print("<br/>".$sql . "<br/>");
   if($result = $dbc->query($sql)){
    // output data of each row
    $user = $result->fetch_assoc();
    $_SESSION['login_user'] = $user["id"];
    header("location: http://ubiquitous.csf.itesm.mx/~daw-1021514/content/DAW_EXF/Front/Travels/search.html");
    echo 1;
} else {
    echo 0;
}
?>
