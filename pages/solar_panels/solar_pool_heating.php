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
        $header = 'Solar Pool Heating';
        include '../../includes/other_pg_banner.php'; 
        ?>

        <!-- CONTENTS -->
        <section class="main_contents">
            <div class="contents">
                <div class="section-header">
                    <h1><?php echo $header; ?></h1>
                </div>                
                <h1 class="content_header">Introduction</h1>
                <p class="content_text">With the ever increasing cost of energy, heating the swimming pool is starting to become a luxury which needs to be brought under control. If the pool is heated by oil or gas (calor or natural) then a solar panel or heat pump solution is a viable solution for reducing those costs.</p><br><br>
                <h1 class="content_header">The Solution</h1>
                <p class="content_text">A solar panel solution using heat tubes or flatpanels works on the basis of trapping the heat of the sun inside an evacuated tube, then conducting and convecting it up a copper tube to a manifold. The manifold has an antifreeze based solution being pumped through it around the system. The fluid cools the copper top of the heat pipe, so the bank of heat pipes as a whole collects the suns energy and puts it into the fluid. The hot fluid is then taken through a very efficient heat exchanger, which has the pool water running through the alternate side. The heat transfers to the cooler pool water and hence heats the pool.</p><br><br>
                <img src="../../images/heated_pool.jpg" alt="" class="content_image"><br><br>
                <p class="content_text">The size of the system depends on a number of factors,</p><br><br>
                <p class="content_text">1. The size of the pool and hence the volume of water</p><br>
                <p class="content_text">2. The losses from the pool e.g. cover quality, inground/aboveground</p><br>
                <p class="content_text">3. Are the collectors facing due south and is it a very cloudy area</p><br>
                <p class="content_text">4. Is the system being used to heat the house DHW as well or a pool shower</p><br>
                <p class="content_text">5. How much will it be used, many users increase the heat loss.</p><br>
                <p class="content_text">These factors will all be taken into account, and a suitable size of system suggested, so that although a boiler may well be needed to give the pool a bump up at the start of the swimming season, the solar system will hold the temperature after that.</p><br><br>
                <p class="content_text">We are seeing Solar payback times of 3-4 years for oil/calor heating and approximately 8-10 years against a natural gas boiler. The ongoing running costs of a typical solar solutions are negligible as the system needs a 40watt pump to take the hot fluid from the panels to the heat exchanger. These systems are ideal for external pools which are normally only used in summer months.</p><br><br>
                <p class="content_text">An Indoor pool which is used all year will need a different system to heat it during the winter. Heat pumps can be very useful for heating indoor pools as the power from the sun (solar insolation) is 10 times less in the winter than the summer. They are relatively cheap, but cost a great deal more to run. The ideal solution is to use the solar radiation in the summer with a solar panel solution and a heat pump to carry the pool through the winter. With this model there is no need to have a boiler.</p><br><br>
                <p class="content_text">Heat pumps will pay back their capital cost in 2 to 3 years, but will only reduce the heating bill to 25% if you are running at a Coefficient of Performance(COP) of 4. This means for every 1kW of electrical energy you put into the system you get 4kW of heat equivalent.</p><br><br>
                <p class="content_text">With gas having to be imported from Russia and gas and oil from the Middle East we are very exposed to massive price fluctuations, so it makes sense to limit the reliance on those types of energy supply.</p><br><br>
            </div>
            <?php include '../../includes/form.php'; ?>
        </section>
        <!-- Footer -->
        <?php include '../../includes/footer.php'; ?>