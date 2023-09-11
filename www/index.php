<?php


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Accueil</title>
    <?php include('include-php/Head.php');?>
</head>
<body>
<?php include('include-php/navbar.php');?>


<div class="header" style="background-image:url(img/background/cover_event_horizontal_reduced.png);">
    <h1 class="header-text BangersFont">
        Revue des Mines 2023
        <br><strong>Imayini : Bienvenue dans la jungle</strong>
        <br>Vendredi 28 Avril
    </h1>
    <a href="#sponsordiv" class="header-button jungle-font"> reservez votre place !</a>
    <div class="triangle-bottom-big"></div>
    <div class="triangle-bottom-small"></div>
</div>
<div style="height:10vh"></div>

<div class="info-section">
    <h1 class="jungle-font">Informations utiles :</h1>
    <p><strong>Date :</strong> 28 avril 2023 à 20h00</p>
    <p><strong>Lieu :</strong> Théâtre Royal de Mons - Grand-Place 22 – 7000 Mons</p>
    <p><strong>Prix :</strong> 60€ pour les places parterre, 50€ pour les places balcon</p>
    <p><strong>Contact :</strong> <a href="mailto:revuedesmines2023@gmail.com">revuedesmines2023@gmail.com</a></p>
</div>

<div>
    <section class="countdown-timer">
        <h1 class="jungle-font">Compte a rebours avant Imayini :</h1>
        <div id="countdown"></div>
    </section>
</div>

<section class="section-container">
    <div class="section-left">
        <h3 class="jungle-font">la revue des mines</h3>
        <p>La Revue des Mines est une pièce de théâtre satirique organisée par les étudiants de la
            Faculté Polytechnique de Mons tous les 5 ans. Elle met en scène nos chers
            professeurs dans un scénario loufoque et rocambolesque, leur faisant vivre des péripéties
            dont ils se passeraient bien. Il s’agit de notre manière de les remercier pour les 5 années
            passées avec eux, et un moyen pour nous de donner notre point de vue sur ce qui va et ne
            va pas dans notre chère faculté.</p>
    </div>
    <div class="section-right">
        <img src="img/revue2018.png" alt="fixhut">
    </div>
</section>
<section class="section-container">
    <div class="section-left">
        <img src="img/background/Logo Bouteille croped reduced.png" alt="communismBG">
    </div>
    <div class="section-right">
        <h3 class="jungle-font">Imayini : bienvenue dans la jungle</h3>
        <p>Oyez, oyez paisibles et bons bourgeois, chers étudiants polytechs, chers amis,
            <br>Vous l'aurez compris, c'est le retour de la tant attendue <strong>Revue des Mines</strong> qui, cette année, renaît enfin de ses cendres.
            <br>Pour cette édition luxuriante, nous vous proposons de venir assister à la seule et unique représentation de "<strong>Imayini : Bienvenue dans la jungle</strong>" ce vendredi 28 avril 2023 !
            <br>Tous les étudiants se sont rassemblés pour vous offrir un spectacle digne de vos 5 ans d'attente ! Décors, costumes, danses, musiques, chants, ... Ils ont tout mis en œuvre pour vous offrir cette année une édition d'exception ! Mais où sont-ils passés maintenant ?
            <br> Rendez-vous le <strong>vendredi 28 avril 2023 au Théâtre Royal de Mons</strong> pour le découvrir !
        </p>
    </div>
</section>

<section aria-label="Sponsor" >
    <div id="sponsordiv" class="fixed-background-image section" style="background-image:url(img/background/jungle.jpg)">
        <div class="triangle-container">
            <div class="triangle-top-big"></div>
            <div class="triangle-top-small"></div>
        </div>

        <a href="reservation.php" class="header-button jungle-font">reservez votre place !</a>
        <p class="header-text jungle-font" style="margin-top: 0">merci a nos sponsors</p>
        <div class="grid">
            <a href="https://web.umons.ac.be/fpms/fr/" target="_blank">
                <img src="img/sponsor-logo/fpms.png" alt="fpms">
            </a>
            <a href="https://polytech-mons-alumni.be/" target="_blank">
                <img src="img/sponsor-logo/Logo_AIMs_New.jpg" alt="aims">
            </a>
            <a href="https://dequachim.be/fr/" target="_blank">
                <img src="img/sponsor-logo/Logo_DEQUACHIM.jpg" alt="dequachim">
            </a>
            <a href="https://www.icareweb.com/fr/" target="_blank">
                <img src="img/sponsor-logo/Logo_ICARE.png" alt="ICARE">
            </a>
            <a href="https://industeel.arcelormittal.com/" target="_blank">
                <img src="img/sponsor-logo/Logo_INDUSTEEL.jpg" alt="INDUSTEEL">
            </a>
            <a href="https://www.ores.be/" target="_blank">
                <img src="img/sponsor-logo/Logo_ORES.png" alt="ORES">
            </a>
            <a href="https://www.thalesgroup.com/fr" target="_blank">
                <img src="img/sponsor-logo/Logo_THALES.jpg" alt="THALES">
            </a>
        </div>
    </div>
</section>



<?php include('include-php/footer.php');?>
<script src="js/carousel.js"></script>
<script src="js/countdown.js"></script>


<!--<section aria-label="Carousel">
    <div class="section-carousel">
        <div class="carousel x-centered-item" data-carousel>
            <button class="carousel-button prev" data-carousel-button="prev">
                &#10554;
            </button>
            <button class="carousel-button next" data-carousel-button="next">
                &#10555;
            </button>
            <ul data-slides class="x-centered-item">
                <li class="slide" data-active>
                    <img src="img/loli/HatsuneBG.jpg" class="x-centered-item slide-img" alt = 'Angry Megumin' style="">
                    <h3 class="x-centered-item">Apprenez en plus sur la Revue des Lolis 2023 et sur la Revue des Mines !</h3>
                    <a class="button" href="apropos.php" style="text-align: center">À Propos de la Revue des Mines</a>
                </li>
                <li class="slide next-slide">
                    <img src="img/loli/AngryDominos.png" class="x-centered-item slide-img" alt = 'Angry Miku' style="background: white;">
                    <h3 class="x-centered-item">Réservez vos places pour la Revue des Lolis 2023 !</h3>
                    <a class="button" href="reservation.php" style="text-align: center">Réservez votre place</a>
                </li>
                <!-<li class="slide">
                    <img src="img/loli/FixHut.png" class="x-centered-item slide-img" alt = 'Fix Megumin' style="background: white;">
                    <h3 class="x-centered-item">Merci à tous nos sponsor sans qui la revue serait impossible.</h3>
                    <a class="button" href="sponsor.php" style="text-align: center">Sur nos Sponsor</a>
                </li>->
                <!-<li class="slide">
                    <img src="img/loli/FixDominos.png" class="x-centered-item slide-img" alt = 'Fix Miku' style="background: white;">
                    <h3 class="x-centered-item">Merci à tous ceux qui aide à organiser l'événement</h3>
                    <a class="button" href="remerciement.php" style="text-align: center">Remerciements</a>
                </li>->
                <li class="slide prev-slide">
                    <img src="img/loli/AngryHut.png" class="x-centered-item slide-img" alt = 'Angry Megumin' style="background: white;">
                    <h3 class="x-centered-item">Besoin d'aide ? Contactez nous ici !</h3>
                    <a class="button" href="contact.php" style="text-align: center">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</section>-->
</body>
