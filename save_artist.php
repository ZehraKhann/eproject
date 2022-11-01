<?php

if(isset($_POST['add'])){
    $artist_name = $_POST['artist_name'];
    
    include 'config.php';
        $sql = "INSERT INTO artist(artist_name) VALUES ('{$artist_name}')";
        $result = mysqli_query($conn , $sql) or die ("Query Unsuccessful");
    
       header("Location: artist.php");
        mysqli_close($conn);
}



?>