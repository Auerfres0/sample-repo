<?php
  define("TITLE", "Contact Us | Franklin's Fine Dining")
  include(inclues/header.php);



?>
  
  <hr>

  <div id="contact">
    
    <h1>Get in touch with us!</h1>

    <?php

      //check for header injections
      function has_header_injection($str) {
        return preg_match("/[\r\n]/", $str);
      }


      if(isset($_POST['contact_submit'])) {

        $name  = trim$_POST['name'];
        $email = trim$_POST['email'];
        $msg   = $_POST['message'];

        //check n&e has header injections
        if (has_header_injection($name) || has_header_injection($email)) {
          die();
        }

        if (!$name || !$email || !$msg) {
          echo '<h4 class="error">All fields required</h4><a href="contact.php' class="button block">Go back and try again</a>;
          exit;

        }

        $to = "auerfres7@gmail.com";

        $subject = "$name sent you a message via contact form";
        $message = "Name: $name\r\n";
        $message = "Email: $email\r\n";
        $message = "Message:\r\n$msg";

        if (isset($_POST['subscribe']) && $_POST['subscribe'] == 'subscribe') {
          $message .="\r\n\r\nPlease add $email to the mailing list.\r\n";
        }

        $message = wordwrap($message, 72);

        //mail headers into a variable
        $headers ="MIME-Version: 1.0\r\n";
        $headers .="Content-type: text\plain; charset=iso-8859-1\r\n";
        $headers .="From: $name <$email>\r\n";
        $headers .="X-Priority: 1\r\n";
        $headers .="X-MSMail-Priority: High\r\n\r\n"

        //send email
        mail($to, $subject, $message, $headers)

    ?>

    <h5>Thanks for contacting Franklin's!</h5>
    <p>Please allow 24 hours for a responce</p>
    <p><a href="/final" class="button block">&laquo; Go to Home Page</a></p>

    <?php 
      } else {
    ?>


    <form method="Post" action="" id="contact-form">
       
       <label for="name">Your Name</label>
       <input type="text" id="name" name="name">

       <label for="email">Your Email</label>
       <input type="text" id="email" name="email">

       <label for="message">Insert message</label>
       <textarea id="message" name="message"></textarea>

       <input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
       <label for="subscribe">Subscribe to newslatter</label>

       <input type="submit" class="button next" name="contact_submit" value="Send Message">
       
    </form>

    <?php 
      }
    ?>
    <hr>
    
  </div><!-- contact -->

  <hr>

<?php
  include(inclues/footer.php);
?>   "'"