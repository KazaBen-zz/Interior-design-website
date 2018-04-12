<?php 
    $to = "rasa.balke@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $subject = "Balke.lt susisiekė";
    $subject2 = "Žinutės kopija Balke.lt";
    $message = "Vardas: " . $name . "\n\n" . "Telefono numeris: " . $phone . "\n\n" . "Žinutė: " . $_POST['message'];
    $message2 = "Balke.lt: Jūsų žinutės kopija: ".  "\n\n" . "Vardas: " . $name . "\n\n" . "Telefono numeris: " . $phone . "\n\n" ."Žinutė: " . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo '<div class="alert alert-success">Žinutė išsiųsta </div>';
    header("Refresh: 3; URL=/");
?>
