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
        $header = 'Solar Thermal';
        include '../../includes/other_pg_banner.php'; 
        ?>

        <!-- CONTENTS -->
        <section class="main_contents">
            <div class="contents">
                <div class="section-header">
                    <h1><?php echo $header; ?></h1>
                </div>
                <p class="content_text">Solar Thermal systems fall into 2 types, Evacuated Tube and Flat Panel. Both types are very efficient at collecting the energy from the sun and converting it to heated water. A Solar Thermal installation can typically have a system efficiency in the 60% range of the energy falling on the panels. Solar PV panels have a system efficiency of around 10% (total sun's energy to AC electricity).</p><br><br>
                <p class="content_text">The Evacuated Tube system is variable in size in that you can  specify manifolds with between 10 and 30 tubes, so different size arrays can be designed to fit the most complicated of spaces. The flat panel system looks very elegant when integrated within the roof.</p><br><br>
                <img src="../../images/Solar-thermal1.png" class="solar-thermal-img1" alt=""><br><br>
                <img src="../../images/Solar-Thermal2.png" class="solar-thermal-img2" alt=""><br><br>
                <img src="../../images/Solar-Thermal3.png" class="solar-thermal-img3" alt=""><br><br>
            </div>
            <?php include '../../includes/form.php'; ?>
        </section>
        
        <!-- Footer -->
        <?php include '../../includes/footer.php'; ?>