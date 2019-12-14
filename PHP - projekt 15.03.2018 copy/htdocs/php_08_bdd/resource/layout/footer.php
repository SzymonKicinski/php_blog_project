<div  id="footer-content">

    <section class="newsletter">
        <div id="newsletter" class="container">
            <h3 class="headline-3"><span class="primary-text">Subscribe our</span>
                <span class="secondary-text">Newsletter</span></h3>
            <p class="paragraph">Subscribe, we will send you our weekly hot offers</p>
            <form class="subscribe" action="scripts/newsletter/add.php" method="post">
                <input class="subscribe-field" type="text" name="author"
                       placeholder="Enter your Name" required>
                <input type="hidden" name="post_id" value="<?php echo $_GET['id']; ?>">
                <input class="subscribe-field" type="email" name="email"
                       placeholder="Enter your Email" required>
                <input type="submit" class="btn" value="Send us"/>
            </form>
        </div>
        <?php

        if (isset($_GET['status']) && $_GET['status'] == "errorNews") {
            echo '<div class="alert alert-danger" role="alert">Email nie został dodany do bazy newslettera.</div>';
        }

        if (isset($_GET['status']) && $_GET['status'] == "okNews") {
            echo '<div class="alert alert-success" role="alert">Dziękujemy, Twój email został 
                    dodany do bazy newslettera.</div>';
        }

        ?>
    </section>
    <div class="foot-menu" id="contac_us">
        <nav class="foot-nav" >
            <section class="column">
                <h4 class="headline-4">Company</h4>
                <ul class="list">
                    <li class="menu-item"> <a href="#home" class="link">Home</a> </li>
                    <li class="menu-item"> <a href="#about-us" class="link">About us</a> </li>
                    <li class="menu-item"> <a href="#services" class="link">Services</a> </li>
                    <li class="menu-item"> <a href="#footer" class="link">Contact us</a> </li>
                </ul>
            </section>
            <section class="column">
                <h4 class="headline-4">Quick links</h4>
                <ul class="list">
                    <li> <a href="" class="link">Designers</a> </li>
                    <li> <a href="" class="link">Pricing plan</a> </li>
                    <li> <a href="" class="link">Services</a> </li>
                    <li> <a href="" class="link">Download</a> </li>
                </ul>
            </section>
            <section class="column">
                <h4 class="headline-4">Conditions</h4>
                <ul class="list">
                    <li> <a href="" class="link">Online support</a> </li>
                    <li> <a href="" class="link">Privacy</a> </li>
                    <li> <a href="" class="link">Terms</a> </li>
                    <li> <a href="" class="link">Policy</a> </li>
                </ul>
            </section>
            <section class="column get-connected">
                <h4 class="headline-4">Get connected</h4>
                <ul class="socials list">
                    <li class="list-item"> <a href="" class="icon icon-facebook"></a> </li>
                    <li class="list-item"> <a href="" class="icon icon-twitter"></a> </li>
                    <li class="list-item"> <a href="" class="icon icon-gplus"></a> </li>
                </ul>
                <div class="contact">
                    <a href="tel:1234567890" class="link tb-tel">
                        <i class="icon icon-phone"></i>
                        123 456 7890
                    </a>
                    <a href="mailto:sampel@name.com" class="link tb-mail">
                        <i class="icon icon-mail"></i>
                        sampel@name.com
                    </a>
                </div>
            </section>
        </nav>
    </div>
</div>
