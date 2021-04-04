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
        $header = 'BioMass';
        include '../../includes/other_pg_banner.php'; 
        ?>

        <!-- CONTENTS -->
        <section class="main_contents">
            <div class="contents">
                <div class="section-header">
                    <h1><?php echo $header; ?></h1>
                </div>
                <p class="content_text">Biomass is defined as “organic matter, especially plant matter, that can be converted to fuel and is therefore regarded as a potential energy source.”</p><br><br>
                <p class="content_text">There are a number of different types of biomass boilers, which are configured to run on anything from rough logs/pallets/straw to engineered fuel such as pellets</p><br><br>
                <img src="../../images/biomass.png" alt="" class="content_image"><br><br>
                <div class="biomass-image-text">
                    <p class="biomass-img-text">Pellets</p>
                    <p class="biomass-img-text">Living Room type pellet boiler</p>
                    <p class="biomass-img-text">Industrial scale Bale Burner</p>
                </div>
                <br><br>
                <p class="content_text">So a fire can be based in the living room with a small amount of pellets being used, all the way upto a burner which will take straw bales or metre long sections of tree.</p><br><br>
                <p class="content_text">There are a number of major advantages in changing from Gas/Oil to Biomass. The first being pellets or wood chip are a cheaper fuel than either gas or oil, the modern biomass boilers are as controllable as the present range of oil/gas boilers. And there is a 7 year repayment called the RHI (Renewable Heat Incentive) designed to repay the owner for moving away from a fossil fuel. The property will be much nearer to being Carbon Neutral.</p><br><br>
            </div>
            <?php include '../../includes/form.php'; ?>
        </section>
        
        <!-- Footer -->
        <?php include '../../includes/footer.php'; ?>