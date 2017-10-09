<?php 
    include ("config.php"); 
    include ("header.php");

    include ("SQLInjection.php");
    
    $pictures = scandir("uploadedfiles/");//saves filenames in $pictures array

    foreach ($pictures as $aPictureOfThePicturesArray){
        echo "<br> <img class='displayImg' src='uploadedfiles/$aPictureOfThePicturesArray'/>";
    }

    include ("footer.php");
?>