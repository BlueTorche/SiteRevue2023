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


<div class="header" style="background-image:url(img/loli/MeguminBG.jpg)">
    <h1 class="header-text">Revue des Lolis 2023 <br> 28 Avril 2023</h1>
    <a href="#sponsordiv" class="header-button">Réservez votre place !</a>
    <div class="triangle-bottom-big"></div>
    <div class="triangle-bottom-small"></div>
</div>
<div style="height:10vh"></div>


<section class="section-container">
    <div class="section-left">
        <h3>La Revue des Mines</h3>
        <p>La Revues des Mines est une pièce de théâtre satirique organisée par les étudiants de la
            Faculté Polytechnique de Mons tous les 5 ans uniquement. Elle met en scène nos chers
            professeurs dans un scénario loufoque et rocambolesque, leur faisant vivre des péripéties
            dont ils se passeraient bien. Il s’agit de notre manière de les remercier pour les 5 années
            passées avec eux, et un moyen pour nous de donner notre point de vue sur ce qui va et ne
            va pas dans notre chère faculté.</p>
    </div>
    <div class="section-right">
        <img src="img/loli/FixHut.png" alt="fixhut">
    </div>
</section>
<section class="section-container">
    <div class="section-left">
        <img src="img/loli/communismBG.png" alt="communismBG">
    </div>
    <div class="section-right">
        <h3>La Revue des Lolis 2023</h3>
        <p>La Revue des Lolis se déroule le 28 avril 2023. C'est une contre-revue organisée par le responsable
            web qui sera bien meilleure que la revue original ! Cette revue sera en effet remplie de Loli, de quoi
            plaire au plus dégénérés d'entre vous. On pourra se faire des marathons d'animés, des LAN sur les meilleurs
            jeux, et même y ajouter quelques 190671 pour les plus connaisseurs d'entre vous. </p>
    </div>
</section>
<section aria-label="Sponsor" >
    <div id="sponsordiv" class="fixed-background-image section" style="background-image:url(img/loli/HatsuneBG.jpg)">
        <div class="triangle-container">
            <div class="triangle-top-big"></div>
            <div class="triangle-top-small"></div>
        </div>

        <a href="reservation.php" class="header-button">Réservez votre place !</a>
        <p>Merci à nos sponsors</p>
        <div class="grid">
            <a href="https://www.carrefour.be" target="_blank">
                <img src="img/sponsor-logo/carrefour.jpg" alt="carrefour">
            </a>
            <a href="https://www.lottomonsexpo.be/" target="_blank">
                <img src="img/sponsor-logo/lottomonsexpo.jpg" alt="lottomonsexpo">
            </a>
            <a href="https://www.facebook.com/ORE.UMONS/" target="_blank">
                <img src="img/sponsor-logo/ore.jpg" alt="ore">
            </a>
            <a href="https://web.umons.ac.be/fr/" target="_blank">
                <img src="img/sponsor-logo/umons.jpg" alt="umons">
            </a>
            <a href="https://web.umons.ac.be/fpms/fr/" target="_blank">
                <img src="img/sponsor-logo/fpms.png" alt="fpms">
            </a>
            <a href="https://www.carrefour.be" target="_blank">
                <img src="img/sponsor-logo/carrefour.jpg" alt="carrefour">
            </a>
            <a href="https://www.lottomonsexpo.be/" target="_blank">
                <img src="img/sponsor-logo/lottomonsexpo.jpg" alt="lottomonsexpo">
            </a>
            <a href="https://www.facebook.com/ORE.UMONS/" target="_blank">
                <img src="img/sponsor-logo/ore.jpg" alt="ore">
            </a>
            <a href="https://web.umons.ac.be/fr/" target="_blank">
                <img src="img/sponsor-logo/umons.jpg" alt="umons">
            </a>
            <a href="https://web.umons.ac.be/fpms/fr/" target="_blank">
                <img src="img/sponsor-logo/fpms.png" alt="fpms">
            </a>
        </div>
    </div>
</section>



<?php include('include-php/footer.php');?>
<script src="js/carousel.js"></script>


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
