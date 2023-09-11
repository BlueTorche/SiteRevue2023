<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark navbar-custom">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?lang=<?php if($lang=="fr"){ echo "fr";} else echo "eng"; ?>""><i class="fa fa-fw fa-home"></i>Main()</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="knowledge.php?lang=<?php if($lang=="fr"){ echo "fr";} else echo "eng"; ?>""><i class="fa fa-fw fa-book"></i><?php if($lang=="fr"){ echo "Connaissances()";} else echo "Knowledge()"; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="experiences.php?lang=<?php if($lang=="fr"){ echo "fr";} else echo "eng"; ?>""><i class="fa fa-fw fa-tools"></i>Experiences()</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="job.php?lang=<?php if($lang=="fr"){ echo "fr";} else echo "eng"; ?>""><i class="fa fa-fw fa-laptop-code"></i><?php if($lang=="fr"){ echo "Recherches_de_job()";} else echo "Job_Interest()"; ?></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <a class="nav-link" href="?lang=fr"><?php if($lang=="fr"){ echo "<u>fr</u>";} else echo "fr"; ?></a>
                <a class="nav-link" href="?lang=eng"><?php if($lang=="eng"){ echo "<u>eng</u>";} else echo "eng"; ?></a>
            </ul>
        </div>
    </div>
</nav>