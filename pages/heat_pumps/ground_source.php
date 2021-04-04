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
        $header = 'Ground Source';
        include '../../includes/other_pg_banner.php'; 
        ?>

        <!-- CONTENTS -->
        <section class="main_contents">
            <div class="contents">
                <div class="section-header">
                    <h1><?php echo $header; ?></h1>
                </div>
                <p class="content_text">Ground Source heat pumps (gshp) extract heat stored in the ground. At depths of 2m and more, the ground temperature does not deviate very much from the average summer/winter surface temperatures (around 9 -12C in the UK depending on location). The most practical way of extracting this energy is to bury a large amount of pipe in the ground. This is usually laid in horizontal trenches at 1.5 – 2m depth, but vertical bore-holes are an alternative method giving similar results.</p><br><br>
                <img src="../../images/groundpump.jpg" alt="" class="content_image"><br><br>
            </div>
            <?php include '../../includes/form.php'; ?>
        </section>
        
        <!-- Footer -->
        <?php include '../../includes/footer.php'; ?>