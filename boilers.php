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
        $header = 'Boilers';
        include 'includes/other_pg_banner.php'; 
        ?>

        <!-- CONTENTS -->
        <section class="main_contents">
            <div class="contents">
            <h1 class="content_header">Gas</h1><br>
                <p class="content_text">If your boiler is more than 10 years old, it may well not be a condensing model. A condensing boiler has a secondary coil in the exhaust gas so that the Latent Heat of Vapourisation can be recovered. Also the Worcester Bosch boilers we prefer have a modulation mode, so the boiler monitors the return temperature of the water and as the house (or water) heats up then it reduces the amount of gas being burnt to deliver the required room (or water) temperature. Using this method there is no overshoot of the desired temperature.</p><br><br>
                <p class="content_text">Also some older systems have no main house Thermostat, or maybe no Cylinder Thermostat. The addition of these controls makes sure excess fuel is not being used to heat beyond the required temperatures. Also addition of Thermostatic Radiator Valves TRVs will make the system more controllable, so bedrooms can be cut down and unused spare rooms can be put on a frost setting.</p><br><br>
                <p class="content_text">As systems become older they tend to sludge up with black Iron oxide deposits which make the system less efficient and can produce cold spots in radiators. We will power flush the system to remove the sludge and use a cleaner chemical, before connection of the new boiler. Into the system we will introduce a magnaclean magnetic cleaner which if serviced every year, with your standard service will keep the system clean and sludge free. <a href="http://www.adey.com" class="content_link">http://www.adey.com</a></p><br><br>
                <h1 class="content_header">Oil</h1><br>
                <p class="content_text">If your boiler is more than 10 years old, it may well not be a condensing model. A condensing boiler has a secondary coil in the exhaust gas so that the Latent Heat of Vapourisation can be recovered.</p><br><br>
                <p class="content_text">The older oil boilers typically have a gravity primary, so the cylinder is heated when the boiler is running. This means the pipes (typically uninsulated) are all heated even though the house cylinder is up to temperature. So we have the situation where if the controller is on the boiler will fire based on the boiler thermostat. It will run for maybe 30 seconds to a few minutes, heat the water in the pipes, then shut down again. This uses lots of oil as oil boilers are inefficient at start up and doesn’t produce any useful heating.</p><br><br>
                <p class="content_text">As with Gas boilers the seasonal efficiency (SEDBUK) rating can be low, So a change to a 90+% efficient boiler and changes like an S or Y plan fully pumped system can make a saving in the 35 - 45% of the property fuel bill.</p><br><br>
                <!-- <div class="content-images">
                    <img src="images/boilers-oil-s-plan.png" alt="" class="content-image1">
                    <img src="images/boilers-oil-y-plan.png" alt="" class="content-image2">
                    <p class="content-image-text content-image-text1">S Plan</p>
                    <p class="content-image-text content-image-text2">Y Plan</p>
                </div> -->
                
                <h1 class="content_header">BioMass</h1><br>
                <p class="content_text">Biomass is defined as “organic matter, especially plant matter, that can be converted to fuel and is therefore regarded as a potential energy source.”</p><br><br>
                <p class="content_text">There are a number of different types of biomass boilers, which are configured to run on anything from rough logs/pallets/straw to engineered fuel such as pellets</p><br><br>
                <img src="images/biomass.png" alt="" class="content_image"><br><br>
                <div class="biomass-image-text">
                    <p class="biomass-img-text">Pellets</p>
                    <p class="biomass-img-text">Living Room type pellet boiler</p>
                    <p class="biomass-img-text">Industrial scale Bale Burner</p>
                </div>
                <br><br>
                <p class="content_text">So a fire can be based in the living room with a small amount of pellets being used, all the way upto a burner which will take straw bales or metre long sections of tree.</p><br><br>
                <p class="content_text">There are a number of major advantages in changing from Gas/Oil to Biomass. The first being pellets or wood chip are a cheaper fuel than either gas or oil, the modern biomass boilers are as controllable as the present range of oil/gas boilers. And there is a 7 year repayment called the RHI (Renewable Heat Incentive) designed to repay the owner for moving away from a fossil fuel. The property will be much nearer to being Carbon Neutral.</p><br><br>
            </div>
            <?php include 'includes/form.php'; ?>
        </section>

        <!-- Footer -->
        <?php include 'includes/footer.php'; ?>