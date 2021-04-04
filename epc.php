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
        $header = 'Energy Performance Certificates';
        include 'includes/other_pg_banner.php'; 
        ?>
         <!-- CONTENTS -->
        <section class="main_contents">
            <div class="contents">
                <div class="section-header">
                    <h1><?php echo $header; ?></h1>
                </div>
                <div class="epc-menu-bar">
                    <ul class="epc-items">
                        <li class="epc-title">Quick Links:</li>
                        <li id="epc-item"><a href="#intro" class="epc-link">Introduction</a></li>
                        <li id="epc-item"><a href="#dom-epc" class="epc-link">Domestic EPC Explained</a></li>
                        <li id="epc-item"><a href="#com-epc" class="epc-link epc-last-link">Commercial EPC Explained</a></li>
                    </ul>
                </div>
                <div class="introduction" id="intro">
                    <h1 class="content_header">Introduction</h1>
                    <p class="content_text">The legislation for combatting climate change began with the adoption of the Kyoto Protocol in 1997, which set binding commitments to the signatories (including the EU) to reduce carbon emissions.  Since then, the EU has issued a number of directives, across a variety of areas, to meet these commitments.  Buildings were addressed in 2002, with the Energy Performance of Buildings Directive (EPBD).</p><br><br>
                    <p class="content_text">The EPBD has been implemented in the UK by means of the Energy Performance Certificate (EPC), which is required whenever a building is sold or let.  There are two distinct methodologies used, one for domestic properties (properly known as "dwellings") and the other for commercial, or more exactly "non-dwellings".</p><br><br>
                    <p class="content_text">EPCs are asset ratings for the buildings i.e. they do not take into account how the building is actually being used by the current occupants, they just look at the fabric and services in the building to form an efficiency rating.</p><br><br>
                    <img src="images/epc_spread1.png" alt="" class="content_image"><br><br>
                    <p class="content_text">The norm for buildings in the UK is a 'D' rating, this takes into account the fact that there are a lot of old, draughty, and poorly insulated houses around (like Bob's house…), whilst the more modern housing is band 'B'.</p><br><br>
                    <p class="content_text">When an EPC is produced, there is also an accompanying set of recommendations on how to improve the efficiency of the building.  Currently it is not mandatory to take any notice of the recommendations, but by 2018 all privately rented properties must be of band E or better.  For social housing, the requirement is that by 2020 all properties must be of band C or better.</p><br><br>
                    <p class="content_text">For the elderly and vulnerable, living in a poorly insulated home can have serious health risks should the temperature fall below 16 oC.</p><br><br>
                    <p class="content_text">Having a poorly-rated property can seriously damage your wealth as well – the difference in the cost of heating an 'E' rated property might well cost five times as much to heat as a similar-sized 'C' rated property!</p><br><br>
                    <p class="content_text">If you are thinking of installing Solar PV, note that the Department of Energy and Climate Change (DECC) is currently incentivising owners to make their properties more energy-efficient:  the highest Feed In Tariff (FIT) is paid if the property achieves an EPC 'D' rating before Solar PV is fitted; a lower tariff is paid if a 'D' rating is only achieved after Solar PV is fitted; and a really low tariff is paid to the remainder.</p><br><br>
                </div>
                <div class="domestic-EPC-Explained" id="dom-epc">
                    <div class="header-buttons">
                        <h1 class="content_header">Domestic EPC Explained</h1>
                        <div class="adobe-dl-btn">
                            <img class="adobe-img" src="images/adobe-icon2-mod.png" alt="">
                            <a class="adobe-btn-text" href="images/Domestic_EPCs.pdf" target="_blank">Download Example</a>
                        </div>
                        <button id="btnScrollToTop">Top</button>
                    </div>
                    <p class="content_text">The part of the EPC that most people are familiar with is the energy efficiency bar-chart, showing the current rating of a property and the potential, following energy saving measures, as shown below.</p><br><br>
                    <img src="images/eer1.jpg" alt="" class="content_image"><br><br>
                    <p class="content_text">The 'Potential' rating is what could be achieved if all the EPC's recommended energy efficiency measures were to be introduced. In the example above there is a considerable improvement possible!</p><br><br>
                    <p class="content_text">Note that EPCs created after 1st April 2012 are the starting point for any Green Deal improvements that you may wish to make. Read more about the Green Deal</p><br><br>
                    <p class="content_text">Many people only get involved with an EPC when they are buying, selling or renting a property, and read no further than the Energy Efficiency Rating (if at all).  However there is a lot of useful information in here, like the following summary of how the property is constructed:</p><br><br>
                    <img src="images/summaryhep1.jpg" alt="" class="content_image"><br><br>
                    <p class="content_text">The Recommendations section lists all the improvements that could be made to your property, in priority order, to improve the energy efficiency:</p><br><br>
                    <img src="images/rm2.jpg" alt="" class="content_image"><br><br>
                    <p class="content_text">Note that only new EPCs will contain the Green Deal information, which you can use to tailor a package of home improvements. Read more about the Green Deal.</p><br><br>
                    <p class="content_text">If you are interested in the environmental impact of your home, then the following bar-chart will be of interest:</p><br><br>
                    <img src="images/impact1.jpg" alt="" class="content_image"><br><br>
                    <p class="content_text">Again, the chart shows current and potential ratings after the improvements have been applied.</p><br><br>
                </div>
                <div class="commercial-EPC-Explained" id="com-epc">
                    <div class="header-buttons">
                        <h1 class="content_header">Commercial EPC Explained</h1>
                        <div class="adobe-dl-btn">
                            <img class="adobe-img" src="images/adobe-icon2-mod.png" alt="">
                            <a class="adobe-btn-text" href="images/Commercial_EPC.pdf" target="_blank">Download Example</a>
                        </div>
                        <button id="btnScrollToTop1">Top</button>
                    </div>
                    <p class="content_text">The part of the EPC that most people are familiar with is the energy efficiency bar-chart, showing the current rating of a property as shown below:</p><br><br>
                    <img src="images/epar.jpg" alt="" class="content_image"><br><br>
                    <p class="content_text">Whilst this bar-chart may look similar to the one produced for houses, you might note that the asset rating is different in that low numbers, rather than high numbers are good (the scale runs from zero to 150+).</p><br><br>
                    <p class="content_text">This is just the tip of the iceberg; the methodologies underlying the assessments are completely different: for commercial properties the National Calculation Method is used and for dwellings the Standard Assessment Procedure is used.  There is little in common between the two methodologies, hence separate qualifications are required for Domestic Energy Assessor (DEA) and Commercial Energy Assessor (CEA) - also known as a Non-Domestic Energy Assessor.</p><br><br>
                    <p class="content_text">The EPC also has the following chart to show (for reasons of comparison) benchmark ratings for properties of the same size and usage for: 1) newly built i.e. to the current Building Regulations and 2) Typical of existing stock, which means built to the 1995 regulations.</p><br><br>
                    <img src="images/techinfo1.jpg" alt="" class="content_image"><br><br>
                    <p class="content_text">In order to produce a commercial EPC, the CEA has to measure each 'zone' in the building and also note the activity that takes place there, the heating, ventilation, cooling and lighting systems used.  A zone could comprise many rooms where the same activity takes place and the same building services are used, on the other hand it could be just part of a room because different e.g. lighting systems are used. Because the amount of work varies according to the number of zones, our rates are not purely based on building size.</p><br><br>
                    <p class="content_text">A file of recommendations is also produced; these are grouped by estimated payback bands of short term (less than 3 years), medium term (3 to 7 years) and long term (over 7 years).  These are specific to each property, and include anything from replacing inefficient lights to installing a wind turbine.</p><br><br>
                </div>
            </div>
            <?php include 'includes/form.php'; ?>
        </section>
        
        <!-- Footer -->
        <?php include 'includes/footer-epc.php'; ?>