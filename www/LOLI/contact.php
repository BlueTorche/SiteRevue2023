<?php


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Contact</title>
    <?php include('include-php/Head.php');?>
</head>
<body>
<?php include('include-php/navbar.php');?>


<div class="header" style="background-image:url(img/loli/kannaBG.jpg)">
    <h1 class="header-text">Nous Contacter</h1>
    <div class="triangle-bottom-big"></div>
    <div class="triangle-bottom-small"></div>
</div>
<style>
    @media screen and (max-width: 825px) {
        .header {
            background-position: 33%;
        }
    }
</style>
<div style="height:10vh"></div>

<h1 style="width: 100%">Gentils Organisateurs</h1>
<section class="card-section">
    <div class="card">
        <img class="card-image" src="img/jules.png" alt="jules">
        <div class="card-text">
            <h3> Jules Bourgeois </h3>
            <br> <a href="mailto:juleshbourgeois@gmail.com">juleshbourgeois@gmail.com</a>
            <br> <a href="mailto:jules.BOURGEOIS@umons.ac.be">jules.BOURGEOIS@umons.ac.be</a>
            <br> <a href="tel:0471424371">+32 471 42 43 71</a>
        </div>
    </div>
    <div class="card">
        <img class="card-image" src="img/alex.png" alt="Alex">
        <div class="card-text">
            <h3> Alexandre Flas </h3>
            <br> <a href="mailto:alexandreflas@hotmail.be">alexandreflas@hotmail.be</a>
            <br> <a href="mailto:alexandre.FLAS@umons.ac.be">alexandre.FLAS@umons.ac.be</a>
            <br> <a href="tel:0478722837">+32 478 72 28 37</a>
        </div>
    </div>
    <div class="card">
        <img class="card-image" src="img/Flo.jpg" alt="Flo">
        <div class="card-text">
            <h3> Florian Dubois </h3>
            <br> <a href="mailto:florian.dubois@me.com">florian.dubois@me.com</a>
            <br> <a href="mailto:florian.DUBOIS@umons.ac.be">florian.DUBOIS@umons.ac.be</a>
            <br> <a href="tel:0474030263">+32 474 03 02 63</a>
        </div>
    </div>
</section>

<h1 style="width: 100%">Responsables Inutiles</h1>
<section class="card-section">
    <div class="card">
        <img class="card-image" src="img/PO.png" alt="po">
        <div class="card-text">
            <h3> Pierre-Olivier Tits </h3>
            <br> <a href="mailto:pierre.oli@hotmail.fr">pierre.oli@hotmail.fr</a>
            <br> <a href="tel:0499890941">+32 499 89 09 41</a>
        </div>
    </div>
    <div class="card">
        <img class="card-image" src="img/emilien.png" alt="emilien">
        <div class="card-text">
            <h3> Emilien Flas </h3>
            <br> <a href="mailto:emilien.FLAS@umons.ac.be">emilien.FLAS@umons.ac.be</a>
            <br> <a href="tel:0477533682">+32 477 53 36 82</a>
        </div>
    </div>
</section>

<h1 style="width: 100%">Responsable Web</h1>
<section class="card-section">
    <div class="card">
        <img class="card-image" src="img/kevin.jpg" alt="kevin">
        <div class="card-text">
            <h3> Kévin Dubrulle </h3>
            <br> <a href="mailto:dubrulle_kevin@hotmail.be">dubrulle_kevin@hotmail.be</a>
            <br> <a href="mailto:kevin.DUBRULLE@umons.ac.be">kevin.DUBRULLE@umons.ac.be</a>
            <br> <a href="tel:0498472085">+32 498 47 20 85</a>
        </div>
    </div>
</section>
<?php include('include-php/footer.php');?>
</body>
