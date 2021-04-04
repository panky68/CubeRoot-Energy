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
                <img src="../../images/testimonial_img8.jpg" class="content_image" alt=""><br><br><br>
                <p class="content_text">Dear Bob,</p><br>
                <p class="content_text">A word of appreciation for the latest installation of the Rolec Smart Charger for use with the new Tesla Model 3.</p><br>
                <p class="content_text">As always it was installed quickly and efficiently by Mark and yourself.</p><br>
                <p class="content_text">You probably know via the Tesla App that during the period from mid March to Mid September it looks like the six bedroom house and BMW i3 (which uses around 70% of the power during the week) only a couple of pounds worth of Grid electricity was used!</p><br>
                <p class="content_text">Much better than I had expected.</p><br>
                <p class="content_text">As you know Cuberoot installed the 8Kw solar panels and the two storage batteries are the main reasons for this remarkable efficiency and even now in December, close to half of electricity is "self powered".</p><br>
                <p class="content_text">Thanks again</p><br>
                <p class="content_text">Russ</p><br>
            </div>
            <?php include '../../includes/form.php'; ?>
        </section>

        <!-- Footer -->
        <?php include '../../includes/footer.php'; ?>