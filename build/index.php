<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sign up for Whoo!</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <link href='http://fonts.googleapis.com/css?family=Antic+Slab' rel='stylesheet' type='text/css'>
</head>

<body>

    <?php
        // if the form has been submitted, process it - otherwise, just display the form normally
        if(isset($_POST['send'])){
            
            // pull the name out of the submitted for
            $name = strip_tags($_POST['name']);
            
            // pull the email out of the submitted form
            $emailFrom = strip_tags($_POST['email']);
            
            // who you're sending the email to (probably change this)
            $emailTo = "apprentices@freshtilledsoil.com";
            $subject = "Submission";
            
            // inset information into the body of the email
            $body = "Name: ".$name."\n";
            $body .= "Email: ".$emailFrom."\n";
            
            // set the email headers
            $headers = "From: ".$emailFrom."\n";
            $headers .= "Reply-To:".$emailFrom."\n";	
            
            $success = mail($emailTo, $subject, $body, $headers);
            
            // this is the message that gets displayed after submission
            if ($success){
                echo 'sent';
            } else {
                echo 'not sent';
            }
        
        } else {
    ?>
        
        <form id="sign-up-form" class="centered" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            
            <header id="signup-form-header">                
                <h2>Sign up for Whoo!</h2>
                <h6>50 projects, 500 images, 10 videos, domain binding, and technical support.</h6>             
            </header>
                
            <ol>
                <li id="portfolio-info">
                    <fieldset class="input-wrapper">
                        <legend class="formfield-titles">First, name your portfolio</legend>
                        
                        <label id="title1" for="Portfolio Title">Portfolio Title</label>
                        <br>
                        <input type="text" id="portfolio-title" name="title" minlength="2"/>
                        <br>
                        <label id="title2" for="Portfolio Address">Portfolio Address</label>
                        <br>
                        <input type="url" id="portfolio-address" name="address-slug" minlength="2" title="Numbers must consist of lowercase letters, numbers, and hyphens and periods only." required pattern="[A-Z]{3}[0-9]{4}" />
                        
                    </fieldset> <!-- END input-wrapper -->
                </li> <!-- END portfolio-info -->
                
                <li id="account-info">
                    <fieldset class="input-wrapper">
                        <legend class="formfield-titles">Now, enter your account details</legend>
                        
                            <label id="title3" for="name">Name</label>
                            <br>
                            <input type="text" id="account-name" name="name" minlength="2"/>
                            <br>
                            <label id="title4" for="name">E-mail</label>
                            <br>
                            <input type="email" id="account-email" name="email" minlength="2"/>
                        
                    </fieldset> <!-- END input-wrapper -->
                </li> <!-- END account-info -->
                
                <li id="payment-info">
                    <fieldset class="input-wrapper">
                        <legend class="formfield-titles">Finally, enter your payment information</legend>
                        
                        <a id="paypal-link" class="fl-r" href="https://www.paypal.com" title="click to use paypal instead">use paypal</a>
                        <br>
                        <label id="title5" for="Card Number">Card Number</label>
                        <br>
                        <input type="text" id="cc-num" name="cc-number" minlength="2"/>
                        <br>
                        <label id="title6" for="Security Code">Security Code</label>
                        <br>
                        <input type="text" id="sec-code" name="cc-sec" minlength="2"/>
                        <br>
                        <label id="title7" for="Expiration Date">Expiration Date</label>
                            <br>
                            <select name="cc-exp-month">
                                <option disabled="disabled" selected="selected">Month</option>
                                <option value="january">January</option>
                                <option value="february">February</option>
                                <option value="march">March</option>
                                <option value="april">April</option>
                                <option value="may">May</option>
                                <option value="june">June</option>
                                <option value="july">July</option>
                                <option value="august">August</option>
                                <option value="september">September</option>
                                <option value="october">October</option>
                                <option value="november">November</option>
                                <option value="december">December</option>
                            </select>
                    
                            <select name="cc-exp-year">
                                <option disabled="disabled" selected="selected">Year</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                                <option value="2028">2028</option>
                                <option value="2029">2029</option>
                                <option value="2030">2030</option>
                            </select>
                    </fieldset> <!-- END input-wrapper -->
                </li> <!-- END payment-info -->
                
                <button id="btn-submit-portfolio" type="submit" name="send">Create your portfolio</button>
                
            </ol> <!-- END Ordered List -->
        </form>
    
    <?php
        }
    ?>
<!-- Le javascript
    ================================================== -->
<!-- Placed at the end of the document because we rock at performance -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

</body>
</html>
    

