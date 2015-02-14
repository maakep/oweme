<?php
//starta session
session_start();

//definera variablerna för att ansluta till databas
define('DB_USER','hajkep_se');
define('DB_PASSWORD','7FZeKjjn');
define('DB_HOST','hajkep.se.mysql');
define('DB_NAME','hajkep_se');

// Ansluter till databasen med variablerna
// eller om det inte går att ansluta - printa "No DB-connection!" och sedan avsluta script
$db_conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('No DB-connection!');

//sätter charset...
mysqli_set_charset($db_conn, "utf8");

?>