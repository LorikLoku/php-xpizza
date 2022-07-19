<?php
$db = mysqli_connect('localhost', 'root', '');
if (!$db){
    die("Database connection Failed" . mysqli_error($db));
}
$select_db = mysqli_select_db($db, 'web_db');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($db));
}