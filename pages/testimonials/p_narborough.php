<?php
    $style_sheet = 'other_pg'; 
    include '../../includes/header.php'; 
?>

<body>
    <?php ob_start(); ?>
    <div class="container">
        <!-- NAVBAR -->
        <?php include '../../includes/menu.php'; ?>
        <!-- HEADER -->
        <?php 
        $header = '';
        include '../../includes/other_pg_banner.php'; 
        ?>

        <!-- CONTENTS -->
        <section class="main_contents">
            <div class="contents">
                <img src="../../images/testimonial_img15.jpg" class="content_image" alt=""><br><br><br>
                <p class="content_text">'Realising that the rate of return on a Solar PV installation would far exceed the current 0.5% interest rate paid on my savings account I decided to explore the market and seek out an installer. One installer provided a written quote via email without surveying the site, another very well known Leicester plumbing/Solar installation company didn’t bother to call me back and then there was Cuberoot, a company with an excellent website and some very satisfied customers based on the testimonials that I read. A telephone call resulted in a visit from Bob who talked through the best options for my requirements, provided a comprehensive analysis of potential cost savings and a very reasonable estimate of the cost. Solar PV installation took place in October with the Tesla battery following in January. Bob and Mark worked safely with great care and attention to detail ensuring that disruption was kept to a minimum. They also managed to hide a steel armoured cable underneath block paving which when refitted by Mark looked as good as the day it was originally fitted - an absolutely brilliant job. An excellent and friendly professional service from a business that I would thoroughly recommend. '</p><br><br>
                <p class="content_text">'Again many thanks to yourself and Mark for your stellar efforts installing my system and I couldn’t be happier. I’ve thoroughly enjoyed the experience and learned a lot.'</p><br><br>
              </div>
            <?php include '../../includes/form.php'; ?>
        </section>

        <!-- Footer -->
        <?php include '../../includes/footer.php'; ?>