<?php
	require_once 'app/init.php';

    $item = $_GET['item'];

    $sql = "UPDATE items SET done=1 WHERE id=$item";
    mysql_query($sql);

	header("Location: index.php");
?>