<?php
//starta session
session_start();

//definera variablerna för att ansluta till databas
define('DB_USER','xxx');
define('DB_PASSWORD','xxx');
define('DB_HOST','xxx');
define('DB_NAME','xxx');

// Ansluter till databasen med variablerna
// eller om det inte går att ansluta - printa "No DB-connection!" och sedan avsluta script
$db_conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('No DB-connection!');

//sätter charset...
mysqli_set_charset($db_conn, "utf8");

?>
