<?php
if($_POST)
{
 $to_Email = "karski.piotr@gmail.com"; //Podaj tu email docelowy
 $subject = 'Ah!! My email from Somebody out there...'; //Tutaj temat wiadomości - możesz też wykorzystać pole formularza i pobrać tą wartość od klienta
 
 
 //Sprawdzamy czy jest to rządanie Ajax, jeśli nie..
 if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
 
 //Kończymy skrypt wysyłając dane JSON
 $output = json_encode(
 array(
 'type'=>'error', 
 'text' => 'Rządanie musi przejść przez AJAX'
 ));
 
 die($output);
 } 
 
 //Sprawdzamy czy wszystkie pola zostały wysłane. kończymy skrypt jeśli nie (tutaj dodawaj więcej pól, które są wymagane)
 if(!isset($_POST["userName"]) || !isset($_POST["userEmail"]) || !isset($_POST["userPhone"]) || !isset($_POST["userMessage"]))
 {
 $output = json_encode(array('type'=>'error', 'text' => 'POLA SĄ PUSTE!'));
 die($output);
 }

 //Pobieramy dane z formularza
 $user_Name = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
 $user_Email = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
 $user_Phone = filter_var($_POST["userPhone"], FILTER_SANITIZE_STRING);
 $user_Message = filter_var($_POST["userMessage"], FILTER_SANITIZE_STRING);
 
 //Dodatkowa validacja PHP (tylko dla pól wymaganych)
 if(strlen($user_Name)<4) // Wywala błąd jeśli imię ma mniej niż 4 znaki
 {
 $output = json_encode(array('type'=>'error', 'text' => 'Imię jest za krótkie!'));
 die($output);
 }
 if(!filter_var($user_Email, FILTER_VALIDATE_EMAIL)) //sprawdzamy email
 {
 $output = json_encode(array('type'=>'error', 'text' => 'Proszę podać poprawny email!'));
 die($output);
 }
 if(!is_numeric($user_Phone)) //sprawdzamy czy telefon jest numeryczny
 {
 $output = json_encode(array('type'=>'error', 'text' => 'Tylko liczby są dozwolone'));
 die($output);
 }
 if(strlen($user_Message)<5) //Sprawdzamy czy wiadomość ma więcej niż 5 znaków
 {
 $output = json_encode(array('type'=>'error', 'text' => 'Wiadomość za krótka! Wpisz coś jeszcze.'));
 die($output);
 }
 
 //Nagłówki do Maila z polskimi znakami i HTML
 $MAIL_headers = "MIME-Version: 1.0\r\n";
 $MAIL_headers .= "From: ".$MAIL_from."" . "\r\n";
 $MAIL_headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 $MAIL_headers .= "Reply-To: ".$MAIL_replyTo."" . "\r\n";
 $MAIL_headers .= "X-Mailer: PHP/" . phpversion();

 /* Wygląd wiadomości
 *
 * OD: Imię i nazwisko <mail@example.com>
 * Telefon: 123456789
 * Wiadomość:
 * Treść wiadomości, bla bla bla...
 *
 */
 $MAIL_message = '<b>Od:</b> ' .$user_Name. ' (' .$user_Email. ') <br>';
 $MAIL_message .= '<b>Telefon:</b> ' .$user_Phone;
 $MAIL_message .= '<h3>Wiadomość:</h3> ' .$user_Message;
 
 $sentMail = @mail($to_Email, $subject, $MAIL_message, $MAIL_headers);
 
 if(!$sentMail)
 {
 $output = json_encode(array('type'=>'error', 'text' => 'Nie można wysłać wiadomości. Sprawdź konfigurację PHP Mail'));
 die($output);
 }else{
 $output = json_encode(array('type'=>'message', 'text' => 'Witaj '.$user_Name .' Dziękuję za wiadomość!'));
 die($output);
 }
}
?>