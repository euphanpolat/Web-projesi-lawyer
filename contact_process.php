<?php
header('Content-Type: application/json');

// Form verilerini al
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$subject = $_POST['subject'] ?? '';
$message = $_POST['message'] ?? '';

// E-posta gönderimi
$to = "eyuphanpolat@gmail.com";
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$email_content = "
<html>
<head>
    <title>Yeni İletişim Formu Mesajı</title>
</head>
<body>
    <h2>Yeni İletişim Formu Mesajı</h2>
    <p><strong>İsim:</strong> $name</p>
    <p><strong>E-posta:</strong> $email</p>
    <p><strong>Konu:</strong> $subject</p>
    <p><strong>Mesaj:</strong><br>$message</p>
</body>
</html>
";

// E-postayı gönder
$mail_sent = mail($to, "İletişim Formu: $subject", $email_content, $headers);

// Yanıt döndür
if ($mail_sent) {
    echo json_encode(['success' => true]);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => 'E-posta gönderilemedi']);
}
?>