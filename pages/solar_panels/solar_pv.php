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
        $header = 'Solar Photovoltaic';
        include '../../includes/other_pg_banner.php'; 
        ?>

        <!-- CONTENTS -->
        <section class="main_contents">
            <div class="contents">
                <div class="section-header">
                    <h1><?php echo $header; ?></h1>
                </div>
                <h1 class="content_header">Introduction</h1><br>
                <p class="content_text">Photovoltaic power generation employs solar panels comprising a number of cells containing a photovoltaic material. Light falling on the panels produce electricity. This is fed into the household electricity system for use within the house, or exported to the grid.</p><br><br>
                <img src="../../images/cr_pv1.jpg" alt="" class="content_image"><br><br>
                <h1 class="content_header">Payback and Feed in Tariff (FIT)</h1><br>
                <p class="content_text">Currently no FIT tariff can be claimed against new PV installations. The government is considering a Smart Export Guarantee (SEG) payment in the future for those with version 2 smart meters. However, if the electricity generated is used internally it saves 15-20p for each kWh it replaces.</p><br><br>
                <p class="content_text">An average installation costs £5000 for a 4kWp system and produces approximately 3700kWh/year (due South). If you use 100% of the electricity produced then you will save around £500 per year. If you assume that electricity will rise by 3% per year you get a 9 year payback of initial capital.</p><br><br>
                <p class="content_text">We only install the best quality panels and equipment so that you can have faith that the system will work as expected and, should anything fail within the warranty period, you will be able to simply get the items replaced, without any problem. We would normally specify the likes of Mitsubishi, Sanyo, Schott and SMA Sunnyboy inverters.</p><br><br>
                <img src="../../images/cr_pv2.jpg" alt="" class="content_image"><br><br>
                <p class="content_text">For more informaton on government incentives and energy saving in your home, visit: <a href="http://www.energysavingtrust.org.uk" class="content_link" target="_blank">www.energysavingtrust.org.uk</a></p><br><br>
                <p class="content_text">A well-fitted PV system will add value to your property as everyone comes to realise that your house is considerably cheaper to run than an equivalently sized house without a panel system.</p><br><br>
            </div>
            <?php include '../../includes/form.php'; ?>
        </section>
        
        <!-- Footer -->
        <?php include '../../includes/footer.php'; ?>