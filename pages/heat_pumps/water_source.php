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
        $header = 'Water Source';
        include '../../includes/other_pg_banner.php'; 
        ?>

        <!-- CONTENTS -->
        <section class="main_contents">
            <div class="contents">
                <div class="section-header">
                    <h1><?php echo $header; ?></h1>
                </div>
                <p class="content_text">A river or small stream can be utilised, and, in the past systems using copper coils in the water have been used. Pumping river water through a heat pump is another option, and can give very good results, but heat pump units require water at temperatures above 5 to 8°C (varying depending on type). Whilst delivering very high-efficiencies for much of the time, this system will fail to operate in the middle of winter during lower temperatures- just when you need the most heat, so a back-up heat source will be needed. A spring is a much more stable and better heat source. Its an opportunity not to be overlooked, offering excellent efficiencies. Acidity and impurities in the water can sometimes make its use prohibitive. Permission should be sought from the relevant authorities as an abstraction licence may be needed.</p><br><br>
            </div>
            <?php include '../../includes/form.php'; ?>
        </section>
        
        <!-- Footer -->
        <?php include '../../includes/footer.php'; ?>