<?php
    $mysql_hostname = "127.0.0.1";
    $mysql_username = "root";
    $mysql_password = "root";
    $mysql_database = "Todo_db";
    $db = mysql_connect($mysql_hostname, $mysql_username, $mysql_password) or die("something is broken");
    mysql_select_db($mysql_database, $db) or die("could not find database");
?>