<?php
    $errors = $_GET["places"]
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Erreur</title>
    <?php include('include-php/Head.php');?>
</head>
<body>
<section style="width: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center">
    <div class="card" style="display: flex; flex-direction: column; align-items: center; margin: 100px auto;  padding: 20px;">
        <p style="text-align: center; font-size: 24px;">Erreur durant votre réservation. Le(s) siège(s) : <?php echo $errors; ?> est(sont) déjà réservé(s). Cette erreur est probable en cas de forte affluence sur le site. Réessayez avec d'autres places. </p>
    </div>
    <a href="reservation.php" class="header-button jungle-font" style="margin: 10px auto;">retour vers reservation</a>
</section>
<div style="height: 10vh"></div>

<?php include('include-php/footer.php');?>
</body>
</html>
