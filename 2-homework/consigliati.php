<?php
    session_start();

    if(isset($_COOKIE["tema"]) && $_COOKIE["tema"] == "scuro"){
        echo "<link rel=\"stylesheet\" href=\"res/CSS/external_con_dark.css\" type=\"text/css\" />";
    }

    else{
        echo "<link rel=\"stylesheet\" href=\"res/CSS/external_con.css\" type=\"text/css\" />";
    }
    /*<?xml version = "1.0" encoding="UTF-8"?>*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Recensioni... </title>
</head>

<body>
    <h1 class="titolo">RECENSIONI!&#x1F4A1;</h1>

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

<div class="grid">
    <?php
        require("res/PHP/connection.php");

        $connessione = new mysqli($host, $user, $password, $db);

        // Query per selezionare tutti i record dalla tabella
        $query_recensione = "SELECT * FROM recensione";

        // Esegui la query
        $ris_rec = mysqli_query($connessione, $query_recensione);

        $query_libro = "SELECT l.titolo, l.ISBN13, l.lunghezza, l.autore, l.data_uscita FROM libro";
        $ris_lib = mysqli_query($connessione, $query_libro);

        $query_utente = "SELECT * FROM utente";
        $ris_ute = mysqli_query($connessione, $query_utente);

        echo"<div class=\"container-1\">"
        
        if (mysqli_num_rows($ris_lib) > 0) {
            for ($i = 1; $i <= 5; $i++) {
                // Seleziona il record successivo
                $row = mysqli_fetch_assoc($ris_lib);
    
                // Stampa i dati del record
                echo "Campo1: " . $row["campo1"] . "<br>";
                echo "Campo2: " . $row["campo2"] . "<br>";
                echo "Campo3: " . $row["campo3"] . "<br>";
                echo "<br>";
            }
        } else {
            echo "Nessun record trovato nella tabella.";
        }
        } 
        else {
            echo "Nessun record trovato nella tabella.";
        }

        echo"</div>"

    mysqli_close($connessione);
    ?>

</div>
    
<h2><br/>Novecento</h2>

<div class="grid">
   
    <div class="container-1">
    <table>

        <tr>             
          <th>Titolo originale</th>        <!-- intestazione-->
          <td>---</td>
        </tr>
      
        <tr>             
            <th>Nazionalità</th>        <!-- intestazione-->
            <td>italiana</td>
        </tr>
      
        <tr>             
            <th>Casa editrice</th>        <!-- intestazione-->
            <td>Feltrinelli</td>
        </tr>

        <tr>             
            <th>Scrittore</th>        <!-- intestazione-->
            <td>Alessandro Baricco</td>
        </tr>

        <tr>             
            <th>Genere</th>        <!-- intestazione-->
            <td>monologo</td>
        </tr>

        <tr>             
            <th>Lunghezza</th>        <!-- intestazione-->
            <td>62 pagine</td>
        </tr>

        <tr>             
            <th>Data di uscita</th>        <!-- intestazione-->
            <td>1994</td>
        </tr>

        <tr>             
            <th>Collana</th>        <!-- intestazione-->
            <td>No</td>
        </tr>
        <tr>
            <th>ISBN-13</th>
            <td>978-3455000955</td>
        </tr>
        <tr>
          <th>Voto</th>
          <td>9</td>
        </tr>

    </table>
</div>

<div class ="container-2">
    <p>È il monologo "del più grande pianista che abbia mai suonato sull'Oceano", nato, vissuto e morto a bordo del piroscafo Virginian. Un uomo che non ha mai messo piede sulla terraferma.
        "La terra, quella è una nave troppo grande per me. È un viaggio troppo lungo. È una donna troppo bella. È un profumo troppo forte. È una musica che non so suonare. Perdonatemi. Ma io non scenderò. Lasciatemi tornare indietro.
        Per favore."
        Come tutte le storie di Baricco, anche questa è riuscita a catapultarmi all'interno della trama, come se stessi assistendo con i miei occhi e le mie orecchie agli spettacoli di Danny Boodman T.D. Lemon.
        Libro super consigliato! <br/><br/>
        -Alessandra</p>
</div>

    <div class ="container-3">
        <img src="res/IMG_GIF/copertina_900.jpg" alt ="copertina_900"/>
    </div>
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