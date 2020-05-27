<html>

<head>

<link rel="stylesheet" href="style.css">
</head>


<body>
    
<div class="container">

<div class="header item">

<h1>Insert i Delete</h1>
<h3>Oliwier Sikora</h3>

</div>

<div class="main item">

    <?php

                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "library";

                $conn = new mysqli($servername, $username, $password, $dbname);


                $result1 = $conn->query("SELECT id_book, imie, nazwisko, tytul, ISBN FROM books, autorzy, tytuly WHERE books.id_autor=autorzy.id_autor AND books.id_tytul=tytuly.id_tytul");

                echo("<table>");
                echo("<tr>
                <th>ID</th>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Tytuł</th>
                <th>ISBN</th>
                </tr>");

                while($row=$result1->fetch_assoc() ){
                    echo("<tr>");
                    echo("<td>".$row['id_book']."</td>");
                    echo("<td>".$row['imie']."</td>");
                    echo("<td>".$row['nazwisko']."</td>");
                    echo("<td>".$row['tytul']."</td>");
                    echo("<td>".$row['ISBN']."</td>");
                   
                }
                echo("</table>");
            ?>

</div>

<div class="rightsidebar item">



</div>

</div>


</body>


</html>