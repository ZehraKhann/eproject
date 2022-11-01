<?php

if (isset($_POST['sub']))
{
    $com = $_POST['com'];
    $rating = $_POST["rating"];
 
    include 'config.php';
    $sql = "INSERT INTO rate (rate,comment) VALUES ('$rating','$com')";
    $result = mysqli_query($conn , $sql) or die ("Query Unsuccessful");
    header("Location: song.php");
    mysqli_close($conn);
}
?>