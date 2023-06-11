<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
	
$name = $_POST['jmeno'];
$email_address = $_POST['email'];
$message = $_POST['nazor'];

$to = 'stanislav.machalik@upce.cz'; 
$email_subject = "Pošta z webu";
$email_body = "Obdrželi jste novou zprávu z Vašeho formuláře\n\n"."Byly vyplněný tyto údaje:\n\nJméno: $name\n\nEmail: $email_address\n\nZpráva: $message\n\n";
$headers = "From: odesilatel@yourdomain.com\n"; 
$headers .= "Reply-To: $email_address";	
if(mb_send_mail($to,$email_subject,$email_body,$headers))
    {
        echo "Email byl úspěšně odeslán";
        return true;
    }
    else {
        echo "Email se nepodařilo odeslat";
    }			
?>
</body>
</html> 