<?php
// if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){
//     if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message'])){
//         echo 'Lütfen tüm boşlukları doldurunuz!';
//     }
// }else{
//     $name = strip_tags($_POST['name']);
//     $email = strip_tags($_POST['email']);
//     $subject = strip_tags($_POST['subject']);
//     $message = strip_tags($_POST['message']);
//     $icerik = 'Ad : ' .$ad. '<br>E-Posta : ' .$email. '<br>'. $message;
//     mail('ugurkaykaf@gmail.com', $konu, $icerik);
//     echo 'Mesajınız Gönderildi! Teşekkürler.';
// }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "ugurkaykaf@gmail.com";
    $headers = "From: $email" . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Form submitted successfully.";
    } else {
        echo "Error: form submission failed.";
    }
}



?>



