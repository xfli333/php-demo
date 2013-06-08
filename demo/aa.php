<?php
$con = mysql_connect("127.0.0.1","admin","admin");
if (!$con)
{
    die("aa" . 'Could not connect: ' . mysql_error());
}

// some code

?>