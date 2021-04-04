<?php

define('SITE_KEY', '6Ldp8u8UAAAAAIXPbr35ce8RHZq1xdcEDx6mwG-h'); //site key for goggle reCaptcha v3 on Freeola server (NOT FOR LOCALHOST server)
define('SECRET_KEY', '6Ldp8u8UAAAAALUWfS3vyoyIps6fVegNZl6enC7O'); //secret key for goggle reCaptcha v3 on Freeola server (NOT FOR LOCALHOST server)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/<?php echo $style_sheet;?>.css">  <!-- use stylesheet depending if page is index page-->
    <link rel="stylesheet icon" href="images/favicon.jpg">
    <title>CubeRoot Energy</title>
    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY; ?>"></script>  <!-- Link to Recaptcha v3 with site key-->
</head>