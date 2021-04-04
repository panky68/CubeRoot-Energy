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
            $header = 'EV Charging';
            include 'includes/other_pg_banner.php'; 
        ?>

        <!-- CONTENTS -->
        <section class="main_contents">
            <div class="contents">
                <div class="section-header">
                    <h1><?php echo $header; ?></h1>
                </div>
                <p class="content_text">We offer a range of OLEV compliant home and business SMART chargers from Rolec and Myenergi. Both companies design and manufacture their product in Britain and therefore benefit from excellent post sales customer and technical support. The products support Mode 3 charging speeds,  Mobile App controlled SMART charging and are available with a range of tethered or untethered lead options.</p><br>
                <div class="ev_content_wrapper">
                    <div class="ev_content">
                        <h1 class="ev_content_header">Rolec</h1>
                        <img src='images/rolec/rolec.jpg' alt="" class="ev_img1 ev_img content_image"><br><br>
                        <form action="https://midsummerwholesale.co.uk/pdfs/evhsdatasheet.pdf" target="_blank">
                            <button class="ev_links" type="submit">Specification</button>
                        </form>
                    </div>
                    <div class="ev_content">
                        <h1 class="ev_content_header">myEnergi</h1>
                        <img src='images/myEnergy.png' alt="" class="ev_img2 ev_img content_image"><br><br>
                        <form action="images/zappi/Zappi_Datasheet.pdf" target="_blank">
                            <button class="ev_links" type="submit">Specification</button>
                        </form>
                    </div>
                </div>
                <br><br><br><br>
                <p class="content_text">This is a recent installation of a 32kW myEnergi zappi charger to support our clients new BMW i3.</p>
                <br>
                <img src="images/ev_chargers_1.jpg" class="ev_img content_image" alt="">
            </div>
            <?php include 'includes/form.php'; ?>
        </section>

        <!-- Footer -->
        <?php include 'includes/footer.php'; ?>