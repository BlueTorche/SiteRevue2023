<?php
$lang = "eng";
if($_GET){
    $lang = $_GET["lang"];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Main()</title>
    <link rel="icon" href="../img/Meg-head.png">
    <!--<link rel="shortcut icon" href="../img/logo%20revue.png">-->
    <!-- Icones -->
    <script src="https://kit.fontawesome.com/d250806ec8.js" crossorigin="anonymous"></script>
    <!-- Boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Plugins -->
    <link href="/css/style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
</head>
<body>
<?php include("navbar.php"); ?>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <p style="padding-top: 1.3em"></p>
            <img src="../img/profil.jpg" alt="me" class="centered_img" style="max-width: 60%">
        </div>
        <div class="col-md-8">
            <p style="margin-bottom: 2cm"></p>
            <div class="container frame">
                <p style="margin-bottom: 0.2cm"></p>
                <ul>
                    <li class="frame-text">Florian Dubois</li>
                    <br>
                    <li class="frame-text"> <?php if($lang=="fr"){ echo "Etudiant ingénieur civil";} else echo "Student in civil engineering"; ?></li>
                    <br>
                    <li class="frame-text"><?php if($lang=="fr"){ echo "21 ans";} else echo "21 years old"; ?></li>
                    <br>
                    <li class="frame-text">E-mail : <a href="mailto : florian.dubois@me.com">florian.dubois@me.com</a></li>
                    <br>
                    <li class="frame-text"><?php if($lang=="fr"){ echo "Téléphone";} else echo "Phone"; ?> : +32 474/03 02 63</li>
                    <br>
                    <li class="frame-text"><?php if($lang=="fr"){ echo "Titulaire du permis B";} else echo "Driving Lissence"; ?></li>
                </ul>
                <p style="margin-bottom: 0.2cm"></p>
            </div>
        </div>
        <div class="col-md-1" ></div>
        <div class="col-md-6" style="margin-top: 3cm">
            <h2>Formations</h2>
            <?php if($lang=="fr"){ echo "
            <p>2021 : Fin de mon bachelier en ingénierie civile. Début de mon Master, spécialité informatique et gestion</p>
            <p>2018 : Début de mon bachelier en ingénierie civile, Mons</p>
            <p style='display: block'>2018 : Fin de mes secondaires et obtention du CESS (Certificat d'Etude Secondaire Supérieure)</p>
            <p>2012 - 2018 : Etudes secondaires (Math 8h, Sciences 6h, Latin, Grec)</p>
            ";} else echo "
            <p>2021 : End of my Bachelor degree in civil engineering. Start of my Master's degree, IT and management speciality</p>
            <p>2018 : Start of my Bachelor degree in civil engineering, Mons</p>
            <p style='display: block'>2018 : End of high school and obtaining the CESS (Certificate of High School Education)</p>
            <p>2012 - 2018 : High school (Math, Sciences, Latin, Greek)</p>
            "; ?>

            <br>

            <h2>Hobbies</h2>
            <?php if($lang=="fr"){ echo "
            <ul>
             <li>Lecture</li>
             <li>Violon</li>
             <li>Jeux Vidéos</li>
             <li>Jeux de Société</li>
             <li>Jeux de Rôles</li>
             <li>Magic the Gathering</li>
             <li>Animes Japonais & Mangas</li>
            </ul>  
            ";} else echo "
            <ul>
             <li>Reading</li>
             <li>Violin</li>
             <li>Video Games</li>
             <li>Board Games</li>
             <li>Roleplay</li>
             <li>Magic the Gathering</li>
             <li>Japanese Anime & Mangas</li>
            </ul> 
            "; ?>
        </div>
        <div class="col-md-4" style="margin-top: 3cm; align-content: center">
            <?php if($lang=="fr"){ echo "
            <h3 style='text-align: center'>Anglais</h3>
            ";} else echo "
            <h3 style='text-align: center'>English</h3>
            "; ?>
            <br>
            <img src="../img/english.png" alt="english skill" style="max-width: 100%">
        </div>
    </div>
</div>
</body>
