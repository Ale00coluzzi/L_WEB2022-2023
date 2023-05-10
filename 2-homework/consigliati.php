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
    <title>Perché è importante leggere... </title>
</head>

<body>
    <h1 class="titolo">I NOSTRI CONSIGLI!&#x1F4A1;</h1>

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
<h2> Il fotocane</h2>

<div class="grid">
   
    <div class="container-1">
    <table>
        
        <tr>             
          <th>Titolo originale</th>     <!-- intestazione-->
          <td>The sun dog</td>
        </tr>
      
        <tr>             
            <th>Nazionalità</th>        <!-- intestazione-->
            <td>Statunitense</td>
        </tr>
      
        <tr>             
            <th>Casa editrice</th>        <!-- intestazione-->
            <td>Pickwick</td>
        </tr>

        <tr>             
            <th>Scrittore</th>        <!-- intestazione-->
            <td>Stephen King</td>
        </tr>

        <tr>             
            <th>Genere</th>        <!-- intestazione-->
            <td>Horror</td>
        </tr>

        <tr>             
            <th>Lunghezza</th>        <!-- intestazione-->
            <td>211 pagine</td>
        </tr>

        <tr>             
            <th>Data di uscita</th>        <!-- intestazione-->
            <td>2018</td>
        </tr>

        <tr>             
            <th>Collana</th>        <!-- intestazione-->
            <td>Le quattro dopo mezzanotte</td>
        </tr>
        <tr>
            <th>ISBN-13</th>
            <td>978-8868364601</td>
        </tr>
        <tr>
          <th>Voto</th>
          <td>8.5</td>
        </tr>

    </table>
</div>

<div class ="container-2">
    <p>
        Semplicemente il libro che mi ha ravvicinato al mondo della lettura. Questo libro racconta la storia di Kevin, 
        il quale per il suo quindicesimo compleanno riceve in regalo una macchinetta fotografica, 
        fino a qui tutto normale no? Beh, ecco, peccato che quella macchinetta in realtà invece di fotografare il soggetto che si vuole immortalare 
        fotografa un cane a dir poco spaventoso che foto dopo foto si avvicina sempre di più e sembra quasi uscire dalla fotografia! Quindi come puoi immaginare
        è a dir poco spaventoso, da leggere rigorosamente dopo le quattro di notte come da titolo della collona di cui ne fa parte!
        <br/><br/>
        -Luca
    </p>
</div>

<div class ="container-3">
    <img src="res/IMG_GIF/copertina_cane.jpg" alt ="copertina_cane"/>
</div>
</div>

<hr/>
<h2>I fratelli Karamazov</h2>

<div class="grid">
   
    <div class="container-1">
    <table>
        
        <tr>             
          <th>Titolo originale</th>        <!-- intestazione-->
          <td>Братья Карамазовы</td>
        </tr>
      
        <tr>             
            <th>Nazionalità</th>        <!-- intestazione-->
            <td>Russa</td>
        </tr>
      
        <tr>             
            <th>Casa editrice</th>        <!-- intestazione-->
            <td>Feltrinelli</td>
        </tr>

        <tr>             
            <th>Scrittore</th>        <!-- intestazione-->
            <td>Fedor Dostoevskij</td>
        </tr>

        <tr>             
            <th>Genere</th>        <!-- intestazione-->
            <td>Romanzo Filosofico</td>
        </tr>

        <tr>             
            <th>Lunghezza</th>        <!-- intestazione-->
            <td>1114 pagine</td>
        </tr>

        <tr>             
            <th>Data di uscita</th>        <!-- intestazione-->
            <td>1879</td>
        </tr>

        <tr>             
            <th>Collana</th>        <!-- intestazione-->
            <td>No</td>
        </tr>
        <tr>
            <th>ISBN-13</th>
            <td>978-8807900792</td>
        </tr>
        <tr>
          <th>Voto</th>
          <td>9.5</td>
        </tr>
       
    </table>
</div>

<div class ="container-2">
    <p>
        Da leggere assolutamente. Per Dostoevskij, Hermann Hesse scriveva: "Egli ha quella conoscenza della felicità, della saggezza e dell'armonia, che però non si trovano lungo facili sentieri, ma lampeggiano a tratti lungo la via che costeggia l'abisso, che non si colgono sorridendo, ma solo tra lacrime ed esausti di dolore. (...) Ci sono dei punti in cui, da un mare di miseria e di squallore, si accende, commovente, infantile e delicato oltre ogni dire, qualcosa che è come l'intuizione del senso del mondo, come la certezza di una redenzione".
        Ed è infatti così che Dostoevskij riesce a descrivere i fratelli al lettore, in maniera profonda facendolo entrare all'interno della psicologia dei personaggi e delle vicende che li riguardano.
        <br/><br/>
    -Alessandra
    </p>
</div>

<div class ="container-3">
    <img src="res/IMG_GIF/copertina_dost.jpg" alt ="copertina_dost"/>
</div>
</div>

<hr/>
<h2>Spy x Family 1</h2>

<div class="grid">
   
    <div class="container-1">
    <table>
        
        <tr>             
          <th>Titolo originale</th>        <!-- intestazione-->
          <td>スパイファミリー</td>
        </tr>
      
        <tr>             
            <th>Nazionalità</th>        <!-- intestazione-->
            <td>Giapponese</td>
        </tr>
      
        <tr>             
            <th>Casa editrice</th>        <!-- intestazione-->
            <td>Planet Manga</td>
        </tr>

        <tr>             
            <th>Scrittore</th>        <!-- intestazione-->
            <td>Tatsuja Endo</td>
        </tr>

        <tr>             
            <th>Genere</th>        <!-- intestazione-->
            <td>Commedia</td>
        </tr>

        <tr>             
            <th>Lunghezza</th>        <!-- intestazione-->
            <td>216 pagine</td>
        </tr>

        <tr>             
            <th>Data di uscita</th>        <!-- intestazione-->
            <td>2019</td>
        </tr>

        <tr>             
            <th>Collana</th>        <!-- intestazione-->
            <td>Spy x Family</td>
        </tr>
        <tr>
            <th>ISBN-13</th>
            <td>978-8418271236</td>
        </tr>
        <tr>
          <th>Voto</th>
          <td>9.5</td>
        </tr>
       
    </table>
</div>

<div class ="container-2">
    <p>Pensavo fosse un manga passeggero, uno dei tanti, ed invece questo fumetto mi ha davvero conquistato! Esso racconta la storia di una spia, Twilight, che per compiere la sua
        missione si ritrova costretto ad inscenare una falsa famiglia insieme ad una moglie assassina e ad una figlia telepate! Il bello di questa strana famiglia è che nessuno dei membri
        conosce la vera identità dell'altro ed è proprio questo il punto focale del manga, cioè che alla fine della fiera nessuno conosce davvero chi gli sta accanto. La storia dei protagonisti
        è poi condita con scene comiche al limite del surreale rendendo quindi l'opera a tratti molto leggera ma a tratti molto profonda e riflessiva. Estremamente consigliato!
        <br/><br/>
    -Luca
</p>
</div>

<div class ="container-3">
    <img src="res/IMG_GIF/copertina_spy.jpg" alt="copertina_spy"/>
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