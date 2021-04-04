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
        $header = 'Why Invest in Renewables?';
        include 'includes/other_pg_banner.php'; 
        ?>

         <!-- CONTENTS -->
        <section class="main_contents">
            <div class="contents">
                <div class="section-header">
                    <h1>What are the benefits of installing renewables</h1>
                </div>
                <p class="content_text">There are lots of good reasons to use renewables:</p>
                <ul>
                    <li class="content_text">Making use of secure and local resources</li>
                    <li class="content_text">Reducing your dependence on non-renewable energy</li>
                    <li class="content_text">Helping to reduce the production of carbon dioxide and other greenhouse gases</li>
                    <li class="content_text">Creating new jobs in renewable energy industries</li>
                    <li class="content_text">Reducing your energy bills. In some cases you can generate income by selling your surplus energy back to your energy provider.</li>
                </ul><br>
                <p class="content_text">The first step in reducing your energy bills is to ensure your home is as energy efficient as it can be, this will help you get the most out of any renewables you choose. Often these options can be the most cost effective way of saving money and reducing Carbon dioxide.</p>
                <ul>
                    <li class="content_text">Think about insulating your property wherever you can.</li>
                    <li class="content_text">Use your lighting, heating and water appliances, more efficiently.</li>
                    <li class="content_text">Where possible replace equipment with a modern energy efficient model</li>
                    <li class="content_text">Research what renewable technologies are available and whether they would be suitable for your home.</li>
                </ul><br>
                <p class="content_text">Some Renewable technologies have specific requirements for installation</p>
                <ul>
                    <li class="content_text">Solar PV and solar thermal depends on the way your roof faces.</li>
                    <li class="content_text">Solar thermal, heat pumps and biomass require space inside and outside.</li>
                    <li class="content_text">Hydro requires a nearby stream or river</li>
                </ul><br>
                <p class="content_text">Government grants via the Renewable Heat Incentive (RHI) can help with the initial costs. The domestic renewable heat incentive allows all UK households to earn up to £3,390 per year for heating their home using renewable technologies.</p><br><br>
                <p class="content_text">The tariffs are paid quarterly for 7 years and have been set at a level that reflects the expected cost of renewable heat generation over 20 years.</p><br><br>
                <p class="content_text">The payments rise annually in line with the retail price index (RPI). Changes will come into effect on 1 April each year. For further information visit <a href="https://www.ofgem.gov.uk/environmental-programmes/domestic-rhi" class="content_link" target="_blank">OFGEM</a></p><br><br>
            </div>
            <?php include 'includes/form.php'; ?>
        </section>

        <!-- Footer -->
        <?php include 'includes/footer.php'; ?>