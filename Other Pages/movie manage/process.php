<?php
include('connect.php');
if (isset($_POST["create"])) {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $ratings = mysqli_real_escape_string($conn, $_POST["ratings"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $time = mysqli_real_escape_string($conn, $_POST["time"]);
    $sqlInsert = "INSERT INTO movies(name , ratings , type , time) VALUES ('$name','$ratings','$type', '$time')";
    if(mysqli_query($conn,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "Movie Added Successfully!";
        header("Location:index.php");
    }else{
        die("Something went wrong");
    }
}
if (isset($_POST["edit"])) {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $ratings = mysqli_real_escape_string($conn, $_POST["ratings"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $time = mysqli_real_escape_string($conn, $_POST["time"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sqlUpdate = "UPDATE movies SET name = '$name', ratings = '$ratings', type = '$type', time = '$time' WHERE id='$id'";
    if(mysqli_query($conn,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Movie Updated Successfully!";
        header("Location:index.php");
    }else{
        die("Something went wrong");
    }
}
?>