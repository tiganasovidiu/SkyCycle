<?php
	require_once("conectare.php");
	
	$sql = "INSERT INTO comenzi VALUES ('".$_POST['nume']."' , '".$_POST['prenume']."' , '".$_POST['judet']."' , '".$_POST['localitate']."' ,
				'".$_POST['strada']."' , '".$_POST['nrs']."' , '".$_POST['tel']."' , '".$_POST['mail']."' , ".$_POST['cod'].")";
	
	$rezultat = mysql_query($sql);
	echo "Formularul a fost trimis cu succes!"
	
?>