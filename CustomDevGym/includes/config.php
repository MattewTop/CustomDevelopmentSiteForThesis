<?php
//Configurazione database
define('DB_HOST', 'localhost');
define('DB_NAME', 'tesi_site');
define('DB_USER', 'root');
define('DB_PASS', 'MySQLPassword');

//Configurazione email per il form contattaci
define('EMAIL_TO', 'anymail@anydominion.something');
define('EMAIL_SUBJECT', 'Custom development site test module submission');

//Connessione al database con PDO
try{
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );
}
catch(PDOException $e){
    die("Errore di connessione al database: ". $e->getMessage());
}

//Funzioni helper per le query
function getIstruttori($pdo, $stato = 'attivo'){
    $stmt = $pdo->prepare("SELECT * FROM istruttori WHERE stato = ? ORDER BY cognome, nome");
    $stmt->execute([$stato]);
    return $stmt->fetchAll();
}

function getPacchetti($pdo, $attivo = true) {
    $stmt = $pdo->prepare("SELECT * FROM pacchetti WHERE attivo = ? ORDER BY prezzo");
    $stmt->execute([$attivo]);
    return $stmt->fetchAll();
}

function getClienti($pdo, $stato = null) {
    if ($stato) {
        $stmt = $pdo->prepare("
            SELECT c.*, p.nome as nome_pacchetto, 
                   CONCAT(i.nome, ' ', i.cognome) as nome_istruttore
            FROM clienti c
            LEFT JOIN pacchetti p ON c.id_pacchetto = p.id
            LEFT JOIN istruttori i ON c.id_istruttore = i.id
            WHERE c.stato = ?
            ORDER BY c.cognome, c.nome
        ");
        $stmt->execute([$stato]);
    }
    else {
        $stmt = $pdo->query("
            SELECT c.*, p.nome as nome_pacchetto, 
                   CONCAT(i.nome, ' ', i.cognome) as nome_istruttore
            FROM clienti c
            LEFT JOIN pacchetti p ON c.id_pacchetto = p.id
            LEFT JOIN istruttori i ON c.id_istruttore = i.id
            ORDER BY c.cognome, c.nome
        ");
    }
    return $stmt->fetchAll();

}
