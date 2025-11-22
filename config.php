<?php
$DB_HOST='localhost'; $DB_USER='root'; $DB_PASS=''; $DB_NAME='virtual_library';
$mysqli = new mysqli($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
if ($mysqli->connect_errno) die('DB connect error: '.$mysqli->connect_error);
function esc($s){return htmlspecialchars($s,ENT_QUOTES,'UTF-8');}
?>