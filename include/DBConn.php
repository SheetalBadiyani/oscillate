<?php
$link = mysql_connect('localhost', 'oscillat_oscilla', '%tT!#^D5aS8d');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("oscillat_oscillat",$link);

?>
