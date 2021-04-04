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
        $header = 'Gas';
        include '../../includes/other_pg_banner.php'; 
        ?>

        <!-- CONTENTS -->
        <section class="main_contents">
            <div class="contents">
                <div class="section-header">
                    <h1><?php echo $header; ?></h1>
                </div>
                <p class="content_text">If your boiler is more than 10 years old, it may well not be a condensing model. A condensing boiler has a secondary coil in the exhaust gas so that the Latent Heat of Vapourisation can be recovered. Also the Worcester Bosch boilers we prefer have a modulation mode, so the boiler monitors the return temperature of the water and as the house (or water) heats up then it reduces the amount of gas being burnt to deliver the required room (or water) temperature. Using this method there is no overshoot of the desired temperature.</p><br><br>
                <p class="content_text">Also some older systems have no main house Thermostat, or maybe no Cylinder Thermostat. The addition of these controls makes sure excess fuel is not being used to heat beyond the required temperatures. Also addition of Thermostatic Radiator Valves TRVs will make the system more controllable, so bedrooms can be cut down and unused spare rooms can be put on a frost setting.</p><br><br>
                <p class="content_text">As systems become older they tend to sludge up with black Iron oxide deposits which make the system less efficient and can produce cold spots in radiators. We will power flush the system to remove the sludge and use a cleaner chemical, before connection of the new boiler. Into the system we will introduce a magnaclean magnetic cleaner which if serviced every year, with your standard service will keep the system clean and sludge free. <a href="http://www.adey.com" class="content_link" target="_blank">http://www.adey.com</a></p><br><br>
                <p class="content_text">So if your present boiler is SEDBUK band G (around 60% efficient) and you have no controls (Room Thermostat or Cylinder Thermostat) then we can  add those controls, and TRV’s and along with a 90%+ efficient boiler you could be saving upto 35-45% of the cost of  your fuel bills</p><br><br>
            </div>
            <?php include '../../includes/form.php'; ?>
        </section>
        
        <!-- Footer -->
        <?php include '../../includes/footer.php'; ?>