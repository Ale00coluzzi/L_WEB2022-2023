<?php

$connessione=mysqli_connect('locvalhost','utente', 'pass','nome database')
if($connessione){
	echo"sei connesso";
}
?>

<?php

$avviso="";

if(isset($_POST['submit'])){   //configurazione di POST
	//campi del form
	$nome=$_POST['nome'];  
	$cognome=$_POST['cognome'];
	$mail=$_POST['email'];
	//validazione dei campi che non vogliamo rimangano vuoti
	if(!empty($nome)&& !empty($scognome)&& !empty($mail){
	
	$query="INSERT INTO utenti(nome,cognome, e-mail) VALUES('{$nome}','{$cognome}','{$mail}')"; //in questo modo abbiamo impostato ciò che ci serve per mandare i dati nel database, perchè vengano immmagazzinati 
	
	//imposto la connessione
	$creaUtenti=mysqli_query($connessione, $query);
	
	if(!$creaUtenti){
	die('Quesry fallita'.mysqli_error($connessione));	
	}
	$avviso="Dati registrati con successo";
	//echo$avviso;
	} 
	else{
		$avviso="i campi non devono essere vuoti";
		//echo $avviso;
		}
	
}
?>


// <!DOCTYPE html> 

<h4><?php echo $avviso;?></h4>