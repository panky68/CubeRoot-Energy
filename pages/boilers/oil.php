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
        $header = 'Oil';
        include '../../includes/other_pg_banner.php'; 
        ?>

        <!-- CONTENTS -->
        <section class="main_contents">
            <div class="contents">
                <div class="section-header">
                    <h1><?php echo $header; ?></h1>
                </div>
                <p class="content_text">If your boiler is more than 10 years old, it may well not be a condensing model. A condensing boiler has a secondary coil in the exhaust gas so that the Latent Heat of Vapourisation can be recovered.</p><br><br>
                <p class="content_text">The older oil boilers typically have a gravity primary, so the cylinder is heated when the boiler is running. This means the pipes (typically uninsulated) are all heated even though the house cylinder is up to temperature. So we have the situation where if the controller is on the boiler will fire based on the boiler thermostat. It will run for maybe 30 seconds to a few minutes, heat the water in the pipes, then shut down again. This uses lots of oil as oil boilers are inefficient at start up and doesn’t produce any useful heating.</p><br><br>
                <p class="content_text">As with Gas boilers the seasonal efficiency (SEDBUK) rating can be low, So a change to a 90+% efficient boiler and changes like an S or Y plan fully pumped system can make a saving in the 35 - 45% of the property fuel bill.</p><br><br>
            </div>
            <?php include '../../includes/form.php'; ?>
        </section>
        
        <!-- Footer -->
        <?php include '../../includes/footer.php'; ?>