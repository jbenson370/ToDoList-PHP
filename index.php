
<?php
    require_once 'app/init.php';

    $currentUserID = 1;

    $sql="SELECT * FROM items WHERE user = 1 ";
    $records=mysql_query($sql);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="UTF-8">
    	<title>To Do</title>

    	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    	<link href="http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">

    	<link href="css/main.css" rel="stylesheet">

    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    	<div class="list">
    		<h1 class="header">To do.</h1>
    		<ul class="items">
                <?php
                    while($item=mysql_fetch_assoc($records)){
                        echo "<li>";
                        echo "<span class='item ";
                        if ($item['done'] == 1){
                            echo "done";
                        }
                        echo "'>";
                        echo $item['name'];
                        echo "</span>";
                        if ($item['done'] == 0){
                            echo "<a href='";
                            echo "mark.php?as=done&item=";
                            echo $item['id'];
                            echo "' class='done-button'>Mark as Done</a>";
                            echo "<a href='";
                            echo "delete.php?as=done&item=";
                            echo $item['id'];
                            echo "' class='delete-button'>Delete</a>";
                        }
                        if ($item['done'] == 1){
                            echo "<a href='";
                            echo "unmark.php?as=done&item=";
                            echo $item['id'];
                            echo "' class='done-button'>Mark Incomplete</a>";
                            echo "<a href='";
                            echo "delete.php?as=done&item=";
                            echo $item['id'];
                            echo "' class='delete-button'>Delete</a>";
                        }
                        echo "</li>";
                    }
                ?>
    		</ul>
    		<form class="item-add" action="add.php" method="POST">
    			<input type="text" name="name" placeholder="Enter new item here." class="input autocomplete=off" required>
    			<input type="submit" value="Add" class="submit">
    		</form>
    	</div>
    </body>
</html>


