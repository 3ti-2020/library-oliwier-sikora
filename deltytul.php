<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "library";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "DELETE FROM `tytuly` WHERE `tytuly`.`id_tytul` = ".$_POST['idtytul']."";

    mysqli_query($conn, $sql);

   header("Location:http://localhost/phpinsertdelete/");

?>