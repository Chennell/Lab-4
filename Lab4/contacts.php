<?php include ("config.php");?>

               <?php include ("header.php");?>

<!-------The contact form------------->
            <div class="content">
                <h2>Contact us</h2>
                <div class="contactForm">
                    <form action="" method="" enctype="">
                        <p class="contactP">Name</p>
                        <input name="name" type="text" size="40"/>
                        <p class="contactP">Email</p>
                        <input name="Email" type="text" size="40"/>
                        <p class="contactP">Message</p>
                        <textarea name="Message" rows="7" cols="38"></textarea>
                        <input type="submit" value="Send" class="searchButton"/>
                        <!--https://www.123contactform.com/simple-php-contact-form.html?pagetype=htmlandingpages-->
                    </form>
                </div>
                <div class="call">
                    <div class="info">
                        <img src="pictures/phone.png" class="iconPic">
                        <p>070-733 33 33</p>
                    </div>
                    <div class="info">
<!--                        <i class="fa fa-facebook" aria-hidden="true"></i>-->
                        <p>Book club</p>
                    </div>
                    <div class="info">
                        <img src="pictures/instagram.png" class="iconPic">
                        <p>Book Club</p>
                    </div>
                </div>
            </div>
        <?php include ("footer.php");?>