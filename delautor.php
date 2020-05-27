<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "library";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "DELETE FROM `autorzy` WHERE `autorzy`.`id_autor` = ".$_POST['idautor']."";

    mysqli_query($conn, $sql);

   header("Location:http://localhost/phpinsertdelete/");

?>