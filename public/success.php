<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Stripe\Stripe;
use Stripe\Checkout\Session;
use App\Models\Payment;

session_start();

if (!isset($_SESSION['stripe_session_id'])) {
    die("Erreur : ID de session introuvable.");
}


Stripe::setApiKey($_ENV['SECRET_KEY']);

$session_id = $_SESSION['stripe_session_id'];
$session = Session::retrieve($session_id);

$session_id = $session->id;
$amount_total = $session->amount_total;
$currency = $session->currency;
$status = $session->payment_status;

$eventId = $session->metadata->event_id;
$ticketType = $session->metadata->ticket_type;
$price = $session->metadata->price;
$userId = $session->metadata->userId;

$payment = new Payment();
try {
    $payment->createTicketAndPayment($session_id, $amount_total, $currency, $status, $eventId, $userId, $ticketType, $price);

    echo "Paiement et ticket créés avec succès!";
    session_start();
    $_SESSION['Paiement'] = "Paiement et ticket créés avec succès!";
    header('Location: /');
} catch (\Exception $e) {
    echo "Erreur lors de la création du paiement et du ticket: " . $e->getMessage();
}

echo "Paiement réussi ! Montant : " . ($session->amount_total / 100) . " " . strtoupper($session->currency);
