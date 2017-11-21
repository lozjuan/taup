<!DOCTYPE html>
<?php require_once 'tools/home_header.php' ?>

<body>
    <section class="welcome-project" style="height: 0;">
        <header class="head navbar fixed-top" role="banner">
            <div class="container-fluid">
                <a href="index.php" class="home"><h4>T.A.U.P</h4>
                <p>Territoire Urbanisme Architecture & Patrimoine</p>
            </a>
                <button type="button" class="menu-bar hidden-md-up" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <nav id="main-menu" class="collapse">
                    <ul>
                        <li><a data-scroll href="index.php#projects">Projets</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a data-scroll href="a_propos.php">À propos...</a></li>
                        <li><a data-scroll href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </section>
    <div class="container-fluid">
        <div class="row">
            <section class="about-content">
                <div>
                    <h4>Notre volonté</h4>
                    <p>Territoire Architecture Urbanisme & Patrimoine (TAUP) est une société par actions simplifiée unipersonnelle dont la mission est l'amélioration de la qualité de vie des populations à travers l'articulation entre la ville "urbaine" et le territoire. Nous cherchons à construire des villes durables, en préservant nos ressources, notre patrimoine, nos paysages et notre territoire.
                        <br> TAUP élabore des études en amont pour des projets urbains et de construction et vous accompagne dans la gestion et instruction des aspects réglementaires, normatifs et administratifs permettant d’arriver dans les meilleures conditions à l’aboutissement de votre projet. En vous apportant tous les éléments esthétiques, financiers et techniques, TAUP propose les alternatives les plus économes, les plus confortables, les plus saines et les plus adaptées à vos projets, que ce soit à l'échelle individuelle ou territoriale.
                        <br> TAUP travaille avec des équipes pluridisciplinaires composées par des professionnels de l'aménagement et de la construction, des urbanistes et des experts en sciences humaines et sociales qui proposent un regard transversal sur la ville de demain et cherchent à créer des synergies.
                        <br> T.A.U.P. est accompagnée du dispositif de soutien à la création et développement d’entreprises ECHELLE-UN. Nous participons activement à des groupes de discussions et nous sommes associés au collectif Architectes & Particuliers.</p>
                    <p>Toujours à la hauteur des évolutions informatiques et dans un contexte où la transition numérique est inéluctable, TAUP traite ses dossiers avec la technologie du BIM Building information Model et SIG Système d'Information Géographique. Grace à son association avec l'entreprise de topographie et informatique STI, nous faisons les relevés en nuage de points et modélisation des bâtiments existants. </p>
                    <a href="cv.php">
                        <p style="color: white;">Consultez le parcours du fondateur de TAUP </p>
                    </a>
                </div>
                <section class="about-content-down">
                    <div class="about-left">
                        <h4>Notre valeur ajoutée</h4>
                        <p style="color: white;">Un service personnalisé</p>
                        <p>
                            Nos clients bénéficient d'une relation de proximité qui permet:
                            <br> - D'anticiper les attentes et de détecter les besoins
                            <br> - De développer et de proposer des solutions innovantes
                            <br> - De faire preuve de disponibilité et d'implication
                        </p>
                        <p style="color: white;">Des résultats de qualité garantis</p>
                        <p>
                            Tous nos projets sont basés sur :
                            <br> - Une méthodologie de travail éprouvée
                            <br> - Une excellence technique
                            <br> - Un contrôle de qualité rigoureux
                            <br> - Des solutions spatiales claires et concrètes
                            <br> - Un accompagnement permanent dans la durée
                        </p>
                    </div>
                    <div class="about-right">
                        <p style="color: white;">Une prestation globale</p>
                        <p>TAUP propose à ses clients une prestation globale en matière de conseil, accompagnement, développement et exécution des projets qui garantit :</p>
                        <p>- La vision et le traitement de l'ensemble de leurs besoins
                            <br> - La cohérence des solutions proposées
                            <br> - La maîtrise des conséquences des décisions suggérées
                            <br> - L'efficacité et la maîtrise des coûts
                        </p>
                    </div>
                </section>
            </section>
        </div>
    </div>
    <?php require_once 'tools/footer.php' ?>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>

</html>