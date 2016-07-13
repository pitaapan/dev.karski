<?php
if($_POST)
{
 
 $MAIL_from = 'Karski.nz Form <form@karski.nz>';
 $to_Email = "karski.piotr@gmail.com"; //Podaj tu email docelowy
 $subject = 'Hello, Pete my Man!'; //Tutaj temat wiadomości - możesz też wykorzystać pole formularza i pobrać tą wartość od klienta
 
 //Sprawdzamy czy jest to rządanie Ajax, jeśli nie..
 if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
 
 //Kończymy skrypt wysyłając dane JSON
 $output = json_encode(
 array(
 'type'=>'error', 
 'text' => 'The request must go through AJAX'
 ));
 
 die($output);
 } 
 
 //Sprawdzamy czy wszystkie pola zostały wysłane. kończymy skrypt jeśli nie (tutaj dodawaj więcej pól, które są wymagane)
 if(!isset($_POST["userName"]) || !isset($_POST["userEmail"]) || !isset($_POST["userPhone"]) || !isset($_POST["userMessage"]))
 {
 $output = json_encode(array('type'=>'error', 'text' => 'All fields are required, sorry!'));
 die($output);
 }

 //Pobieramy dane z formularza
 $user_Name = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
 $user_Email = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
 $user_Phone = filter_var($_POST["userPhone"], FILTER_SANITIZE_STRING);
 $user_Message = filter_var($_POST["userMessage"], FILTER_SANITIZE_STRING);
 
 //Dodatkowa validacja PHP (tylko dla pól wymaganych)
 if(strlen($user_Name)<2) // Wywala błąd jeśli imię ma mniej niż 2 znaki
 {
 $output = json_encode(array('type'=>'error', 'text' => 'Is this really your Name?'));
 die($output);
 }
 if(!filter_var($user_Email, FILTER_VALIDATE_EMAIL)) //sprawdzamy email
 {
 $output = json_encode(array('type'=>'error', 'text' => 'Please enter valid email!'));
 die($output);
 }
 if(!is_numeric($user_Phone)) //sprawdzamy czy telefon jest numeryczny
 {
 $output = json_encode(array('type'=>'error', 'text' => 'Please enter valid phone number!'));
 die($output);
 }
 if(strlen($user_Message)<5) //Sprawdzamy czy wiadomość ma więcej niż 5 znaków
 {
 $output = json_encode(array('type'=>'error', 'text' => 'The word HELLO has 5 characters! Anything more?'));
 die($output);
 }
 
 //Nagłówki do Maila z polskimi znakami i HTML
 $MAIL_headers = "MIME-Version: 1.0\r\n";
 $MAIL_headers .= "From: ".$MAIL_from."" . "\r\n";
 $MAIL_headers .= 'Content-type:text/html;charset=iso-8859-1' . "\r\n";
 $MAIL_headers .= "Reply-To: ".$MAIL_replyTo."" . "\r\n";
 $MAIL_headers .= "X-Mailer: PHP/" . phpversion();

 //  Incoming Email Layout
 $MAIL_message = '<b>From:</b> ' .$user_Name. ' (' .$user_Email. ') <br>';
 $MAIL_message .= '<b>Phone:</b> ' .$user_Phone;
 $MAIL_message .= '<br><b>I would like to</b> ' .$user_Message;
 
 $sentMail = @mail($to_Email, $subject, $MAIL_message, $MAIL_headers);
 
 if(!$sentMail)
 {
 $output = json_encode(array('type'=>'error', 'text' => 'There was an unexpected error! Sorry '.$user_Name));
 die($output);
 }else{
 $output = json_encode(array('type'=>'message', 'text' => 'Hi '.$user_Name .',<br>Thank you for your message!'));
 die($output);
 }
}
?>