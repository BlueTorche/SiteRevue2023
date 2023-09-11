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
    <title>Experiences()</title>
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

<div class="container-fluid">
    <?php if($lang=="fr"){ echo "
            <h1>Expériences Professionnelles</h1> 
            ";} else echo "
            <h1>Professional Experiences</h1>
        "; ?>
    <br>

    <div class="row">
        <div class="wf-container1">
            <div class="wf-box1">
                <img src="../img/dow.png">
                <div class="content">
                    <?php if($lang=="fr"){ echo "
                    <h3>Dow Chemical (juillet 2020 et 2021)</h3>
                    <p>Job étudiant chez le géant du silicone. Tâches : renfort testing et chef de projet.</p>
                    <h5><u>Hauts faits</u> : </h5>
                    <ul>
                        <li>2020 : Utilisation d'un auto-clicker pour libérer de plus de 500 ILs sur SAP.</li>
                        <li>2021 : Conception de script python pour compléter des fichiers excels (gain de temps estimé : 40h de travail)</li>
                    </ul>
                    ";} else echo "
                    <h3>Dow Chemical (July 2020 and 2021)</h3>
                    <p>Student job in the giant of silicone. Tasks : testing help and project leader.</p>
                    <p><u>Achievements</u> : </p>
                    <ul>
                        <li>2020 : Use of auto-clicker to automate tasks (releasing more tha 500 SAP ILs) and respect deadline.</li>
                        <li>2021 : Realization of python script to complete Excel files (estimated time saving : 40h of works)</li>
                    </ul>
                    "; ?>
                </div>
            </div>
            <div class="wf-box1">
                <img src="../img/exki.png">
                <div class="content">
                    <?php if($lang=="fr"){ echo "
                    <h3>Exki (Aout 2018)</h3>
                    <p>Serveur caissier dans un fast food healthy.</p>
                    ";} else echo "
                    <h3>Exki (Augustus 2018)</h3>
                    <p>Cashier waiter in a healthy fast food restaurant. </p>
                    "; ?>
                </div>
            </div>
            <div class="wf-box1">
                <img src="../img/banc%20public.jpg">
                <div class="content">
                    <?php if($lang=="fr"){ echo "
                    <h3>Banc Public (Année scolaire 2017-2018)</h3>
                    <p>Professeur particulier à une ASBL qui donne accès à des cours de ratrappage à prix abordable.</p>
                    ";} else echo "
                    <h3>Banc Public (Scholar year 2017-2018)</h3>
                    <p>Private teacher at a non-profit organization that provides access to remedial lessons at affordable prices.</p>
                    "; ?>
                </div>
            </div>
            <div class="wf-box1">
                <img src="../img/epidemik.jpg">
                <div class="content">
                    <?php if($lang=="fr"){ echo "
                    <h3>Maison de la Jeunesse Epidemik d'Ecaussinnes (Aout 2017)</h3>
                    <p>Professeur particulier en math à la Maison de la Jeunesse d'Ecaussinnes (association visant à organiser des activités culturelles et sportives pour les jeunes du village)</p>
                    ";} else echo "
                    <h3>Maison de la Jeunesse d'Ecaussinnes Epidemik (Augustus 2017)</h3>
                    <p>Private math teacher for 'Maison de la Jeunesse' at Ecaussinnes (my hometown)('Maison de la Jeunesse' is an organisation that seek to offer cultural and sporting event for young people of the village, lit. 'Home of youthfulness').</p>
                    "; ?>
                </div>
            </div>

        </div>
    </div>

    <br>
    <?php if($lang=="fr"){ echo "
        <h1>Expériences Scolaires</h1> 
        ";} else echo "
        <h1>Scholar Experiences</h1>
    "; ?>
    <br>

    <div class="row">
        <div class="wf-container2">
            <div class="wf-box2">
                <img src="../img/micro%20cluster.jpg">
                <div class="content">
                    <?php if($lang=="fr"){ echo "
                    <h3>Micro-cluster de démonstration (début 2021 et début 2022)</h3>
                    <p>Dans le cadre d'un projet, mon groupe a mis en place un micro-cluster de démonstration et a développé une interface web pour le gérer. Ce cluster est capable de faire run des applications en conteneurisation avec Docker et Kubernetes sur différentes cartes graphiques (rPi, jetson nano et jetson xavier). </p>
               
                    ";} else echo "
                    <h3>Micro-cluster for demonstration (start 2021 and start 2022).</h3>
                    <p>As a part of a project, my team setup a micro-cluster for demonstration and developed a web interface to control it. This cluster is able to run application with containerization using Docker and Kubernetes on many graphical cards as rPi, jetson anno and jetson xavier.</p>
                    
                    "; ?>
                </div>
            </div>
            <div class="wf-box2">
                <img src="../img/horaire.png">
                <div class="content">
                    <?php if($lang=="fr"){ echo "
                    <h3>Gestion des horaires universitaires (fin 2021)</h3>
                    <p>Dans le cadre d'un projet, mon groupe (composé de 13 personnes) a été chargé de l'optimisation des horaires conçus manuellement par le secrétariat. En trois mois, nous avons développé trois algorithmes de résolution, une interface pour gérer l'ensemble et une base de donnée pour stocker toutes les informations nécéssaires à la création des horaires.</p>
                    ";} else echo "
                    <h3>Management of university timetable (end 2021)</h3>
                    <p>As a part of a project, my team (a total of 13 students) aws asked to take care of our university timetable, wich is done by hand by the secretariat. In 3 month, we've developed 3 algorithm to solve the problem, a web interface to manage the whole thing and a database to stock all the data we need to build the timetable.</p>
                    "; ?>
                </div>
            </div>
            <div class="wf-box2">
                <img src="../img/bapc.png">
                <div class="content">
                    <?php if($lang=="fr"){ echo "
                    <h3>Top 50 au BAPC 2021 (fin 2021)</h3>
                    <p>Le BAPC (Benelux Algorithm Programming Contest) est un concours de programmation européen qui se passe en équipe de 3. Lors des phases qualificatives locales, nous avons fini 1er. Lors des phases de préliminaire, nous avons fini dans le top 50.</p>
                    ";} else echo "
                    <h3>Top 50 at the BAPC 2021 (end 2021)</h3>
                    <p>BAPC (Benelux Algorithm Programming Contest) is a European competitive programming contest that takes place in teams of 3. During qualifying phase, we finished 1st, and during preliminary phse, we reached top 50.</p>
                    "; ?>
                </div>
            </div>
            <div class="wf-box2">
                <img src="../img/hashcode.jpg">
                <div class="content">
                    <?php if($lang=="fr"){ echo "
                    <h3>Top 2 Google Hashcode Hub UMons et Top 1 étudiants (début 2022)</h3>
                    <p>Le Google Hashcode est un concours de programmation mondial organisé par Google. Il s'agit toujours d'un problème NP ou l'objectif est de trouver la meilleure solution possible en 4h. Mon équipe s'est classée 2ème du Hub de l'UMons, et 1ère en ne considérant que les équipes d'étudiants.</p>
                    ";} else echo "
                    <h3>Top 2 Google Hashcode in UMons Hub and Top 1 students (start 2022)</h3>
                    <p>Google Hashcode is a global competitive programming contest organized by Google. The problem is always a NP problem where you need to find the best solution possible in 4h. Our team finished 2nd of the UMons hub, and 1st if we only consider students teams.</p>
                    "; ?>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="../js/responsive_waterfall.js"></script>
<script>
    // use querySelector/querySelectorAll internally
    var waterfall1 = new Waterfall({
        containerSelector: '.wf-container1',
        boxSelector: '.wf-box1',
        minBoxWidth: 400
    });
    var waterfall2 = new Waterfall({
        containerSelector: '.wf-container2',
        boxSelector: '.wf-box2',
        minBoxWidth: 400
    });
</script>
</body>
