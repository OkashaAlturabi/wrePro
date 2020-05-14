<?php
include_once("database.php");

$mysqli = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
$mysqli->query('SET character_set_results=utf8');
$mysqli->query('SET names=utf8');
$mysqli->query('SET character_set_client=utf8');
$mysqli->query('SET character_set_connection=utf8');
$mysqli->query('SET character_set_results=utf8');
$mysqli->query('SET collation_connection=utf8_general_ci');
?> 