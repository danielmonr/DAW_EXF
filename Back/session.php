<?php
    include_once('DBConnection.php');
    $db = new DBConnection();
    $dbc = $db->Connect();
    session_start();

    //print("Se está corriendo<br/>");

    if(!isset($_SESSION['login_user'])){
        header("location: ../Front/index.html");
    }

    $user_id = $_SESSION['login_user'];

    $sql = mysqli_query($dbc,"SELECT nombre from exf_Clientes WHERE id = '$user_id' ");

    $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);

    $name_logged = $row['nombre'];


?>
