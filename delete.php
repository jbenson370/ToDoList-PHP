<?php
	require_once 'app/init.php';

    $item = $_GET['item'];

    $sql = "DELETE FROM items WHERE id=$item";
    mysql_query($sql);

	header("Location: index.php");
?>