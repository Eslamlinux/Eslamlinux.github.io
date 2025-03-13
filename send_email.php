<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "linuxeslam@gmail.com"; // Your email
    $subject = "رسالة جديدة من موقعك من $name";
    $body = "الاسم: $name\nالبريد الإلكتروني: $email\nالرسالة:\n$message";
    $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('تم إرسال الرسالة بنجاح!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('فشل في إرسال الرسالة. حاول مرة أخرى لاحقاً.'); window.history.back();</script>";
    }
}
?>
