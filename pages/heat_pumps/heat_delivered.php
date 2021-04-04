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
        $header = 'How Is The Heat Delivered';
        include '../../includes/other_pg_banner.php'; 
        ?>

        <!-- CONTENTS -->
        <section class="main_contents">
            <div class="contents">
                <div class="section-header">
                    <h1><?php echo $header; ?></h1>
                </div>
                <p class="content_text">Heat pumps usually deliver heat in the form of hot water, as do most conventional central-heating systems. However, to maintain a high energy-efficiency, the emitter system should be designed so that the water temperature is as low as possible. Ideally, a well-designed underfloor heating system should be used. Radiators may be the only alternative, but should be significantly larger in area than normal. Several radiators in one room is advantageous.</p><br><br>
            </div>
            <?php include '../../includes/form.php'; ?>
        </section>
        
        <!-- Footer -->
        <?php include '../../includes/footer.php'; ?>