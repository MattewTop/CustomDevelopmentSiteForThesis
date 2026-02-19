<?php require_once 'includes/config.php';?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contattaci - CustomDev Gym</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php include 'includes/navbar.php'; ?>

<main class="page-main">
    <div class="content-wrapper">
        <div class="contact-hero">
            <img src="assets/images/contattaci.jpeg" alt="Contattaci">
        </div>

        <div class="contact-intro">
            <p>Hai domande sui nostri piani o vuoi prenotare una visita guidata della struttura? Il nostro team è a tua completa disposizione per aiutarti a scegliere il percorso più adatto ai tuoi obiettivi. Non aspettare domani per iniziare a costruire il tuo futuro.</p>
        </div>

        <form action="/CustomDevGym/process/process-contact.php" method="POST" class="contact-form">
            <div class="form-group">
                <label for="nome">Nome <span>(obbligatorio)</span></label>
                <input type="text" id="nome" name="nome" required>
            </div>

            <div class="form-group">
                <label for="email">Email <span>(obbligatorio)</span></label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="messaggio">Messaggio</label>
                <textarea id="messaggio" name="messaggio" rows="6"></textarea>
            </div>

            <button type="submit" class="btn-submit">Contattaci</button>
        </form>

        <div class="info-grid">
            <div class="info-col">
                <h3>Orario</h3>
                <p>Lunedì-Venerdì<br>7:00–22:00</p>
                <p>Sabato-Domenica<br>7:00–12:00</p>
                <p class="small-note">Oppure inviaci un messaggio:</p>
            </div>
            <div class="info-col">
                <h3>Social media</h3>
                <p><a href="#">Instagram</a></p>
                <p><a href="#">TikTok</a></p>
                <p><a href="#">Facebook</a></p>
            </div>
            <div class="info-col">
                <h3>Contatti</h3>
                <p>Via dell'Immaginazione 104<br>Venezia, VE 30175</p>
                <p>fakemail@mygroovydomain.com</p>
                <p>(123) 456-7890</p>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
</body>
</html>