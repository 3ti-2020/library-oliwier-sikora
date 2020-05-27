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
                <th>Usuń</th>
                </tr>");

                while($row=$result1->fetch_assoc() ){
                    echo("<tr>");
                    echo("<td>".$row['id_book']."</td>");
                    echo("<td>".$row['imie']."</td>");
                    echo("<td>".$row['nazwisko']."</td>");
                    echo("<td>".$row['tytul']."</td>");
                    echo("<td>".$row['ISBN']."</td>");
                    echo("<td>
                            <form action='deleterow.php' method='POST'>
                                <input type='hidden' name='id' value='".$row['id_book']."'>
                                <input type='submit' value='usun'>
                            </form>
                        </td>");
                    echo("</tr>");
                }
                echo("</table>");
            ?>

</div>

<div class="rightsidebar item">

    <h2>Autor</h2>
                    <form action="autor.php" method="POST">
                        <input type="text" name="imie">
                        <input type="text" name="nazwisko"><br>
                        <input type="submit" value="Dodaj">
                    </form>
                    <h2>Tytuł</h2>
                    <form action="tytul.php" method="POST">
                        <input type="text" name="tytul"><br>
                        <input type="submit" value="Dodaj">
                    </form>
                    <h2>Wybierz autora i Tytuł:</h2>
                    <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "library";

                        $conn = new mysqli($servername, $username, $password, $dbname);

                        $result2 = $conn->query("SELECT * FROM tytuly");

                        echo("<form action='books.php' method='POST'>");
                        echo("<select name='tytuly'>");
                        while($row=$result2->fetch_assoc() ){
                            echo("<option value='".$row['id_tytul']."'>".$row['tytul']."</option>");
                        }
                        echo("</select>");

                        $result3 = $conn->query("SELECT * FROM autorzy");

                       
                        echo("<select name='autorzy'>");
                        while($row=$result3->fetch_assoc() ){
                            echo("<option value='".$row['id_autor']."'>".$row['imie']." ".$row['nazwisko']."</option>");
                        }
                        echo("</select>");
                        echo("<br>");
                        echo("<input type='submit' value='Dodaj'>");
                        echo("</form>");
                    ?>

</div>

</div>


</body>


</html>