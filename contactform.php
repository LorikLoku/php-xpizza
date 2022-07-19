<?php

if(isset($_POST['submit'])){
    $emri = $_POST['Emri'];
    $mail = $_POST['Mail'];
    $subjekt = $_POST['Subjekt'];
    $mesazhi = $_POST['Mesazhi'];

    $mail   To = "arjanbeka16@gmail.com";
    $headers = "From: ".$mail;
    $txt = "Ke marrur nje email nga ".$emri.".\n\n".$mesazhi;

    mail($mail, $subjekt, $txt, $headers);
    header("Location: Kontakt.php?mailsend")
}