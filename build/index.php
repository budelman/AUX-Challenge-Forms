<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sign up for Whoo!</title>
    <link rel="stylesheet" href="assets/css/styles.css">
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
        
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <ol>
                <li> <!-- Portfolio Naming-->
                    <label for="Portfolio Title">Portfolio Title</label>
                    <input type="text" id="name" name="name" minlength="2"/>
            
                    <label for="Portfolio Address">Portfolio Address</label>
                    <input type="email" id="email" name="email" minlength="2"/>
            
                </li> <!--END Portfolio Naming-->
                <li> <!-- Account Details-->
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" minlength="2"/>
            
                    <label for="name">E-mail</label>
                    <input type="email" id="email" name="email" minlength="2"/>
            
                </li> <!--END Account Details-->
                <li> <!--Payment Info -->
                    <label for="Card Number">Card Number</label>
                    <input type="text" id="name" name="name" minlength="2"/>
            
                    <label for="Security Code">Security Code</label>
                    <input type="text" id="name" name="name" minlength="2"/>
                    
                    <label for="Expiration Date">Expiration Date</label>
                    <select name="month">
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
                    <select name="Year">
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
            
                </li> <!-- END Payment Info -->
            </ol>
            <button type="submit" name="send">Create your portfolio</button>
        </form>
    
    <?php
        }
    ?>

</body>
</html>
    

