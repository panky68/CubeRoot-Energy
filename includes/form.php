<?php
    $current_file = $_SERVER['SCRIPT_NAME'];
    $name_err = $email_err = $phone_err = $enquiry_err = ''; //initialise error vars

    // if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['enquiry'])) {
    if($_SERVER["REQUEST_METHOD"] == "POST") {   //submit form
        function getCaptcha($SecretKey){    //form submit protected by v3 recapcha
            $Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response={$SecretKey}");   //URL (with token and secret key), to where data is sent, will return score between 0 - 1 in JSON format
            $Score = json_decode($Response);   //decode JSON response to object
            return $Score;
        }
        $recaptchaScore = getCaptcha($_POST['reCAPTCHA']);  //call with token value, retuns object
        // var_dump($Return);

        if($recaptchaScore->success === true && $recaptchaScore->score > 0.5){ //Check returned object from Recaptcha, success = true and score > .5 
            $name = $_POST['name'];         //name of customer
            $fromEmail = $_POST['email'];       //customers email
            $phone = $_POST['phone'];       //customers phone
            $enquiry = $_POST['enquiry'];   //customers query
            

            if(isset($_POST['bot_data']) && !empty($_POST['bot_data'])){ //is there is BOT data
                die();                                                  //kill the page
            }else{                                                      //Else no BOT data, validate the form data and send mails
                //validate the name input
                if(empty($name)){
                    $name_err = 'Name is required';
                }else{
                    $name = test_input($name); //convert all input to text
                    if(!preg_match("/^[a-zA-Z ]*$/", $name)){   //check only letters and white spaces allowed
                        $name_err = 'Only letters and white space allowed';
                    }else if(strlen($name) > 32){
                        $name_err = 'Too Many Charactors';
                    }
                }
                //validate the Email input
                if(empty($fromEmail)){
                    $email_err = 'Email is required';
                }else{
                    $fromEmail = test_input($fromEmail);
                    if(!filter_var($fromEmail, FILTER_VALIDATE_EMAIL)){
                        $email_err = 'Invalid Email Format';
                    }else if(strlen($fromEmail) > 64){
                        $name_err = 'Too Many Charactors';
                    }
                }
                //validate the phone input
                if(empty($phone)){
                    $phone_err = 'Telephone is required';
                }else{
                    $phone = test_input($phone);
                    if(!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i", $phone)){
                        $phone_err = 'Invalid Phone Number';
                    }else if(strlen($phone) > 15){
                        $name_err = 'Too Many Digits';
                    }
                }
                //validate the enquiry input
                if(empty($enquiry)){
                    $enquiry_err = 'Please enter a message';
                }
                //if no errors occur, then send an email to Cuberoot and one to the customer
                if($name_err == '' && $email_err == '' && $phone_err == '' && $enquiry_err == ''){
                    //mail to bob
                    $to_bob = 'bob@cuberoot.co.uk';
                    //$to_bob = 'panky_68@hotmail.com';
                    $subject_bob = 'Query from Cuberoot Energy website';
                    $body_bob = "Contact from\n".$name."\n".$phone."\n".$email."\n\n".$enquiry;
                    $header_bob = 'From: ' . $fromEmail;
                    
                    //mail customer
                    $to_user = $fromEmail;
                    $subject_user = 'Cuberoot Energy Contact';
                    $body_user = "Hello ".$name."\n\nThank you for your enquiry, we will be in contact very soon\n\nBob Marles\nCuberoot Energy\nwww.cuberoot-energy.co.uk\n82 Broad Street\nSyston\nLeicestershire\nLE7 1GH\n\nTel 0116 2603545\nFax 0116 2609448\n";
                    $header_user = 'From: bob@cuberoot.co.uk';
                    if(mail($to_bob, $subject_bob, $body_bob, $header_bob) && mail($to_user, $subject_user, $body_user, $header_user)){
                        header('Location: '.$current_file.'?email_sent');
                    }else{
                        header('Location: '.$current_file.'?email_failed');
                    }
                }
            }
        }
    }
    if(isset($_GET['email_sent'])){
        $para_text = 'Email has been sent';
    }else if(isset($_GET['email_failed'])){
         $para_text = 'Email Failed, please try again later';
     }else{
         $para_text = 'Simply fill in your details and our dedicated account handler will call you to discuss your solar requirements';
     }
    function test_input($data){         //used to remove any sql injection
        $data = trim($data);            //remove white spaces
        $data = stripcslashes($data);   //remove backslashes
        $data = htmlspecialchars($data);
        return $data;
    }
?>
<div class="form">
    <h3 class="form-header">Request a call back</h3>
    <p class="form-paragraph"><?php if(isset($para_text)){echo $para_text;} ?></p>
    <form action="<?php echo $current_file; ?>" method="POST" class="forms-form">
        <input type="text" name="bot_data" class="hidden">
        <input type="text" name="name" placeholder="Name*" tabindex="1" maxlength=32 class="form-input name-input <?php if($name_err !== ''){echo 'form-input-err'; }?>" value="<?php if($name_err !== ''){ echo $name_err; } else { if(isset($name)){echo $name;}} ?>">
        <input type="text" name="email" placeholder="Email*" tabindex="2" maxlength=64 class="form-input email-input <?php if($email_err !== ''){echo 'form-input-err'; }?>" value="<?php if($email_err !== ''){ echo $email_err;}else{if(isset($fromEmail)){echo $fromEmail;}} ?>">
        <input type="text" name="phone" placeholder="Telephone*" tabindex="3" maxlength=15 class="form-input phone-input <?php if($phone_err !== ''){echo 'form-input-err'; }?>" value="<?php if($phone_err !== ''){ echo $phone_err;}else{if(isset($phone)){echo $phone;}} ?>">
        <textarea name="enquiry" cols="10" rows="3" placeholder="Your Enquiry*" tabindex="4" maxlength=100 class="query-input <?php if($enquiry_err !== ''){echo 'form-input-err'; }?>"><?php if($enquiry_err !== ''){ echo $enquiry_err;}else{if(isset($enquiry)){echo $enquiry;}} ?></textarea>
        <input type="hidden" id="reCAPTCHA" name="reCAPTCHA"> 
        <input type="submit" value="Send" class="form-btn">
    </form>
    <!-- script from goggle reCaptcha v3 -->
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('<?php echo SITE_KEY; ?>', {action: 'homepage'}).then(function(token) {
                //console.log(token);
                document.getElementById('reCAPTCHA').value=token;   //set value of forms hidden field (id="reCAPTCHA") with token value
            });
        });
    </script>
</div>