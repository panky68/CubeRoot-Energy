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
                <img src="../../images/testimonial_img1.jpg" class="content_image" alt=""><br><br><br>
                <p class="content_text">It is always a pleasure in this day and age to be able to give completely unqualified approval of any service.</p><br><br>
                <p class="content_text">We first saw CubeRoot's workmanship on a neighbours's roof and were impressed by the attention to detail and high standard of the installation.</p><br><br>
                <p class="content_text">When we came to install solar panels ourself it was an easy decision to use CubeRoot. However the stable roof we agreed for on the installation was uneven and tiled with two separate types of pantiles.</p><br><br>
                <p class="content_text">It also had two raised skylights that needed to be removed before the solar panels could be installed. All of this preparatory work was done to a high standard and CubeRoot went to great trouble to match the additional pantiles required even though some of them would not be seen.</p><br><br>
                <p class="content_text">The actual installation of the panels went smoothly and efficiently. Because of some early morning winter shade from a neighbours property the 15 panels were split into two banks of 6 and 9 panels so that the maximum efficiency of the system could be acheived. The quality of materials used was first class throughout and the system has been trouble free since day one. We are generating exactly the amount of electricity that we were promised (to within 1%) and have just received our first cheque for electricity generation. To summarise - a first class job!</p><br><br>
            </div>
            <?php include '../../includes/form.php'; ?>
        </section>

        <!-- Footer -->
        <?php include '../../includes/footer.php'; ?>