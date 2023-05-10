<?php
    session_start();

    if(isset($_COOKIE["tema"]) && $_COOKIE["tema"] == "scuro"){
        echo "<link rel=\"stylesheet\" href=\"res/CSS/external_lib_dark.css\" type=\"text/css\" />";
    }
    else{
        echo "<link rel=\"stylesheet\" href=\"res/CSS/external_lib.css\" type=\"text/css\" />";
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>La casa del libro: recensioni, letture... </title>
</head>

<body>
    <h1 class="titolo">INSERISCI LIBRO</h1>
<?php
    if(isset($_COOKIE["tema"]) && $_COOKIE["tema"] == "scuro"){
        echo "</ class=\"home\">";
        echo"<a href =\"homepage.php\"><img src = \"res/IMG_GIF/home2.png\" alt=\"home.png\" width=\"10%\"/></a>";
        echo"</div>";

    }
    else{
        echo "</ class=\"home\">";
        echo"<a href =\"homepage.php\"><img src = \"res/IMG_GIF/home.png\" alt=\"home.png\" width=\"10%\"/></a>";
        echo"</div>";
    }
?>  

<div class="container">
    
    <?php //serve a verificare se l'ISBN è già stato inserito
                if(isset($_SESSION['errore']) && $_SESSION['errore'] == 'true'){//isset verifica se errore è settata
                    echo "<h3>ISBN GIÀ INSERITO!</h3>";
                    unset($_SESSION['errore']);//la unsetto altrimenti rimarrebbe la scritta
                }
                if(isset($_SESSION['errore_t']) && $_SESSION['errore'] == 'true'){//isset verifica se errore è settata
                    echo "<h3>TITOLO GIÀ INSERITO!</h3>";
                    unset($_SESSION['errore_t']);//la unsetto altrimenti rimarrebbe la scritta
                }
    ?>  

    <form action = "res/PHP/inserisci_libro.php" method="POST">

        <label for="titolo">Titolo</label>
        <input type="text" name="username" id="username" required>

        <label for="ISBN">ISBN-13</label>
        <input type="text" pattern="[0-9]{13}" maxlength="13" name="numero" id="numero" required>
        
        <label for="lunghezza">Numero Pagine</label>
        <input type="text" pattern="[0-9]{1,4}" maxlength="4" name="lunghezza" id="lunghezza" required>
        
        <label for="data">Data di uscita</label>
        <input type="date" name="data" id="data" required>

        <label for="autore">Autore</label>
        <input type="text" name="autore" id="autore" required>
        
        <label for="img">Inserisci la copertina del libro</label>
        <input type="file" name="img" id="img">


        <span class ="bottone"><input type="submit" value="Invia">
        </span>

        
    </form>
</div>
        
<hr/>
<div class="crediti">
    <p>Responsabili del sito: 
    <a href="mailto:privitera.1938225@studenti.uniroma1.it">privitera.1938225@studenti.uniroma1.it</a>    
    <a href="mailto:coluzzi.1912970@studenti.uniroma1.it">coluzzi.1912970@studenti.uniroma1.it</a>    
    </p>
</div>

</body>
</html>