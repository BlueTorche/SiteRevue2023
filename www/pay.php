<?php
require 'vendor/autoload.php';
session_start();

$placesParterre = $_GET['placesParterre'];  //$places = "balcon1 D3,balcon1 D18,pareterre C27,balcon2 969";
$placesBalcon1  = $_GET['placesBalcon1'];
$placesBalcon2  = $_GET['placesBalcon2'];

$places = join(',',[$placesParterre,$placesBalcon1,$placesBalcon2]);
$selectedSeats = explode(',',$places);

$fp = fopen("js/seat-reservation.json", "c+");
if (flock($fp, LOCK_EX)) {
    $data = json_decode(file_get_contents("js/seat-reservation.json"), true);

    $success = true;
    $problem = "";
    foreach ($selectedSeats as $seat) {
        $place = explode(' ', $seat);
        if($place[1] != " " && $place[1] != "" && $data[$place[0]][$place[1]]["status"] != "available") {
            $success = false;
            $problem = $problem.$place[0]." ".$place[1].",";
        }
    }


    if($success) {
        $quantityParterre = 0;
        $quantityBalcon = 0;

        $placesParterre = explode(',', $placesParterre);
        $placesBalcon1 = explode(',', $placesBalcon1);
        $placesBalcon2 = explode(',', $placesBalcon2);

        // Loop through the selected seats and update the status and reserved_by fields
        foreach ($placesParterre as $seat) {
            $place = explode(' ', $seat);
            $data[$place[0]][$place[1]]["status"] = "reserved";
            if ($place[1] != " " && $place[1] != "")
                $quantityParterre = $quantityParterre + 1;
        }
        foreach ($placesBalcon1 as $seat) {
            $place = explode(' ', $seat);
            $data[$place[0]][$place[1]]["status"] = "reserved";
            if ($place[1] != " " && $place[1] != "")
                $quantityBalcon = $quantityBalcon + 1;
        }
        foreach ($placesBalcon2 as $seat) {
            $place = explode(' ', $seat);
            $data[$place[0]][$place[1]]["status"] = "reserved";
            if ($place[1] != " " && $place[1] != "")
                $quantityBalcon = $quantityBalcon + 1;
        }

        if (file_put_contents("js/seat-reservation.json", json_encode($data)) !== false) {
            $payment = new \App\StripePayment(STRIPE_SECRET);
            $payment->startPayment($quantityParterre, $quantityBalcon, explode(',', $places));

            echo 'success';
        }
    }
    else {
        header("Refresh: 0; url=error.php?places=" . $problem);
    }
    flock($fp, LOCK_UN);
}
else {
        // Failed to obtain a lock
}

fclose($fp);