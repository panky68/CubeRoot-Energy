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
                <img src="../../images/testimonial_img14.jpg" class="content_image" alt=""><br><br><br>
                <p class="content_text">'We chose CubeRoot Energy to undertake the supply and installation of our system following quotations from a number of national / local installers. They offered a competitive price backed up by local service and support for the whole job using high quality engineered PV panels and associated Inverter Unit. Wherever possible we prefer to use local suppliers, spend our money in the local economy and believe we made the correct choice with Bob and CubeRoot Energy.'</p><br><br>
                <p class="content_text">'The process started with a number of site visits to measure up and decide on the most suitable roof on our property and then various options proposed. We were informed at every stage and felt that we were fully involved in making the correct decision for us on the final specification. Installation took place over a couple of days with a small team of engineers without any fuss or problems and the site was left clear of all debris. Bob commissioned the whole system the following day without any issues. The installed system is very unobtrusive, blends in very well with the existing roof slates, and we are delighted with the end result.'</p><br><br>
                <p class="content_text">'We have been generating Solar PV Energy since mid July 2020 and are very pleased with the immediate reduction in our energy / electricity bills and look forward to even further savings for the foreseeable future.'</p><br><br>
                <p class="content_text">'We would fully endorse the work that Bob and his team have undertaken, and would have no hesitation in recommending them to any of our friends or family should they be looking to install a renewable energy based system.'</p><br><br>
            </div>
            <?php include '../../includes/form.php'; ?>
        </section>

        <!-- Footer -->
        <?php include '../../includes/footer.php'; ?>