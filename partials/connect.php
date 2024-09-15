<?php
$con = new mysqli('localhost', 'root', '2005', 'stories'); 
if (!$con) {
    die(mysqli_error($con));
}
?>
