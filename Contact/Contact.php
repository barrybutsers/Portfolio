<!--
Opdracht:       Portfolio
Auteur:         Lars van Alphen
Aanmaakdatum:   <startdatum + tijd>
Bestandsnaam:   Contact.html
-->
<!DOCTYPE HTML>
<html>
    <head>
        <title>
            Contact
        </title>
        <meta name="description" content="contact informatie">
        <meta name="keywords" content="contact, informatie">
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
            <h1>Contact</h1>
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
                <!--Contact formulier-->
                <h2>Contact formulier</h2>
                <form method="post" action="Contact.php">
                    <label>Naam:</label>
                    <input type="text">
                    <br>
                    <label>E-mailadres:</label>
                    <input type="email">
                    <br>
                    <label>Geslacht:</label>
                    <select>
                        <option value="Man">Man</option>
                        <option value="Vrouw">Vrouw</option>
                    </select>
                    <br>
                    <label>Bericht / Vraag:</label>
                    <select>
                        <option value="Bericht">Bericht</option>
                        <option value="Vraag">Vraag</option>
                    </select>
                    <br>
                    <label>Onderwerp:</label>
                    <input type="text" value="Onderwerp" name="Subject">
                    <br>
                    <textarea name="Text">Bericht/Vraag...</textarea>
                    <br>
                    <button type="submit">Verzenden</button>
                </form>
                <?php
                    
                    include "../PHP/Functions.php";
                    $Mail['to'] = 'Larsvanalphen@outlook.com'; 
                    $Mail['subject'] = $_POST['Subject']; 
                    $Mail['body'] = $_POST['Text']; 

                    sendEmail($Mail);
                ?>
            </article>
        </section>
        <!--Footer-->
        <footer>
            <p>&#169 <script>writeDate();</script>, Lars van Alphen</p>
        </footer>
    </body>
</html>