<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php';

$success = false;
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = htmlspecialchars(trim($_POST['nom'] ?? ''));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    if (empty($nom)) {
        $errors[] = "Le nom est requis.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email invalide.";
    }
    if (empty($message)) {
        $errors[] = "Le message est requis.";
    }

    if (empty($errors)) {
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'ssl0.ovh.net';
            $mail->SMTPAuth = true;
            $mail->Username = 'contact@lesclesdelatlantique17.fr'; // ton email Zimbra
            $mail->Password = 'Madinalake_3'; // mot de passe Zimbra
            $mail->SMTPSecure = 'ssl'; // ou 'tls' si port 587
            $mail->Port = 465;

            $mail->setFrom('contact@lesclesdelatlantique17.fr', 'Les clés de l\'Atlantique 17');
            $mail->addAddress('contact@lesclesdelatlantique17.fr'); // où recevoir les mails
            $mail->addReplyTo($email, $nom);

            $mail->Subject = "Nouveau message de contact";
            $mail->Body = "Nom : $nom\nEmail : $email\n\nMessage :\n$message";

            $mail->send();
            $success = true;
        } catch (Exception $e) {
            $errors[] = "Erreur lors de l'envoi : {$mail->ErrorInfo}";
        }
    }
} else {
    header('Location: index.php#contact');
    exit;
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Contact - Les clés de l'Atlantique 17</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="bg-light d-flex align-items-center justify-content-center" style="min-height:100vh;">
    <div class="container p-5 mt-5 bg-white rounded shadow text-center" style="max-width:500px;">
        <?php if ($success): ?>
            <h2 class="text-success mb-3"><i class="bi bi-check-circle me-2"></i>Message envoyé !</h2>
            <p>Merci pour votre message, nous vous répondrons rapidement.<br>Redirection en cours...</p>
        <?php else: ?>
            <h2 class="text-danger mb-3"><i class="bi bi-x-circle me-2"></i>Erreur</h2>
            <ul class="text-start">
                <?php foreach ($errors as $err): ?>
                    <li><?= $err ?></li>
                <?php endforeach; ?>
            </ul>
            <p>Vous allez être redirigé vers le formulaire...</p>
        <?php endif; ?>
    </div>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <?php if ($success): ?>
        <script>
            setTimeout(function() {
                window.location.href = "index.php#contact";
            }, 3000); // 3 secondes
        </script>
    <?php elseif (!empty($errors)): ?>
        <script>
            setTimeout(function() {
                window.location.href = "index.php#contact";
            }, 4000); // 4 secondes
        </script>
    <?php endif; ?>
</body>

</html>