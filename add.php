<?php
	require_once 'app/init.php';

    $currentUserID = 1;

    $name = trim($_POST['name']);
    $name = mysql_real_escape_string($name);

    $sql = "INSERT INTO items (name, user, done, created) VALUES ('$name', 1, 0, '2016-10-14 00:00:00')";
    mysql_query($sql);

	header("Location: index.php");
?>