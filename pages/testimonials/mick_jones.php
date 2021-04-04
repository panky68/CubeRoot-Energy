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
                <img src="../../images/testimonial_img11b.jpg" class="content_image" alt=""><br><br><br>
                <p class="content_text">I’m about to start a major project on my home involving low carbon energy products, namely solar pv and a ground source heat pump installation. I could not have found Cuberoot more helpful. Both pricing and delivery/ install matched my expectations, the paperwork generated to demonstrate performance of the pv was very thorough.</p><br><br>
                <p class="content_text">They sourced the latest high specification solar panels giving me maximum generation (4Kw) from a smaller area on my roof leaving me with room to add other things if needed. The delivery and install over two days was quick and appeared to be relatively easy with no mess or damage. They also installed a new consumer unit for me giving me a head start on the next phase of work on the property.  The generation from the panels to date is in-line with the projections.</p><br><br>
                <p class="content_text">At the same time, they also sourced a third party to drill the bore holes for the ground source heat pump. Again, there was minimal disruption and mess. The remainder of the ground source heat pump project is still on-going but I will have no hesitation in calling on Cuberoot in the future for more work to be carried out.</p><br><br>
            </div>
            <?php include '../../includes/form.php'; ?>
        </section>

        <!-- Footer -->
        <?php include '../../includes/footer.php'; ?>