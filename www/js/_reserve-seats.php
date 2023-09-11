<?php
// Load the JSON data from the file
$data = json_decode(file_get_contents("seat-reservation.json"), true);

$key = "ABC1123";

$selectedSeats = explode(',',$_POST["selectedSeats"]);

// Loop through the selected seats and update the status and reserved_by fields
foreach ($selectedSeats as $seat) {
    $place = explode(' ', $seat);
    $data[$place[0]][$place[1]]["status"] = "reserved";
    $data[$place[0]][$place[1]]["reserved_by"] = $key;
}


/*
$SeatsParterre = $_POST["selectedSeats"];
$SeatsBalcon1  = $_POST["selectedSeatsBalcon1"];
$SeatsBalcon2  = $_POST["selectedSeatsBalcon2"];

$key = "$SeatsParterre;$SeatsBalcon1;$SeatsBalcon2";

$selectedSeatsParterre = explode(',',$SeatsParterre);
$selectedSeatsBalcon1  = explode(',',$SeatsBalcon1);
$selectedSeatsBalcon2  = explode(',',$SeatsBalcon2);

$quantity = [0,0];
$places   = array();

// Loop through the selected seats and update the status and reserved_by fields
foreach ($selectedSeatsParterre as $seat) {
    if(!$seat == "") {
        $data["parterre"][$seat]["status"] = "reserved";
        $data["parterre"][$seat]["reserved_by"] = $key;
        $quantity[0] += 1;
        array_push($places, ["parterre",$seat]);
    }
}

foreach ($selectedSeatsBalcon1 as $seat) {
    if(!$seat == "") {
        $data["balcon1"][$seat]["status"] = "reserved";
        $data["balcon1"][$seat]["reserved_by"] = $key;
        $quantity[1] += 1;
        array_push($places, ["balcon1",$seat]);
    }
}

foreach ($selectedSeatsBalcon2 as $seat) {
    if(!$seat == "") {
        $data["balcon2"][$seat]["status"] = "reserved";
        $data["balcon2"][$seat]["reserved_by"] = $key;
        $quantity[1] += 1;
        array_push($places, ["balcon2",$seat]);
    }
}
*/

// Write the updated data back to the file
if (file_put_contents("seat-reservation.json", json_encode($data)) !== false) {
    // Success message
    echo "success";
} else {
    // Error message
    echo "Error writing data to file";
    $error = error_get_last();
    echo ": " . $error["message"];
}


?>
