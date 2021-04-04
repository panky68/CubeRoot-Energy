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
                <img src="../../images/testimonial_img2.jpg" class="content_image" alt=""><br><br><br>
                <p class="content_text">A big thank you to all at Cuberoot for their excellent work in recommending and installing my solar PV system. It was refreshing to deal with engineers who clearly know their subject inside out and were able to explain matters to me in plain English without exaggerated claims or ANY sales pressure.</p><br><br>
                <p class="content_text">It was equally refreshing to note that post installation the system is delivering results exactly as specified. Our system took 3 days to complete and the quality of workmanship and tidiness was excellent, resulting in a very neat and unobtrusive solution. Would I recommend Cuberoot to others? Well yes, I have already and several of my friends are now as delighted as I am with my system!</p><br>
            </div>
            <?php include '../../includes/form.php'; ?>
        </section>

        <!-- Footer -->
        <?php include '../../includes/footer.php'; ?>