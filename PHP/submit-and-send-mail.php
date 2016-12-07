
<!--

This Script accepts a POST method submit and sends a mail to the assigned Senders using native PHP mailer function.

-->
<?php
if(isset($_POST["submit"])) {
   $recipient="ayushi.srivastava@apollosugar.com, apollosugarfsd@gmail.com";
    $subject="Enquiry for Complete Diabetes Checkup";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $phone=$_POST["ph_no"];
    $mailBody="Name: $sender\nEmail: $senderEmail\nPhone No: $phone\n";
    $headers = 'From:  digitalmedia@apollosugar.in  \r\n'.
    
            'Reply-To: '.$senderEmail."\r\n" .
 
         'X-Mailer: PHP/' . phpversion();

    @mail($recipient, $subject, $mailBody, $headers);
}
else {
    header('Location: index.php');
}

?>