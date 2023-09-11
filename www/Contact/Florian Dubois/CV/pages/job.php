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
    <title><?php if($lang=="fr"){ echo "Recherches_de_job()";} else echo "Job_Interest()"; ?></title>
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

<?php if($lang=="fr"){ echo "
    <h2>Quels sont mes demandes d'emplois ?</h2>
    ";} else echo "
    <h2>What Am I looking for ?</h2>
"; ?>

<br>

<button class='accordion'><?php if($lang=="fr"){ echo "Stages";} else echo "Internships"; ?></button>
<div class='panel'>
    <div class='row'>
        <div class='col-md-8' style="margin-top : 1em; margin-bottom: 0.5em">
            <?php if($lang=="fr"){ echo "
                <p>Je cherche un stage pour déveloper mes compétences ou en acquérir de nouvelles. Je souhaite surtout découvrir le métier de l'ingénieur dans un cadre plus concret que les cours et TP.</p>
                <p>Mon stage idéal se déroulerai durant 12 semaines, de juillet à septembre, dans la région de Mons ou Bruxelles. Il serait orienté management et gestion de projet.</p>
            ";} else echo "
                <p>I'm looking for a internship to improve my skills or develop new ones. I really want to discover the engineer's job by a more concrete way than just lesson and practical work.</p>
                <p>My ideal internship would last 12 weeks, from July to September, and would be located around Mons or Brussels. It would be management or project leading oriented.</p>
            "; ?>
        </div>
        <div class='col-md-4'>
            <img src='../img/mentor.jpg' alt='me' class='centered_img' style='max-width: 40%'>
        </div>
    </div>
</div>

<br>

<button class='accordion'><?php if($lang=="fr"){ echo "Emploi régulier";} else echo "Job"; ?></button>
<div class='panel'>
    <div class='row'>
        <div class='col-md-8' style="margin-top : 1em; margin-bottom: 0.5em">
            <?php if($lang=="fr"){ echo "
                <p>Je cherche un emploi très flexible, qui me permet de passer 2h par jour comme 12h, en fonction de mon horaire. Une sorte de projet avec des dates butoires qui me permettrait de concilier travail et études.</p>
            ";} else echo "
                <p>I'm looking for a very, very flexible job, who could allow me to spend as much as 2h or 12h a day, depending on my daily planning. A kind of project with deadlines, which could help me to conciliate studies and work.</p>
            "; ?>
        </div>
        <div class='col-md-4'>
            <img src='../img/job.jpg' alt='me' class='centered_img' style='max-width: 40%'>
        </div>
    </div>
</div>


<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            /* Toggle between adding and removing the "active" class,
            to highlight the button that controls the panel */
            this.classList.toggle("active");

            /* Toggle between hiding and showing the active panel */
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }

</script>
</body>
