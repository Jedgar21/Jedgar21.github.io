<?php

#User Input Form Collection
$Name = $Post['Name'];
$Email_Contact = $_Post['Email_Contact'];
$Phone_Contact = $_Post['Phone_Contact'];
$Message = $Post['Message'];

#User input Filter
function filter_email_header($form_field) {  
    return preg_replace('/[nr|!/<>^$%*&]+/','',$form_field);
    }

$Email_Contact = filter_email_header($Email_Contact);

#Email Form
$headers = "From: $Email_Contact";
$sent = mail('NEKTechvt@gmail.com', 'Support Form', $Phone_Contact, $Message, $headers);


#Sumbit Reply
if ($sent) {
    ?><html>
    <head>
    <Title> Your Message Has been Sent</title>
    </head>
    <body>
        <h1>We will be in contact soon.</h1>
        <p>Thank you for choosing NEKTech</p>
    </body>
    </html>
<?php
} else {
    ?><html>
    <head>
    <Title> Something went Wrong</title>
    </head>
    <body>
        <h1>We could not recieve your message. </h1>
        <p>Reload the page and try again. Or Send us an email at NEKTechvt@gmail.com</p>
    </body>
    </html>
<?php
}

