<?php

$host = "127.0.0.1";
$user = "root";
$password = "";
$db = "homework_lweb";

// Crea la connessione col server
$conn = new mysqli($host, $user, $password);

//Controllo sulla connessione
if($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Crea il database se non esiste già
$sql = "CREATE DATABASE IF NOT EXISTS $db";

if ($conn->query($sql) === FALSE) {
    echo "Errore nella creazione del database " . $conn->error;
}

// Seleziona il database con cui vogliamo operare
$conn->select_db($db);

//Crea la tabella utente se non esistente
//E' necessario mettere al campo id 'AUTO_INCREMENT' altrimenti inserito il secondo utente darebbe errore
//N.B. è essenziale porre l'accento grave ` al posto dell'apostrofo ' altrimenti darebbe errore -_-
$tab_utente = "CREATE TABLE IF NOT EXISTS `utente` (
    `id` int(11) NOT NULL AUTO_INCREMENT,               
    `username` varchar(30) NOT NULL,
    `email` varchar(50) NOT NULL,
    `password` varchar(30) NOT NULL,
    PRIMARY KEY (id)
)";

if ($conn->query($tab_utente) === FALSE) {
    echo "Errore nella creazione della tabella utente " . $conn->error;
}

//Crea la tabella recensione se non esistente
$tab_recensione = "CREATE TABLE IF NOT EXISTS `recensione`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `utente_ID` int(11) NOT NULL,
    `libro_ID` int(11) NOT NULL,
    `testo` varchar(800) NOT NULL,
    `voto` decimal(2,1) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (utente_ID) REFERENCES utente(id),
    FOREIGN KEY (libro_ID) REFERENCES libro(id)
)";

//Crea la tabella autore se non esistente
$tab_autore = "CREATE TABLE IF NOT EXISTS `autore` (
    `id` int(11) NOT NULL AUTO_INCREMENT,               
    `nome` varchar(30) NOT NULL,
    `cognome` varchar(30) NOT NULL,
    `nazionalita` varchar(30) NOT NULL,
    `data` date,
    PRIMARY KEY (id)
)";

if ($conn->query($tab_autore) === FALSE) {
    echo "Errore nella creazione della tabella autore " . $conn->error;
}

//Crea la tabella libro se non esistente
$tab_libro = "CREATE TABLE IF NOT EXISTS `libro`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `titolo` varchar(50) NOT NULL,
    `ISBN13` int(13) NOT NULL,
    `lunghezza` int(4) NOT NULL,
    `data_uscita` date NOT NULL,
    `immagine` varchar(1000) NOT NULL,
    `autore_ID` int(11),
    PRIMARY KEY (id),
    FOREIGN KEY (autore_ID) REFERENCES autore(id)
)";

if ($conn->query($tab_libro) === FALSE) {
    echo "Errore nella creazione della tabella libro " . $conn->error;
}


// Chiude la connessione al database
$conn->close();

?>