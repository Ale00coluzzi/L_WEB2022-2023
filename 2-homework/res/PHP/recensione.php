<?php

session_start();

require('connection.php');

$connessione = new mysqli($host, $user, $password, $db);

//real_escape_string() è una funzione usata per creare una stringa valida per SQL
$titolo = $connessione->real_escape_string($_POST['titolo']);
$voto = floatval($connessione->real_escape_string($_POST['voto'])); //converto la stringa in intero
$testo = $connessione->real_escape_string($_POST['testo']);

$controllo_id_utente = "SELECT u.id FROM utente u WHERE u.username='{$_SESSION['nome']}'"; 
$ris = mysqli_query($connessione, $controllo_id_utente);

if(mysqli_num_rows($ris) != 1){
    $_SESSION['errore-uu'] = 'true';
    header('Location:../../recensione.php'); //header sono l'analogo degli href
    exit(1);
}

$row = mysqli_fetch_assoc($ris);
$id_utente = $row['id'];

$controllo_id_libro = "SELECT l.id FROM libro l WHERE l.titolo = '$titolo'";
$ris_t = mysqli_query($connessione, $controllo_titolo);

if(mysqli_num_rows($ris_t) !=1){
    $_SESSION['errore_tt'] = 'true';
    header('Location:../../recensione.php');
    exit(1);
}

$row2 = mysqli_fetch_assoc($ris_t);
$id_utente = $row2['id'];


$sql = "INSERT INTO recensione (utente_ID, libro_ID, testo, voto ) VALUES ('$id_utente', '$id_libro', '$testo', '$voto')";
$ins = mysqli_query($connessione, $sql);

header('Location:../../homepage.php');

?>