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
        $header = '';
        include '../../includes/other_pg_banner.php'; 
        ?>

        <!-- CONTENTS -->
        <section class="main_contents">
            <div class="contents">
                <img src="../../images/testimonial_img9.jpg" class="content_image" alt=""><br><br><br>
                <p class="content_text">Our customer requested that we place PV panels on his garden room. Obviously, the load bearing capability of the old felt roof was going to be a problem. So we started with an in-roof PV kit and placed clip together light weight plastic roof and ridge tiles to form a new waterproof roof. See what our customer had to say below.</p><br><br>
                <p class="content_text">Cube Root did a brilliant job of installing inconspicuous solar panels to my garden office roof, reconfiguring the electricity supply, and sourcing and fixing durable plastic tiles light enough for the roof to bear them. These guys are not only a solar panel firm but also engineers and problem-solvers of a high order. I recommend them without hesitation.</p><br><br>
            </div>
            <?php include '../../includes/form.php'; ?>
        </section>

        <!-- Footer -->
        <?php include '../../includes/footer.php'; ?>