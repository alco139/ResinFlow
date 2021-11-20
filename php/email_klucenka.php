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




  if(isset($_POST['tovar'])){
    $inspiracia = $_POST['tovar'];

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
    $mermaid = $_POST['Mermaid'];
    $cukriky = $_POST['cukriky'];
    if(isset($_POST['Margareta'])){
        $margareta = implode(",",$_POST['Margareta']);
    }
    else{
        $margareta = "bez margaretok";
    }
    if(isset($_POST['Ovocie'])){
        $ovocie = implode(",",$_POST['Ovocie']);
    }
    else{
        $ovocie = "bez ovocia";
    }

    $message = "Meno:".$name. "
    Priezvisko:".$surname.
    "Krajina:".$country. "
    Mesto:".$city.
    "Adresa:".$adress. "".$houseNumber."
    PSC:".$postalCode.
    "Mermaid:".$mermaid.
    "Doprava:".$doprava.
    "Pozlatko:".$pozlatko.
    "Cukriky:".$cukriky. 
    "Margarety:".$margareta. "
    Ovocie:".$ovocie. "";
  }
  
  $subject = 'Objednávka kľúčenky';
  

var_dump($message);
//   $retval = mail($to,$subject,$message);
  
  
//   if( $retval == true ) {
//     echo "Message sent successfully...";
//  }else {
//     echo "Message could not be sent...";
//  }
  
// ?>