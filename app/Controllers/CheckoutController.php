<?php
namespace App\Controllers;

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Core\AuthService;
use App\Models\Event;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class CheckoutController extends Controller
{
    private $stripeSecretKey;

    public function __construct()
    {
        $this->model = new Event();
        $this->stripeSecretKey = $_ENV['SECRET_KEY'];
    }

    public function createCheckout($request)
    {
        $eventId = (int) $request['event_id']; 
        error_log("Event ID: " . $eventId);

        $event = $this->model->find($eventId);
        $userData = AuthService::isAuthenticated();

        Stripe::setApiKey($this->stripeSecretKey);
        
        // session_start();

        try {
            $checkout_session = Session::create([
                "mode" => "payment",
                "success_url" => "http://localhost:8080/successPayment",
                "cancel_url" => "http://localhost:8080/",
                "locale" => "auto",
                "line_items" => [
                    [
                        "quantity" => 1,
                        "price_data" => [
                            "currency" => "MAD",
                            "unit_amount" => 2000,
                            "product_data" => [
                                "name" => $event['title']
                            ]
                        ]
                    ]
                ],
                "metadata" => [
                    "event_id" => $request['event_id'],
                    "ticket_type" => 'VIP',
                    "price" => $event['price'],
                    "userId" => $userData['userid'],
                ]
            ]);

            $_SESSION['stripe_session_id'] = $checkout_session->id;

            header("Location: " . $checkout_session->url);
            exit();
        } catch (\Exception $e) {
            die("Erreur lors de la création de la session Stripe : " . $e->getMessage());
        }
    }

    public function successPayment()
    {
        require __DIR__ . "/../../public/success.php";
    }
}
