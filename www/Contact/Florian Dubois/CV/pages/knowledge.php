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
    <title><?php if($lang=="fr"){ echo "Connaissances()";} else echo "Knowledge()"; ?></title>
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
    <div class="row">
        <div class="wf-container1">
            <div class="wf-box1" onclick="toggle(0)">
                <img src="../img/math.png">
                <div class="content">
                    <?php if($lang=="fr"){ echo "
                    <h3>Math</h3>
                    <p>Les mathématiques forment la base de toutes les connaissances scientifiques actuelles et à venir. Les outils dévelopés au cours des siècles écoulés permettent aux scientifiques d'aujourd'hui d'analyser les situations et d'attaquer les problèmes sous de nouveaux angles.</p>
                    <p>-Cliquez pour plus d'info-</p>
                    ";} else echo "
                    <h3>Math</h3>
                    <p>Mathematics is the foundation of current and future scientific knowledges. The tools developed along the past centuries allows to today's scientists to analyze any situation and approach problems from many new points of view.</p>
                    <p>-Click for more info-</p>
                    "; ?>

                </div>
            </div>
            <div class="popup" id="popup0">
                <ul>
                    <?php if($lang=="fr"){ echo "
                    <li>Logique Mathématique</li>
                    <li>Théorie des Groupes</li>
                    <li>Optimisation Linéaire (Simplexe, Branch and bound)</li>
                    <li>Optimisation non Linéaire (Lagrangien)</li>
                    <li>Equations Différentielles</li>
                    <li>Analyse Numérique</li>
                    <li>Applications Linéaires</li>
                    <li>Analyse Complexe</li>
                    <li>Géométrie Spatiale</li>
                    <li>Probabilité et Statistique</li>
                    <li>Transformées Intégrales</li>
                    <li>Signaux, Systèmes et Commandes</li>
                    <li>Traitement du Signal</li>
                    <li>Data Mining (ACP, AFD, AFC, Anova, Classification)</li>
                    <li>Graphes</li>
                    <li>Optimisation Combinatoire</li>
                    <li>Analyse des Séries Saisonaire (ARMA, SARIMA, ...)</li>
                    ";} else echo "
                    <li>Mathematical Logic</li>
                    <li>Group Theory</li>
                    <li>Linear Optimisation (Simplex, Branch and bound)</li>
                    <li>Nonlinear Optimisation (Lagrangian)</li>
                    <li>Differential Equations</li>
                    <li>Numerical Analysis</li>
                    <li>Linear Applications</li>
                    <li>Complex Analysis</li>
                    <li>Spatial Geometry</li>
                    <li>Probability and Statistics</li>
                    <li>Integral Transforms</li>
                    <li>Signal, System and Communication</li>
                    <li>Signal Processing</li>
                    <li>Data Mining (ACP, AFD, AFC, Anova, Classification)</li>
                    <li>Graphs</li>
                    <li>Combinatorial Optimisation</li>
                    <li>Stream Data Analysis (ARMA, SARIMA, ...)</li>
                    "; ?>
                </ul>
                <a href="#" onclick="toggle(0)">Close</a>
            </div>
            <div class="wf-box1" onclick="toggle(1)">
                <img src="../img/physique.jpg" >
                <div class="content">
                    <?php if($lang=="fr"){ echo "
                    <h3>Physique</h3>
                    <p>La physique est le moteur principal de la compréhension du monde dans lequel nous vivons. Observer et comprendre, telle est la philosophie pronée.</p>
                    <p>-Cliquez pour plus d'info-</p>
                    ";} else echo "
                    <h3>Physics</h3>
                    <p>Physics est the main engine of world comprehension. 'Observe and understand' is its wisdom.</p>
                    <p>-Click for more info-</p>
                    "; ?>

                </div>
            </div>
            <div class="popup" id="popup1">
                <ul>
                    <?php if($lang=="fr"){ echo "
                    <li>Mouvement du Point Matériel</li>
                    <li>Optique</li>
                    <li>Relativité</li>
                    <li>Effet Nucléaire</li>
                    <li>Eléments de Mécanique Quantique</li>
                    <li>Phénomènes Ondulatoires</li>
                    ";} else echo "
                    <li>Material Point Movement Analysis</li>
                    <li>Optic</li>
                    <li>Relativity</li>
                    <li>Nuclear Effect</li>
                    <li>Quantum Mechanics</li>
                    <li>Wave Analysis</li>
                    "; ?>
                </ul>
                <a href="#" onclick="toggle(1)">Close</a>
            </div>
            <div class="wf-box1" onclick="toggle(6)">
                <img src="../img/gestion.png">
                <div class="content" >
                    <?php if($lang=="fr"){ echo "
                    <h3>Gestion d'entreprise</h3>
                    <p>La gestion d'entreprise est la discipline majeure d'un entrepreneur. Les capacités de leadership ne suffisent pas : il faut des outils plus scientifiques pour garder le cap.</p>
                    <p>-Cliquez pour plus d'info-</p>
                    ";} else echo "
                    <h3>Company management</h3>
                    <p>Company management is the major discipline of an entrepreneur. Leaderships skills are not enough : more scientific methods are needed to ensure stability.</p>
                    <p>-Click for more info-</p>
                    
                    "; ?>
                </div>
            </div>
            <div class="popup" id="popup6">
                <ul>
                    <?php if($lang=="fr"){ echo "
                    <li>Lois du Marché</li>
                    <li>Gestion d'Entreprise (Bilan, Amortissement, Prêts et Intérêts)</li>
                    <li>Aide Multicritère à la Décision</li>
                    <li>Modélisation des Procédés</li>
                    <li>Analyse Financière</li>
                    ";} else echo "
                    <li>Market Rules</li>
                    <li>Company Management (Balance Sheet, Depreciation, Loan and Interest)</li>
                    <li>Help to Decision Making</li>
                    <li>Process Mining</li>
                    <li>Financial Analysis</li>
                    "; ?>
                </ul>
                <a href="#" onclick="toggle(6)">Close</a>
            </div>
            <div class="wf-box1" onclick="toggle(2)">
                <img src="../img/chimie.jpg" >
                <div class="content">
                    <?php if($lang=="fr"){ echo "
                    <h3>Chimie</h3>
                    <p>La chimie est le coeur du comportement de la matière et des procédés de fabrication. Elle est le moteur d'une grosse partie de l'industrie.</p>
                    <p>-Cliquez pour plus d'info-</p>
                    ";} else echo "
                    <h3>Chemistry</h3>
                    <p>Chemistry is the heart of matter and industrial manufacturing processes. It's the engine of a large part of industry.</p>
                    <p>-Click for more info-</p>
                    "; ?>

                </div>
            </div>
            <div class="popup" id="popup2">
                <ul>
                    <?php if($lang=="fr"){ echo "
                    <li>Structure Atomique</li>
                    <li>Phénomène de Réaction Chimique</li>
                    <li>Oxydation/Reduction</li>
                    <li>Eléments de Chimie Organique</li>
                    <li>Thermodynamique</li>
                    <li>Thermique</li>
                    <li>Etude des Matériaux</li>
                    ";} else echo "
                    <li>Atomic Structure</li>
                    <li>Chemical Reaction Study</li>
                    <li>Redox Phenomenon</li>
                    <li>Organic Chemistry</li>
                    <li>Thermodynamics</li>
                    <li>Heat Transport</li>
                    <li>Materials Study</li>
                    "; ?>
                </ul>
                <a href="#" onclick="toggle(2)">Close</a>
            </div>
            <div class="wf-box1" onclick="toggle(3)">
                <img src="../img/meca.jpeg">
                <div class="content">
                    <?php if($lang=="fr"){ echo "
                    <h3>Mécanique</h3>
                    <p>La mécanique est l'étude du comportement des solides dans l'espace. Elle permet de concervoir de nombreux éléments du quotidien.</p>
                    <p>-Cliquez pour plus d'info-</p>
                    ";} else echo "
                    <h3>Mechanics</h3>
                    <p>Mechanics is the study of the behavior of solids in space. It helps to design many current object in everyday life.</p>
                    <p>-Click for more info-</p>
                    "; ?>

                </div>
            </div>
            <div class="popup" id="popup3">
                <ul>
                    <?php if($lang=="fr"){ echo "
                    <li>Statique et Equilibre des Systèmes Mécaniques</li>
                    <li>Cinématique</li>
                    <li>Méthodes Energétiques (Travaux Virtuels, Principe du Minimum d'Energie Potentielle)</li>
                    <li>Dynamique</li>
                    <li>Vibration des Systèmes Mécaniques</li>
                    <li>Mécanique des Fluides</li>
                    ";} else echo "
                    <li>Static and Mechanical Systems Equilibrium</li>
                    <li>Cinematic</li>
                    <li>Energy Methods (Virtual Work, Principle of Minimum Potential Energy)</li>
                    <li>Dynamic</li>
                    <li>Vibration of Mechanical Systems</li>
                    <li>Fluid Mechanics</li>
                    "; ?>
                </ul>
                <a href="#" onclick="toggle(3)">Close</a>
            </div>
            <div class="wf-box1" onclick="toggle(4)">
                <img src="../img/elec.PNG">
                <div class="content">
                    <?php if($lang=="fr"){ echo "
                    <h3>Eletricité</h3>
                    <p>L'électricité est une branche prédominante des sciences de notre époque : production, distribution, utilisation, ... Tout objet actuel possède sa part d'électrique.</p>
                    <p>-Cliquez pour plus d'info-</p>
                    ";} else echo "
                    <h3>Electricity</h3>
                    <p>Electricity is a predominant branch of current sciences : production, distribution, use, ... Every object has its share of electricity.</p>
                    <p>-Click for more info-</p>
                    "; ?>

                </div>
            </div>
            <div class="popup" id="popup4">
                <ul>
                    <?php if($lang=="fr"){ echo "
                    <li>Etude des Particules Electriques</li>
                    <li>Magnétisme</li>
                    <li>Electromagnétisme</li>
                    <li>Composants Electriques</li>
                    <li>Théorie Générale des Machines Electriques</li>
                    ";} else echo "
                    <li>Electric Particles Study</li>
                    <li>Magnetism</li>
                    <li>Electromagnetism</li>
                    <li>Electrical Components</li>
                    <li>General Theory of Electrical Machines</li>
                    "; ?>
                </ul>
                <a href="#" onclick="toggle(4)">Close</a>
            </div>
            <div class="wf-box1" onclick="toggle(5)">
                <img src="../img/info.jpg">
                <div class="content">
                    <?php if($lang=="fr"){ echo "
                    <h3>Informatique</h3>
                    <p>L'informatique est la branche montante des sciences. Sa portée et son utilisation ne font que croitre depuis des années. L'informatique fait partie intégrante de la vie courante, mais son impact écologique actuel est trop sous estimé.</p>
                    <p>-Cliquez pour plus d'info-</p>
                    ";} else echo "
                    <h3>Computer Science</h3>
                    <p>Computer Science is the rising star of current sciences. Its scope and use have grown steadily for years. Computer Science is fully integrated into our life, but its ecological impact is underestimated.</p>
                    <p>-Click for more info-</p>
                    "; ?>

                </div>
            </div>
            <div class="popup" id="popup5">
                <ul>
                    <?php if($lang=="fr"){ echo "
                    <li>Structure de Données et Algorithmes</li>
                    <li>Méthodologie Orientée Objet</li>
                    <li>Modélisation Logicielle</li>
                    <li>Java, C++, Python</li>
                    <li>Big Data et Modélisation de Base de Données</li>
                    <li>Réseaux Informatiques</li>
                    <li>Intelligence Artificielle</li>
                    <li>Expertise Digitale et Logicielle</li>
                    <li>Cybersécurité</li>
                    <li>Competitive Programming</li>
                    ";} else echo "
                    <li>Data Structure and Algorithms</li>
                    <li>Object Oriented Methodology</li>
                    <li>Software Modeling</li>
                    <li>Java, C++, Python</li>
                    <li>Big Data and Database Design</li>
                    <li>Computer Network</li>
                    <li>Artificial Intelligence</li>
                    <li>Digital and Software Expertise</li>
                    <li>Cybersecurity</li>
                    <li>Competitive Programming</li>
                    "; ?>
                </ul>
                <a href="#" onclick="toggle(5)">Close</a>
            </div>
            <div class="wf-box1" onclick="toggle(7)">
                <img src="../img/toolbox.png">
                <div class="content">
                    <?php if($lang=="fr"){ echo "
                    <h3>Foure-Tout</h3>
                    <p>Toutes les compétences annexes que j'ai pu acquérir au cours de ma vie.</p>
                    <p>-Cliquez pour plus d'info-</p>
                    ";} else echo "
                    <h3>Others</h3>
                    <p>All other knowledges I aquired during my life.</p>
                    <p>-Click for more info-</p>
                    "; ?>

                </div>
            </div>
            <div class="popup" id="popup7">
                <ul>
                    <?php if($lang=="fr"){ echo "
                    <li>Brevet Européen de Premiers Secours</li>
                    <li>Utilisation de SAP</li>
                    <li>Travail en Groupe</li>
                    <li>Patience</li>
                    <li>Créativité</li>
                    <li>Autonomie</li>
                    <li>Fast Learning</li>
                    <li>Geogebra</li>
                    ";} else echo "
                    <li>European First Aid Certificate</li>
                    <li>SAP</li>
                    <li>Team Working</li>
                    <li>Patience</li>
                    <li>Creativity</li>
                    <li>Autonomy</li>
                    <li>Fast Learning</li>
                    <li>Geogebra</li>
                    "; ?>
                </ul>
                <a href="#" onclick="toggle(7)">Close</a>
            </div>
        </div>

    </div>
</div>
<script src="../js/responsive_waterfall.js"></script>
<script>
    // use querySelector/querySelectorAll internally
    var waterfall = new Waterfall({
        containerSelector: '.wf-container1',
        boxSelector: '.wf-box1',
        minBoxWidth: 450
    });
</script>
<script>
    function toggle(id){
        document.querySelectorAll(".popup").forEach(function (elem){
            if(elem.classList.contains('active') && elem.id !== "popup"+id){
                elem.classList.toggle('active')
            }
        })
        var popup = document.getElementById("popup"+id)
        popup.classList.toggle('active')
    }
</script>
</body>
