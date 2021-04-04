<?php
    $style_sheet = 'other_pg'; 
    include 'includes/header.php'; 
?>
<body>
    <?php ob_start(); ?>
    <div class="container">
        <!-- NAVBAR -->
        <?php include 'includes/menu.php'; ?>
        <!-- HEADER -->
        <?php 
        $header = 'Contact Us';
        include 'includes/other_pg_banner.php'; 
        ?>
         <!-- CONTENTS -->
        <section class="main_contents">
            <div class="contents">
                <div class="section-header">
                    <h1><?php echo $header; ?></h1>
                </div>
                <p class="contact_content_text">Contact Bob or Mark at Cuberoot Energy for all your Renewables advice.</p><br>
                <p class="contact_content_text">Quality service and installation comes as standard.</p><br><br>
                <p class="contact_content_text">Take a look at our completed projects throughout this website, if you are interested, we will be happy to answer any queries concerning products and installations.</p><br><br>
                <p class="contact_content_text"><strong>Cuberoot Energy Ltd</p><br>
                <p class="contact_content_text">82 Broad Street,</p><br>
                <p class="contact_content_text">Syston,</p><br>
                <p class="contact_content_text">Leicester,</p><br>
                <p class="contact_content_text">LE7 1GH.</p><br><br>
                <p class="contact_content_text">Tel:</strong> 0116 2603545</p><br>
                <p class="contact_content_text"><strong>Mob:</strong> 07810 246675</p><br>
                <p class="contact_content_text"><strong>Email:</strong> <a href="mailto: bob@cuberoot-energy.co.uk" class="content_link">bob@cuberoot-energy.co.uk</a></p><br>
            </div>
            <?php include 'includes/form.php'; ?>
        </section>
        
        <!-- Footer -->
        <?php include 'includes/footer.php'; ?>