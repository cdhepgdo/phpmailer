<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable //verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com.';                     //Set the //SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP //authentication
    $mail->Username   = 'cdhepgdo@gmail.com';                     //SMTP username
    $mail->Password   = 'puxuplsgjobjvyrl';                               //SMTP //password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to //connect to; use 587 if you have set `SMTPSecure = //PHPMailer::ENCRYPTION_STARTTLS`
//
//    //Recipients
    $mail->setFrom('lokesea@outlook.com', 'Maileri');
    $mail->addReplyTo('lokesea@outlook.com', 'Maileri');
    $mail->addAddress('williamsonpena@gmail.com', 'will');     //Add a //recipient
    //Attachments

    //Content
    $mail->isHTML(true);                                  //Set email format to //HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'gola <b> :)</b>';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

//use Mailgun\Mailgun;
//
//// First, instantiate the SDK with your API credentials
////$mg = Mailgun::create('763126037cd15b5b2072d0482e431088-19806d14-ddc8fe36'); // //For US servers
////$mg = Mailgun::create('key-example', 'https://api.eu.mailgun.net'); // For EU //servers
//
//$mgClient = Mailgun::create('763126037cd15b5b2072d0482e431088-19806d14-ddc8fe36');
//$domain = "sandbox6809f9f1fc24411e980b09202e6ce9a0.mailgun.org"; 
//
//try {
//    //code...
// /*    $mg->messages()->send('sandbox6809f9f1fc24411e980b09202e6ce9a0.mailgun.//org', [
//      'from'    => 'no-reply@gmail.com',
//      'to'      => 'cdhepgdo@gmail.com',
//      'subject' => 'The PHP SDK is awesome!',
//      'text'    => 'It is so simple to send a message.'
//    ]); */
//
//    $result = $mgClient->messages()->send($domain, array(
//        'from'	=> 'Excited User <cdhepgdo@gmail.com>',
//        'to'	=> 'Baz <cdhepgdo@gmail.com>',
//        'subject' => 'Hello',
//        'text'	=> 'Testing some Mailgun awesomeness!'
//    ));
//    echo 'bien';
//} catch (\Throwable $th) {
//    //throw $th;
//    echo $th . "   NOOOO!";
//}

// Now, compose and send your message.
// $mg->messages()->send($domain, $params);