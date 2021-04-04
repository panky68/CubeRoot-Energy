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
        $header = 'Drilling';
        include '../../includes/other_pg_banner.php'; 
        ?>

        <!-- CONTENTS -->
        <section class="main_contents">
            <div class="contents">
                <div class="section-header">
                    <h1><?php echo $header; ?></h1>
                </div>
                <p class="content_text">We have a full time drilling consultant and support staff with over 25 years drilling experience. We are self-sufficient with our own low-loader and associated equipment and provide a high quality, reliable service.</p><br><br>
                <p class="content_text">Our drilling services are available throughout the UK and we are able to respond quickly and efficiently to any water or geo-thermal drilling requirement.</p><br><br>
                <p class="content_text">We have expertise in the following areas:</p><br><br>
                <p class="content_text">• Mini pile (350mm diameter) to 25m</p><br>
                <p class="content_text">• Auger sample to 30m</p><br>
                <p class="content_text">• Geo-thermal bore to 200m</p><br>
                <p class="content_text">• Water (200mm diameter) to 260m</p><br><br>
                <p class="content_text">We will gladly provide written references on request from existing clients.</p><br><br>
                <img src="../../images/drilling.jpg" alt="" class="content_image"><br><br>
            </div>
            <?php include '../../includes/form.php'; ?>
        </section>
        
        <!-- Footer -->
        <?php include '../../includes/footer.php'; ?>