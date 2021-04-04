<!-- HEADER -->
<?php
    $style_sheet = 'main-pg'; 
    include 'includes/header.php'; 
?>
<body>
    <?php ob_start(); ?>
    <div class="container"> <!-- Grid Container -->
        <!-- NAVBAR -->
        <?php include 'includes/menu.php'; ?>

        <!-- Banner Section-->
        <?php include 'includes/banner.php';?>
        
        <!-- Slide and Form -->
        <section class="slideshow-form">
            <?php include 'includes/slideshow.php';?>
            <?php include 'includes/form.php';?>
        </section>

        <!-- Services -->
        <?php include 'includes/services.php'; ?>

        <!--  Description -->
        <?php include 'includes/description.php'; ?>

        <!-- Supplier logos -->
        <?php include 'includes/suppliers_logos.php'; ?>

        <!-- Footer -->
        <?php include 'includes/footer.php'; ?>
    