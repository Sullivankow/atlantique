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
            $mail->CharSet = 'UTF-8';
            $mail->Host = 'ssl0.ovh.net';
            $mail->SMTPAuth = true;
            $mail->Username = 'contact@lesclesdelatlantique17.fr';
            $mail->Password = 'Madinalake_3';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom('contact@lesclesdelatlantique17.fr', 'Les clés de l\'Atlantique 17');
            $mail->addAddress('contact@lesclesdelatlantique17.fr');
            $mail->addReplyTo($email, $nom);

            $mail->Subject = "Nouveau message de contact";
            $mail->isHTML(true);
            $mail->Body = '
                <div style="font-family:Montserrat,sans-serif; color:#546A7B; background:#f8f9fa; padding:24px; border-radius:1rem;">
                    <div style="text-align:center; margin-bottom:18px; display:flex; align-items:center; justify-content:center; gap:10px;">
                        <span style="font-size:2rem; color:#62929E; vertical-align:middle;">&#128273;</span>
                        <span style="font-size:1.5rem; font-weight:bold; color:#62929E;">Les Clés de l’Atlantique 17</span>
                    </div>
                    <h2 style="color:#62929E;">Nouveau message de contact</h2>
                    <p><strong>Nom :</strong> '.htmlspecialchars($nom).'<br>
                    <strong>Email :</strong> '.htmlspecialchars($email).'</p>
                    <div style="margin:18px 0; padding:16px; background:#fff; border-radius:0.5rem; box-shadow:0 2px 8px #62929e22;">
                        <strong>Message :</strong><br>
                        '.nl2br(htmlspecialchars($message)).'
                    </div>
                    <hr style="margin:24px 0;">
                    <div style="font-size:0.95rem; color:#62929E;">
                        <strong>Laetitia</strong> – Les Clés de l’Atlantique 17<br>
                        Tel : 07 80 15 19 46<br>
                        Email : <a href="mailto:contact@lesclesdelatlantique17.fr" style="color:#4ce0d2;">contact@lesclesdelatlantique17.fr</a><br>
                        Site : <a href="https://www.lesclesdelatlantique17.fr" style="color:#4ce0d2;">lesclesdelatlantique17.fr</a>
                    </div>
                </div>
            ';

            $mail->send();

            // ENVOI AU DESTINATAIRE (utilisateur) avec le même design
            $mailUser = new PHPMailer(true);
            $mailUser->isSMTP();
            $mailUser->CharSet = 'UTF-8';
            $mailUser->Host = 'ssl0.ovh.net';
            $mailUser->SMTPAuth = true;
            $mailUser->Username = 'contact@lesclesdelatlantique17.fr';
            $mailUser->Password = 'Madinalake_3';
            $mailUser->SMTPSecure = 'ssl';
            $mailUser->Port = 465;

            $mailUser->setFrom('contact@lesclesdelatlantique17.fr', 'Les clés de l\'Atlantique 17');
            $mailUser->addAddress($email, $nom);
            $mailUser->addReplyTo('contact@lesclesdelatlantique17.fr', 'Les clés de l\'Atlantique 17');

            $mailUser->Subject = "Merci pour votre message - Les Clés de l’Atlantique 17";
            $mailUser->isHTML(true);
            $mailUser->Body = '
                <div style="font-family:Montserrat,sans-serif; color:#546A7B; background:#f8f9fa; padding:24px; border-radius:1rem;">
                    <div style="text-align:center; margin-bottom:18px; display:flex; align-items:center; justify-content:center; gap:10px;">
                        <span style="font-size:2rem; color:#62929E; vertical-align:middle;">&#128273;</span>
                        <span style="font-size:1.5rem; font-weight:bold; color:#62929E;">Les Clés de l’Atlantique 17</span>
                    </div>
                    <h2 style="color:#62929E;">Merci pour votre message !</h2>
                    <p>Bonjour '.htmlspecialchars($nom).',<br><br>
                    Nous avons bien reçu votre demande et nous vous répondrons dans les plus brefs délais.<br>
                    Voici le récapitulatif de votre message :</p>
                    <div style="margin:18px 0; padding:16px; background:#fff; border-radius:0.5rem; box-shadow:0 2px 8px #62929e22;">
                        <strong>Message :</strong><br>
                        '.nl2br(htmlspecialchars($message)).'
                    </div>
                    <hr style="margin:24px 0;">
                    <div style="font-size:0.95rem; color:#62929E;">
                        <strong>Laetitia</strong> – Les Clés de l’Atlantique 17<br>
                        Tel : 07 80 15 19 46<br>
                        Email : <a href="mailto:contact@lesclesdelatlantique17.fr" style="color:#4ce0d2;">contact@lesclesdelatlantique17.fr</a><br>
                        Site : <a href="https://www.lesclesdelatlantique17.fr" style="color:#4ce0d2;">lesclesdelatlantique17.fr</a>
                    </div>
                </div>
            ';

            $mailUser->send();
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