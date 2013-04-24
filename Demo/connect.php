<?php
$server="localhost";
$user="Emms94";
$password="cuteemms94";
$database="inloggning";

$link = mysql_connect($server, $user, $password);
if (!$link) {
    echo '<strong> Could not connect: ' . mysql_error() . '</strong>';
}
else {
    $db_selected = mysql_select_db($database);
    if(!$db_selected) {
        echo '<strong> Could not select database: ' . mysql_error() . ' </strong>';
    }
}
?>