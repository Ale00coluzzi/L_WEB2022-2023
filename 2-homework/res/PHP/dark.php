<?php
session_start();
//Creazione del cookie preferenze utente senza valore
$nome_cookie="tema"; //il nome del cookie è univoco
$durata_cookie= time()+(86400*2);
setcookie("tema", '', $durata_cookie, '/'); // settando il cookie sarà accessibile nell'intero sito

if(isset($_POST['bottone_c'])){
    $tema =$_POST['bottone_c'];
    setcookie("tema", $tema, $durata_cookie, '/');
    header('Location:../../homepage.php'); //header sono l'analogo degli href
    exit(1);
}

else if(isset($_POST['bottone_s'])){
    $tema=$_POST['bottone_s'];
    setcookie("tema", $tema, $durata_cookie, '/');
    header('Location:../../homepage.php'); //header sono l'analogo degli href
    exit(1);
}
   
?>