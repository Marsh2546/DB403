<?php
session_start();
require 'connect.php';
$image = null;
if($_FILES['image']['name']){
    $target_file = $_SESSION['USER']['studentID']
    .'.'
    .pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
    if (move_uploaded_file($_FILES["image"]["tmp_name"], "image/$target_file")) {
        $image = $target_file;
        }
}
$sql = "UPDATE student
         SET studentName='{$_POST['studentName']}', majorID='{$_POST['majorID']}'"
         .($image?", image='$image'":'')
         ." WHERE studentID='{$_SESSION['USER']['studentID']}'";
 $conn->query($sql);
 $conn->close();
 header('location:profile.php');
