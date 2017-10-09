<!DOCTYPE html>
<html>
    <head>
        <title>Book club</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css"/>
<!--    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">-->
    </head>
    
    <body>
        <div id="pagecontainer">
            <header>
<div class="header">
    <a href="index.php">
        <img src="pictures/Library1.png" class="headerimg">
        <h1 class="header">BOOK CLUB</h1>
    </a>
</div>
<nav>
    <ul class="navigation">
        <li><a class="<?php echo($current_page == 'index.php'|| $current_page== "" ) ? 'active' : NULL?>" href="index.php"> Home </a></li>
        <li><a class="<?php echo($current_page == 'aboutus.php') ? 'active' : NULL?>" href="aboutus.php"> About Us</a></li>
        <li><a class="<?php echo($current_page == 'browsebook.php') ? 'active' : NULL?>" href="browsebook.php">Browse Books</a></li>
        <li><a class="<?php echo($current_page == 'mybook.php') ? 'active' : NULL?>" href="mybook.php">My Books</a></li>
        <li><a class="<?php echo($current_page == 'gallery.php') ? 'active' : NULL?>" href="gallery.php">Gallery</a></li>
        <li><a class="<?php echo($current_page == 'contacts.php') ? 'active' : NULL?>" href="contacts.php">Contacts</a></li>
     </ul>
</nav>
</header> 