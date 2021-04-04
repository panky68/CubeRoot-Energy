<html>
<body>
<h4>Browser Information</h4>
<?php
    // $browser="";

    // if(strrpos(strtolower($_SERVER["HTTP_USER_AGENT"]),strtolower("MSIE"))){
    //     $browser="Internet Explorer";
    // }else if(strrpos(strtolower($_SERVER["HTTP_USER_AGENT"]),strtolower("Presto"))){
    //     $browser="Opera";
    // }else if(strrpos(strtolower($_SERVER["HTTP_USER_AGENT"]),strtolower("CHROME"))){
    //     $browser="Google Chrome";
    // }else if(strrpos(strtolower($_SERVER["HTTP_USER_AGENT"]),strtolower("SAFARI"))){
    //     $browser="Safari";
    // }else if(strrpos(strtolower($_SERVER["HTTP_USER_AGENT"]),strtolower("FIREFOX"))){
    //     $browser="FIREFOX";
    // }else{
    //     $browser="OTHER";
    // }
    // echo "Your Browser is :" .$browser;


//     $useragent = $_SERVER ['HTTP_USER_AGENT'];
//    echo "<b>Your User Agent is</b>: " . $useragent;

    // echo $_SERVER['HTTP_USER_AGENT']; 
    // //using get_browser() to display capabilities of the user browser 
    // $mybrowser = get_browser(); 
    // print_r($mybrowser); 

    function get_the_browser(){
        if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)
            return 'Internet explorer';
        elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== false)
            return 'Internet explorer';
        elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== false)
            return 'Mozilla Firefox';
        elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== false)
            return 'Google Chrome';
        elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false)
            return "Opera Mini";
        elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') !== false)
            return "Opera";
        elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== false)
            return "Safari";
        else
            return 'Other';
    }
    echo get_the_browser();

?>
    <!-- <h4>Original Code</h4>-->
 <?php
    //$browser_details = get_browser(null, true); //fetch all browser details in assc array
    //$browser = strtolower($browser_details['browser']); //extract the browser element and format to lower case
    //echo $browser;
?>  
</body>
</html>