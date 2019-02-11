<?php

if (isset($_POST['submit'])) {
    $name = $_POST['naam'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['onderwerp'];
    $message = $_POST['bericht'];
    
    $mailTO = "s.verlaan@ziggo.nl";
    $headers = "Van: ".$mailFrom;
    $txt = "Je hebt een email ontvangen van ".$name.".\n\n".$message;
    
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}

?>