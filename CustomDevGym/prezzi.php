<?php require_once 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prezzi - CustomDev Gym</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php include 'includes/navbar.php'; ?>

<main class="page-main">
    <div class="container">
        <div class="pricing-container">

            <div class="pricing-row">
                <div class="pricing-image">
                    <img src="assets/images/basicPackage.png" alt="Basic Package">
                </div>
                <div class="pricing-info">
                    <p><em>Include:</em> Accesso 7/7 sala pesi, spogliatoi con armadietto riservato, prima scheda di allenamento standard.</p>
                    <p class="price-tag">Prezzo: 29,90€ al mese</p>
                </div>
            </div>

            <div class="pricing-row">
                <div class="pricing-image">
                    <img src="assets/images/workHarder.png" alt="Work Harder Package">
                </div>
                <div class="pricing-info">
                    <p><em>Include:</em> Tutto il piano Basic + Corsi di gruppo illimitati, accesso all’area funzionale, valutazione corporea trimestrale.</p>
                    <p class="price-tag">Prezzo: 54,90€ al mese</p>
                </div>
            </div>

            <div class="pricing-row">
                <div class="pricing-image">
                    <img src="assets/images/workSmarter.png" alt="Work Smarter Package">
                </div>
                <div class="pricing-info">
                    <p><em>Include:</em> Tutto il piano Work Harder + 2 sessioni di Personal Coaching/mese, piano alimentare personalizzato, monitoraggio costante tramite la nostra app dedicata.</p>
                    <p class="price-tag">Prezzo: 89,90€ al mese</p>
                </div>
            </div>

        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
</body>
</html>