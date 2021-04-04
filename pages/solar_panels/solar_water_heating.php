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
        $header = 'Solar Water Heating';
        include '../../includes/other_pg_banner.php'; 
        ?>

        <!-- CONTENTS -->
        <section class="main_contents">
            <div class="contents">
                <div class="section-header">
                    <h1><?php echo $header; ?></h1>
                </div>
                <h1 class="content_header">Domestic hot water</h1>
                <p class="content_text">Generating domestic hot water (DHW) from solar panels has moved into the mainstream. We can supply systems to provide most of your DHW for approximately 4 months of the year, in the remaining 8 months the incoming water will be heated to varying degrees by the system, so that even in winter the incoming water at 10&#176C water will be preheated to perhaps 30&#176C before it's topped off by the boiler/immersion. These savings make a significant improvement to your fuel bills. Importantly modern systems do not need direct sunlight, they will still be heating water on cloudy days.</p><br><br>
                <img src="../../images/solar_water_heating.jpg" alt="" class="content_image"><br><br>
                <p class="content_text">Power costs have been increasing at about 10% annually, with our reliance on imported gas from Russia and the Middle East, this is unlikely to change. Once installed, a solar system runs on a 40-watt pump. We can assume that a solar system provides 65% of the hot water required by a typical household. If the annual hot water and an equivalent electrical cost of 15p/kWh. The annual Hot Water cost is £635 for a house with 150 Litre tank. With  65% solar produced hot water that is a saving of £412/annum. So with a 10% increase / annum we are looking at 6-7 year payback for a typical installation cost of £4000. This can be further improved by the government backed Renewable Heat Incentive which will pay a fixed income likely to be 19.2p for every kilowatt hour of heat produced.</p><br><br>
                <p class="content_text">There are a number of systems available, either Heat Tube collectors or Flatplate collectors. They are either installed over the top of the slates/tiles or the flatplate collectors can be mounted into the roof itself. This eliminates the need for slates/tiles on a new build or refurbished roof etc.</p><br><br>
            </div>
            <?php include '../../includes/form.php'; ?>
        </section>
        
        <!-- Footer -->
        <?php include '../../includes/footer.php'; ?>