<?php session_start();
mysql_connect("localhost","root","xxxx") or die(mysql_error()."Nie mozna polaczyc sie z baza danych. Prosze chwile odczekac i sprobowac ponownie.");
mysql_select_db("ts3website") or die(mysql_error()."Nie mozna wybrac bazy danych.");
?>
