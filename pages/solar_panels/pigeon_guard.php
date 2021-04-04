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
        $header = 'Pigeon Guard for Solar Panels';
        include '../../includes/other_pg_banner.php'; 
        ?>

        <!-- CONTENTS -->
        <section class="main_contents">
            <div class="contents">
                <div class="section-header">
                    <h1><?php echo $header; ?></h1>
                </div>
                <p class="content_text">Pigeons nesting under solar panels are becoming a common problem in towns, as they create an ideal habitat for the birds. The noise, which can often be heard all night and the fouling on the ground are two of the main reasons we are called in to assist.</p><br><br>
                <p class="content_text">In addition over time the activity of the birds can see a significant build-up of corrosive pigeon fouling on the panels and under them and in the gutters and patios below. Often we are called in due to a panel fault, only to be told that there is also a pigeon problem. In these circumstances the build-up of corrosive and damp fouling around the PV connectors (if they are unsupported i.e. left on the roof) can result in premature failure of the connector. This will normally mean that some or all of the panels will need to be removed to locate the damaged connector which will add further costs.</p><br><br>
                <p class="content_text">Pigeon fouling is nasty stuff. It is a carrier for some very nasty pathogens and bacteria which can cause very serious illness.</p><br><br>
                <img src="../../images/pigeon_guard1.jpg" alt="" class="content_image"><br><br>
                <img src="../../images/pigeon_guard2.jpg" alt="" class="content_image"><br><br>
                <p class="content_text">Pigeon guard is a solar panel bird protection system. Our high-quality stainless steel mesh Pigeon Guard bird prevention system provides protection from every type of bird, squirrel and other animals from nesting under your solar panel system. Our fixing system does not pierce roof or solar panels, no leaks, no drilling and also does not invalidate your panel warranty. 100% effective when properly installed, better than using spikes, chicken mesh or other systems.</p><br><br>
                <img src="../../images/pigeon_guard3.jpg" alt="" class="content_image"><br><br>
                <p class="content_text">The mesh we use is perfect for the purpose, because it should hold for a lifetime, is almost invisible from the ground and doesn’t cause any overheating or waterlogging issues. The efficiency of your solar panels is unaffected.</p><br><br>
                <p class="content_text">Our Prices Start from £499 +VAT and Scaffolding (if required)</p><br><br>
            </div>
            <?php include '../../includes/form.php'; ?>
        </section>
        
        <!-- Footer -->
        <?php include '../../includes/footer.php'; ?>