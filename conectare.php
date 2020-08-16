<?php
	$adresa="localhost";
	$user="root";
	$pass="";
	$numeBD="magazin_online";
	$conexiune=mysql_connect($adresa,$user,$pass)
		or die ("Eroare de conectare la baza de date");
	$baza_date = mysql_select_db("$numeBD") or die ("Eroare conectare la baza de date!");
	
	
	
?>