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
                <img src="../../images/testimonial_img3.jpg" class="content_image" alt=""><br><br><br>
                <p class="content_text">I chose Cube Root for my photovoltaic system because they are a local business and have served many people in my neighbourhood, so there were plenty of word of mouth recommendations to give me confidence in their standard of workmanship. Also a friend had chosen them for his home and had sought several competing quotations, so I knew Cube Root were favourably priced in the wider market in Leicestershire.</p><br><br>
                <p class="content_text">Bob Marles invited me to inspect work in progress on a neighbour's home, with the latter's' permission. I was able to ask as many questions as I wanted, giving me further reassurance that Cube Root were competent. It's not often that you find 2 installers with 3 university degrees between them!</p><br><br>
                <p class="content_text">Our property is in a conservation area and so visual appearance was extremely important. Bob went out of his way to find panels that would suit the sensitivity of this rural location, not just in their individual size and fit to the available roof space but also down to the patterns on the panels themselves. The end result is that the roof looks as though it was designed around the panels and not the other way around. The wiring is also very neat inside my property.</p><br><br>
                <p class="content_text">Cube Root made the arrangements for the Feed in Tariff payments, completing the paperwork and supplying the necessary documentation to meet DECC's timetable. Bob also fitted an Ofgem approved smart meter of my choice, so that I could access my generation output in real time.</p><br><br>
                <p class="content_text">Just over one year later, I am very pleased with the system and recommend Cube Root as installers without reservation.</p><br>
            </div>
            <?php include '../../includes/form.php'; ?>
        </section>

        <!-- Footer -->
        <?php include '../../includes/footer.php'; ?>