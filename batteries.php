<?php
    $style_sheet = 'other_pg'; 
    include 'includes/header.php'; 
?>

<body>
    <?php ob_start(); ?>
    <div class="container">
        <!-- NAVBAR -->
        <?php include 'includes/menu.php'; ?>
        <!-- HEADER -->
        <?php 
        $header = 'Batteries';
        include 'includes/other_pg_banner.php'; 
        ?>

         <!-- CONTENTS -->
        <section class="main_contents">
            <div class="contents">
                <div class="section-header">
                    <h1><?php echo $header; ?></h1>
                </div>
                <p class="content_text">We offer home battery systems from <a href="https://www.originenergy.com.au/content/dam/origin/residential/solar/Tesla%20Powerwall%202%20Brochure.pdf" class="content_link" target="_blank">Tesla</a>, <a href="images/enphase/brochure.pdf" class="content_link" target="_blank">Enphase</a> (<a href="images/enphase/Encharge-10-DS-EN-US.pdf" class="content_link" target="_blank">Datasheet</a>) and <a href="images/powervault/Powervault3-TechSpecs-A5x2_v8.pdf" class="content_link" target="_blank">Powervault</a>. If you have PV installed these batteries can be an ideal upgrade to your PV system, particularly, if you are not getting the FIT. Battery capacity ranges from 3 - 13.5kWh from a number of blue chip and startup manufacturers. Most come with internet management capabilities via apps on phones and PC’s but some can also support grid sharing and maintenance of power during grid outages.</p><br>
                <br>
                <img src='images/batteries_1.jpg' alt="" class="content_image"><br><br>
                <br>
                <p class="content_text">This is one of our recent Battery installations. it’s based on two Tesla Powerwall 2 batteries with a combined capacity of 27kWh. The smart charging capability maximises charging from the client’s 8kW PV system.</p>
            </div>
            <?php include 'includes/form.php'; ?>
        </section>

        <!-- Footer -->
        <?php include 'includes/footer.php'; ?>