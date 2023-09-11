<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Confirmation</title>
    <?php include('include-php/Head.php');?>
</head>
<body>
<section style="width: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center">
    <div class="card" style="display: flex; flex-direction: column; align-items: center; margin: 100px auto; padding: 20px;;">
        <p style="text-align: center; font-size: 24px;">Merci de votre paiement ! Vous recevrez un email de confimation contenant votre place d'ici peu (pensez à vérifier vos spams).</p>
    </div>
    <a href="index.php" class="header-button jungle-font" style="margin: 10px auto;">retour vers l'acceuil</a>
</section>

<div style="height: 10vh"></div>

<?php include('include-php/footer.php');?>
</body>
<?php
// Redirect to index.php after 5 seconds
header("Refresh: 10; url=index.php");
?>
</html>
