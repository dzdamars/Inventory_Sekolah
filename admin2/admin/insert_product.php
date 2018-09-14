
<?php

 include('./lib/dbcon.php'); 
 dbcon();

$image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //SQL Injection defence!
$image_name = addslashes($_FILES['image']['name']);
$sql = "INSERT INTO `stdevice` (`id`, `image`, `image_name`) VALUES ('1', '{$image}', '{$image_name}')";
if (!mysql_query($sql)) { // Error handling
    echo "Something went wrong! :("; 
}

?>