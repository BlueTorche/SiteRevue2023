<?php
require 'vendor/autoload.php';

$psr17Factory = new \Nyholm\Psr7\Factory\Psr17Factory();
$creator = new \Nyholm\Psr7Server\ServerRequestCreator(
    $psr17Factory, // ServerRequestFactory
    $psr17Factory, // UriFactory
    $psr17Factory, // UploadedFileFactory
    $psr17Factory  // StreamFactory
);

$request = $creator->fromGlobals();
$signature = $request->getHeaderLine('stripe-signature');
$body = (string) $request->getBody();

$event = \Stripe\Webhook::constructEvent(
    $body,
    $signature,
    WEBHOOK_SECRET
);


$fp = fopen("js/seat-reservation.json", "c+");
if (flock($fp, LOCK_EX)) {
    $data = json_decode(file_get_contents("js/seat-reservation.json"), true);

    $places = explode(";", $event->data->object->metadata->places);
    $name = $event->data->object->customer_details->name;
    $email = $event->data->object->customer_details->email;
    $phone = $event->data->object->customer_details->phone;


    if ($event->type == 'checkout.session.completed' or $event->type == 'payment_intent.succeeded') {
        foreach ($places as $place) {
            [$position, $seat] = explode(" ", $place);
            if ($seat != " " && $seat != "") {
                //[$position, $seat] = $place;
                $data[$position][$seat]["status"] = "sold";
                $data[$position][$seat]["reserved_by"] = array(
                    "Nom" => $name,
                    "Email" => $email,
                    "Telephone" => $phone
                );
            }
        }

        include('email.php');
    } elseif ($event->type == 'checkout.session.expired') {
        foreach ($places as $place) {
            [$position, $seat] = explode(" ", $place);
            $data[$position][$seat]["status"] = "available";
            $data[$position][$seat]["reserved_by"] = array(
                "Nom" => "",
                "Email" => "",
                "Telephone" => ""
            );
        }
    }

    flock($fp, LOCK_UN);
}

if (file_put_contents("js/seat-reservation.json", json_encode($data)) !== false) {
    // Success message
    echo "success";
} else {
    // Error message
    echo "Error writing data to file";
    $error = error_get_last();
    echo ": " . $error["message"];
}


