<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. Destinatario e Oggetto
    $to = "anymail@anydominion@something";
    $subject = "Nuovo contatto da CustomDev Gym";

    // 2. Sanificazione dati
    $nome = htmlspecialchars(trim($_POST['nome']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $messaggio = htmlspecialchars(trim($_POST['messaggio']));

    // 3. Validazione
    if (empty($nome) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../contattaci.php?error=invaliddata");
        exit;
    }

    // 4. Costruzione del corpo della mail
    $email_content = "Hai ricevuto un nuovo messaggio dal modulo contatti del sito.\n\n";
    $email_content .= "Nome: $nome\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Messaggio:\n$messaggio\n";

    // 5. Header della mail
    $headers = "From: no-reply@customdevgym.it\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // 6. Invio reale
    if (mail($to, $subject, $email_content, $headers)) {
        header("Location: ../contattaci.php?status=success");
        exit;
    }
    else {
        header("Location: ../contattaci.php?status=error");
        exit;
    }

}
else {
    header("Location: ../contattaci.php");
    exit;
}

?>
