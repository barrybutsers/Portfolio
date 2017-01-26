<?php
include "../PHP/Functions.php";
$knownUsername = "henki";
$knownPassword = "admin1234";
$errorMessage = "";
session_start();
if(isset($_POST['username']) && isset($_POST['password'])){
    if($knownUsername == $_POST['username']){
        if($knownPassword == $_POST['password']){
            $_SESSION['loggedIn'] = TRUE;
            header("location: Cijferlijst.php");
        }
        else{
            $errorMessage = "U heeft een niet bestaand wachtwoord opgegeven";
        }
    }
    else{
        $errorMessage = "U heeft een niet bestaande username opgegeven";
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
            Log in
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
            <h1>Portfolio</h1>
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
                <h2>Inloggen</h2>
                <p>U bent genoodzaakt in te loggen wilt u deze pagina bekijken.</p>
                <!--Inlogformulier-->
                <form method="post" action="Inlog.php">
                    <p><?php echo $errorMessage ?></p>
                    <label>Username: </label>
                    <input type="text" name="username">
                    <br>
                    <label>Password: </label>
                    <input type="password" name="password">
                    <br>
                    <input id="submit   " type="submit" name="Inlog">
                </form>
            </article>
        </section>
        <!--Footer-->
        <footer>
            <p>&#169 <script>writeDate();</script>, Lars van Alphen</p>
        </footer>
    </body>
</html>