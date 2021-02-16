<?php
$mysqli = new mysqli('remotemysql.com', 'mro3iqr4Up', 'R4CYCBu7F1', 'mro3iqr4Up') or die(mysqli_error($mysqli));
//$mysqli = new mysqli('localhost', 'root', 'Yes', 'crud') or die(mysqli_error($mysqli));

if(isset($POST['save'])){
    $name = $POST['name'];
    $location = $POST['location'];

    $mysqli->query("INSERT INTO crud (name, location) VALUES('$name', '$location')") or 
            die($mysqli->error);
}

