<?php

$host = "127.0.0.1";
$user = "root";
$password = "";
$db = "homework_lweb";

//Crea la connessione con il server
$conn = new mysqli($db, $user, $password);

//controllo sulla connessione
if($conn-> connect_error) {
 
    //Crea il database se non esiste già 
$sql="CREATE DATABASE IF NOT EXISTS  $db";

if ($conn->quesry($sql)=== FALSE) {
echo "Errore nella creazione del databse: " . $conn->error;
}
//Crea la tabella utente
// è necessario mettere al campo id 'AUTO INCREMENT' altrimenti inserito il secondo utente darebbe errore
//N.B. è essenziale porre l'accento grave al posto dell'apostrofo 
$tab_utente= "CREATE  TABLE `utente`(
`id ` int(11) NOT NULL AUTO_INCREMENT,
`username` varchar(30) NOT NULL,
`email` varchar(50) NOT NULL,
`password` varchar(30) NOT NULL)";


if($conn->query($tab_utente) === FALSE) {
    echo "Errore nella creazione della tabella utente" . $conn->error;
}



//Crea tabella recenzione se non esiste
$tab_autore = " CREATE TABEL IF NOT EXISTS `recensione` (
    `id` int(11) NOT NULL AUTO_INCREMENT,  
    `utente_ID` int(11) NOT NULL,
    `libro_ID` int(11) NOT NULL,
    `testo` varchar(800) NOT NULL,
    `voto` decimal(2,1) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (utente_ID) REFERENCES utente(id),
    FOREIGN KEY (libro_ID)REFERENCES libro(id),
    )";


if($conn->query($tab_recensione) === FALSE) {
    echo "Errore nella creazione della tabella recensione" . $conn->error;
}

//Crea tabella autore se non esiste
$tab_autore = " CREATE TABEL IF NOT EXISTS `autore` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nome` varchar(30) NOT NULL,
    `cognome` varchar(30) NOT NULL,
    `nazionalità` varchar(30) NOT NULL,
    `data` date,
 PRIMARY KEY (id)
 )"; 

if($conn->query($tab_autore) === FALSE) {
    echo "Errore nella creazione della tabella autore" . $conn->error;
}

// Crea la tabella libro se non esiste
$tab_libro =" CREATE TABLE IF NOT EXISTS `libro` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `titolo` varchar(50) NOT NULL,
    `ISBN13` int(13) NOT NULL,
    `lunghezza` int (4) NOT NULL, 
    `data_uscita` date NOT NULL,
    `immagine` varchar(1000),
    `autore_ID` int(11),
    PRIMARY KEY (id)
    FOREIGN KEY (autore_ID) REFERENCES autore(id)
)";

if($conn->query($tab_utente) === FALSE) {
    echo "Errore nella creazione della tabella libro" . $conn->error;
}

//Chiude la connessione al databasae
$conn->close();





?>