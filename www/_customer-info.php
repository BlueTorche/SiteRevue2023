<?php

    $data = json_decode(file_get_contents("js/seat-reservation.json"), true);

    $SeatsParterre = $_GET["selectedSeatsParterre"];
    $SeatsBalcon1  = $_GET["selectedSeatsBalcon1"];
    $SeatsBalcon2  = $_GET["selectedSeatsBalcon2"];


    $key = "$SeatsParterre;$SeatsBalcon1;$SeatsBalcon2";

    $selectedSeatsParterre = explode(',',$SeatsParterre);
    $selectedSeatsBalcon1  = explode(',',$SeatsBalcon1);
    $selectedSeatsBalcon2  = explode(',',$SeatsBalcon2);

    $null = true;
    $error = false;
    // Loop through the selected seats and update the status and reserved_by fields
    foreach ($selectedSeatsParterre as $seat) {
        if(!$seat == "") {
            if($data["parterre"][$seat]["reserved_by"] != $key)
                $error = true;
            $null = false;
        }
    }

    foreach ($selectedSeatsBalcon1 as $seat) {
        if(!$seat == "") {
            if($data["balon1"][$seat]["reserved_by"] != $key)
                $error = true;
            $null = false;
        }
    }

    foreach ($selectedSeatsBalcon2 as $seat) {
        if(!$seat == "") {
            if($data["balcon2"][$seat]["reserved_by"] != $key)
                $error = true;
            $null = false;
        }
    }

    $error = $error || $null;

    if($error)
        echo "error $key $SeatsParterre $SeatsBalcon1 $SeatsBalcon2";
    else { ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Contact</title>
    <?php include('include-php/Head.php');?>
</head>
<body>
    <section style="width: 100%; display: flex; align-items: center">
    <div class="card" style="display: flex; align-items: center; margin: 100px auto;">
        <form style="margin: 10px auto;">
            <label for="first-name">Prénom :</label>
            <input type="text" id="first-name" name="first-name" required>
            <br>
            <label for="last-name">Nom :</label>
            <input type="text" id="last-name" name="last-name" required>
            <br>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="phone">Téléphone :</label>
            <input type="tel" id="phone" name="phone" required>
            <br>
            <button type="button" onclick="window.location.href='cancel.html'">Annuler</button>
            <button type="submit">Payer</button>
        </form>
    </div>
    </section>

<?php include('include-php/footer.php');?>
</body>
<?php } ?>