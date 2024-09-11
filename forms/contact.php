<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'sonne_29@hotmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }
 //Original Formulario Contact
 //Uncomment to avilable 
  //$contact = new PHP_Email_Form;
  //$contact->ajax = true;
  
 // $contact->to = $receiving_email_address;
  //$contact->from_name = $_POST['name'];
  //$contact->from_email = $_POST['email'];
  //$contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  //$contact->add_message( $_POST['name'], 'From');
  //$contact->add_message( $_POST['email'], 'Email');
  //$contact->add_message( $_POST['message'], 'Message', 10);

  //echo $contact->send();

  //Ajuste desde Index
  $index= new PHP_Email_Form;
  $index-> ajax = true; 

  $index->from_name = $_POST['name'];
  $index->from_email = $_POST['email'];
  $index->from_Phone = $_POST['phone'];
  $index->from_message = $_POST['subjectmessage'];

  $index->add_message( $_POST['name'], 'From');
  $index>add_message( $_POST['email'], 'Email');
  $index>add_message( $_POST['email'], 'phone');
  $index->add_message( $_POST['message'], 'Message', 10);

  echo $index->send();

//SMTP Configurarion Pending

?>
