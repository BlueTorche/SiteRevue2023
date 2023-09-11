<?php

namespace App;

use Stripe\Checkout\Session;
use Stripe\Stripe;

class StripePayment
{

    private $clientSecret;

    public function __construct(string $clientSecret){
        $this->clientSecret = $clientSecret;
        Stripe::setApiKey($this->clientSecret);
        Stripe::setApiVersion('2022-11-15');
    }

    public function startPayment(int $Ppareterre, int $Pbalcon, array $places){
        $line_items = [];
        if($Ppareterre){
            $line_items[] = [
                'quantity'=>$Ppareterre,
                'price_data'=>[
                    'currency'=>'EUR',
                    'product_data'=>[
                        'name'=>"Place parterre"
                    ],
                    'unit_amount'=>6000
                ]
            ];
        }
        if($Pbalcon){
            $line_items[] = [
                'quantity'=>$Pbalcon,
                'price_data'=>[
                    'currency'=>'EUR',
                    'product_data'=>[
                        'name'=>"Place balcon"
                    ],
                    'unit_amount'=>5000
                ]
            ];
        }
        $session = Session::create([
            'line_items'=>$line_items,
            'mode'=>'payment',
            "expires_at"=> time() + 7200,
            'success_url'=>'http://revuesdesminesfpms.be/succes.php',
            'cancel_url'=>'http://revuesdesminesfpms.be/reservation.php',
            "payment_method_types"=>[
                "card","bancontact"
            ],
            'automatic_tax'=>[
                'enabled'=>'false'
            ],
            'phone_number_collection'=> [
                'enabled'=> true
            ],
            'metadata'=>[
                'places'=>join(";",$places)
            ]
        ]);
        header("HTTP/1.1 303 See Other");
        header("Location: ".$session->url);
    }

}