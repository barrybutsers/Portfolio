<?php
    include "../PHP/Functions.php";
    session_start();
    //Bestaat de session logged in?
    if(!isset($_SESSION['loggedIn'])){
        header("Location: Inlog.php");
    }
    else{
        if($_SESSION['loggedIn'] != TRUE){
            //Gebruiker is niet ingelogd
            header("Location: Inlog.php");
        }
    }
?>
<!--
Opdracht:       Portfolio
Auteur:         Lars van Alphen
Aanmaakdatum:   startdatum + tijd>
Bestandsnaam:   Cijferlijst.php
-->
<!DOCTYPE HTML>
<html>
    <head>
        <title>
            Cijferlijst
        </title>
        <meta name="description" content="Cijferlijst">
        <meta name="keywords" content="Lars van Alphen, Cijferlijst">
        <!--Declareren van de tekenreeks-->
        <meta charset="UTF-8">
        <link href="../CSS/StyleSheet.css" rel="stylesheet" type="text/css">
        <script src="../Js/jquery-3.1.1.js"></script>
        <script src="../Js/Script.js"></script>
    </head>
    <body>
        <!--Menu-->
        <header>
            <!--Hoofdtitel-->
            <h1>Cijferlijst</h1>
            <!--Navigatie bar-->
            <nav>
                <ul id="menu">
                    <li><a href="../Home/Index.html">Home</a></li>
                    <li><a href="../Opleiding/Opleiding.html">Opleiding</a></li>
                    <li><a href="../Project/Project.html">Projecten</a></li>
                    <li><a href="../Vaardigheden/Vaardigheden.html">Vaardigheden</a></li>
                    <li><a href="../Contact/Contact.php">Contact</a></li>
                    <li><a href="../Cijferlijst/Inlog.php">Cijferlijst</a></li>
                    <li><a href="../Quiz/Quiz.html">Quiz</a></li>
                </ul>
            </nav>
        </header>
        <!--Content-->
        <section id="ruimte">
            <article id="content">
                <!--Cijferlijst-->
                <h2>Cijferlijst</h2>
                <table id="Cijferlijst">
                  <tr>
                    <th class="periodeHeader" colspan="2">Cijferlijst periode 1</th>
                  </tr>
                  <tr>
                    <th>Vak</th>
                    <th>Periode cijfer</th>
                  </tr>
                  <tr>
                    <td>Digitale Vaardigheden</td>
                    <td>7,2</td>
                  </tr>
                  <tr>
                    <td>Computertekenen</td>
                    <td>6,2</td>
                  </tr>
                  <tr>
                    <td>Hardware</td>
                    <td>7,9</td>
                  </tr>
                  <tr>
                    <td>HTML-CSS</td>
                    <td>6,6</td>
                  </tr>
                  <tr>
                    <td>Javascript</td>
                    <td>8,0</td>
                  </tr>
                  <tr>
                    <td>PHP</td>
                    <td>7,8</td>
                  </tr>
                  <tr>
                    <td>Nederlands</td>
                    <td>5,2</td>
                  </tr>
                  <tr>
                    <td>Engels</td>
                    <td>6,8</td>
                  </tr>
                  <tr>
                    <td>Rekenen</td>
                    <td>2,8</td>
                  </tr>
                  <tr>
                    <td>Burgerschap</td>
                    <td>4,0</td>
                  </tr>
                </table>
            </article>
        </section>
        <!--Footer-->
        <footer>
            <p>&#169 <script>writeDate();</script>, Lars van Alphen</p>
        </footer>
    </body>
</html>
