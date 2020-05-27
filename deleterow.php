
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "library";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "DELETE FROM `books` WHERE id_book=".$_POST['id']." "; 

    mysqli_query($conn, $sql);

    header("Location:http://localhost/phpinsertdelete/");

?>
