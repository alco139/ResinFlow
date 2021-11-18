<?php
  $to = "alco139@gmail.com";
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $country = $_POST['krajina'];
  $city = $_POST['mesto'];
  $adress = $_POST['ulica'];
  $houseNumber = $_POST['cislo_domu'];
  $postalCode = $_POST['psc'];
  $visitor_email = $_POST['email'];

  $subject = 'Objednávka prsteňa';
  $message = "Meno:".$name. "
              Priezvisko:".$surname. "";
  $retval = mail($to,$subject,$message);
  
  
  if( $retval == true ) {
    echo "Message sent successfully...";
 }else {
    echo "Message could not be sent...";
 }
  
?>