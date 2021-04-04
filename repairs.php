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
            $header = 'Repairs and Servicing';
            include 'includes/other_pg_banner.php'; 
        ?>

        <!-- CONTENTS -->
        <section class="main_contents">
            <div class="contents">
                <div class="section-header">
                    <h1><?php echo $header; ?></h1>
                </div>
                <!-- <p class="content_text">Like all machinery renewable technologies need servicing and occasionally repair. As we have experience in all the technologies, and we are qualified Chartered engineers we have the understanding to keep your technologies in top condition. Whether you have Solar PV or Solar Thermal or a bale burner, we can repair or service the unit as required, at a reasonable cost. Please contact us and we can discuss your requirements.</p><br><br> -->
                <p class="content_text">We have experience in most renewable technologies. If you have a problem with your renewables, it is likely that we have fixed it for someone. Our customers include Councils, many small business and many households around Leicestershire and beyond.</p><br><br>
                <p class="content_text">We are qualified Chartered engineers and often get called in when traditional tradesmen cannot help. We understand these technologies and are able to fault find and service these systems to keep them in top condition.</p><br><br>
                <p class="content_text">Our current servicing and repair capabilities include:</p>
                <ul>
                    <li class="content_text">Solar PV systems including panel removal for roof maintenance</li>
                    <li class="content_text">Solar inverter fault diagnosis repair / replacement</li>
                    <li class="content_text">Solar hot water panels including plumbing and control electronics</li>
                    <li class="content_text">Home battery system issues</li>
                    <li class="content_text">EV Charging point issues</li>
                    <li class="content_text">Immersion heater diverters including iBoost, Eddi/Harvi and Immersun</li>
                    <li class="content_text">Thermal Stores</li>
                    <li class="content_text">Air source heat pumps most manufacturers supported</li>
                    <li class="content_text">MVHR unit servicing and repair</li>
                    <li class="content_text">Ground source heat pumps</li>
                    <li class="content_text">Central heating problems plumbing and electrical control</li>
                </ul>
                <br>
                <p class="content_text">Please contact us to discuss your requirements</p><br><br>
                <p class="content_text">Our inverter repair shop will be please to advise on faults for the following inverters, Aurora/ABB and Samil Power Wind River. Please follow the links below for information on specific faults.</p><br><br>
                <p class="content_text">Samil Power Wind River <a href="http://www.solar-river-relay-fault.co.uk/" class="content_link" target="_blank">Click here</a></p><br><br>
                <p class="content_text">Aurora /ABB <a href="http://www.aurora-int-error-e031.co.uk/" class="content_link" target="_blank">Click here</a></p><br><br>
            </div>
            <?php include 'includes/form.php'; ?>
        </section>

        <!-- Footer -->
        <?php include 'includes/footer.php'; ?>