<nav class="navbar">
    <div class="navbar-brand ">
        <a href="index.php"><img src="img/Logo Revue reduced.png" style="height:100%;  filter: invert(100%);"></a>
    </div>
    <a href="#" class="navbar-camenbert">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </a>
    <div class="navbar-links">
        <ul>
            <li><a href ="index.php">Accueil</a></li>
            <!--<li><a href ="apropos.php">À Propos</a></li>-->
            <li><a href ="reservation.php">Réservation</a></li>
            <!--<li><a href ="remerciement.php">Remerciements</a></li>-->
            <li><a href ="contact.php">Contact</a></li>
        </ul>
    </div>
</nav>

<script>
    const toggleButton = document.getElementsByClassName("navbar-camenbert")[0]
    const navbarLinks  = document.getElementsByClassName("navbar-links")[0]

    toggleButton.addEventListener('click', () =>{
        navbarLinks.classList.toggle('active')
    })
</script>