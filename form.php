<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $reference = $_POST['ref'];

    $email_form = 'javinuh@gmail.com';

    $email_subject = "new form submission";

    $email_body = "User name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "Reference:$reference.\n";
    $to = "javinuh@gmail.com";
    $headers = "from: $email_form \r\n";
    $headers = "Reply-to :$visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");
?>
