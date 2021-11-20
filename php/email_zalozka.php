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
  $doprava = $_POST['doprava'];




  if(isset($_POST['Zalozka'])){
    $inspiracia = $_POST['Zalozka'];

    $message = "Meno:".$name. "
    Priezvisko:".$surname.
    "Krajina:".$country. "
    Mesto:".$city.
    "Adresa:".$adress. "".$houseNumber."
    PSC:".$postalCode.
    "Doprava:".$doprava.
    "Inspiracia:".$inspiracia. "";
  }
  else{
    $pozlatko = $_POST['druh_pozlatka'];
    if(isset($_POST['Margareta'])){
        $margareta = implode(",",$_POST['Margareta']);
    }
    else{
        $margareta = "bez margaretok";
    }
    if(isset($_POST['pigment'])){
        $pigment = implode(",",$_POST['pigment']);
    }
    else{
        $pigment = "bez pigmentu";
    }

    $message = "Meno:".$name. "
    Priezvisko:".$surname.
    "Krajina:".$country. "
    Mesto:".$city.
    "Adresa:".$adress. "".$houseNumber."
    PSC:".$postalCode.
    "Doprava:".$doprava.
    "Pozlatko:".$pozlatko. 
    "Margarety:".$margareta. "
    Pigment:".$pigment. "";
  }
  
  $subject = 'Objednávka Záložky';
  

var_dump($message);
//   $retval = mail($to,$subject,$message);
  
  
//   if( $retval == true ) {
//     echo "Message sent successfully...";
//  }else {
//     echo "Message could not be sent...";
//  }
  
// ?>