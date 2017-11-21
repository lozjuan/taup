<!DOCTYPE html>
<?php require_once 'tools/home_header.php' ?>

<body>
    <section class="welcome-project">
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
                        <li><a href="blog.php">blog</a></li>
                        <li><a data-scroll href="a_propos.php">À propos</a></li>
                        <li><a data-scroll href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </section>
    <section class="project-content">
        <div class="container-fluid">
            <div class="row">
                <article class="py-1 col-md-2" id="sections-menu">
                    <ul class="sections-menu">
                        <button type="buton" data-target="#urbanisme" data-toggle="collapse" aria-expanded="false">URBANISME</button>
                        <nav id="urbanisme" class="collapse">
                            <li>
                                <a href="urbanisme/manizales.php">Manizales</a>
                                <a href="urbanisme/bursa.php">Bursa</a>
                                <a href="urbanisme/shanghai.php">Shanghai</a>
                                <a href="urbanisme/plaine.php">La Plaine</a>
                            </li>
                        </nav>
                        <button type="buton" data-target="#socio" data-toggle="collapse" aria-expanded="false">SOCIO-CULTUREL</button>
                        <nav id="socio" class="collapse">
                            <li>
                                <a href="socio-culturel/espaces_sequentiels.php">Espaces séquentielles</a>
                                <a href="socio-culturel/musee.php">Musée</a>
                                <a href="socio-culturel/bibliotheque.php">Bibliothèque</a>
                            </li>
                        </nav>
                        <button type="buton" data-target="#logement" data-toggle="collapse" aria-expanded="false">LOGEMENT</button>
                        <nav id="logement" class="collapse">
                            <li>
                                <a href="logement/japon.php">Japon</a>
                                <a href="logement/colombia.php">Colombie</a>
                                <a href="logement/allemagne.php">Allemagne</a>
                            </li>
                        </nav>
                        <button type="buton" data-target="#maison" data-toggle="collapse" aria-expanded="false">MAISON INDIVIDULLE</button>
                        <nav id="maison" class="collapse">
                            <li>
                                <a href="maison/renovation.php">Renovation complète</a>
                                <a href="maison/reamenagement.php">Réaménagement</a>
                                <a href="maison/cons_nueva.php">Construction neuve</a>
                            </li>
                        </nav>
                        <button type="buton" data-target="#sante" data-toggle="collapse" aria-expanded="false">COLLABORATION SANTÉ</button>
                        <nav id="sante" class="collapse">
                            <li>
                                <a href="sante/michel_beauvais.php">Michel Bauvais <br> et associées</a>
                                <a href="sante/remy_butler.php">Remy Buttler</a>
                            </li>
                        </nav>
                        <button type="buton" data-target="#tertiaire" data-toggle="collapse" aria-expanded="false">TERTIAIRE</button>
                        <nav id="tertiaire" class="collapse">
                            <li>
                                <a href="tertiaire/equipement_urbain.php">Equipement urbain</a>
                                <a href="tertiaire/boutique.php">Concept boutique</a>
                            </li>
                        </nav>
                    </ul>
                </article>
                <article class="col-12 col-md-10 rd" id="images-project">
                    <div class="images">
                        <h4 id="project-title">Titre</h4>
                        <a href="taupblog.wordpress.com">
                            <p>Suivez-nous sur notre blog : taupblog.wordpress.com </p>
                        </a>
                        <img src="images/rd_1.jpg">
                        <p id="after-image">Aujourd'hui, le code de marchés publics étant stabilisé, la mise en œuvre du décret sur la loi CAP et l’adoption des objectifs du ministère de l'écologie du développement durable et de l'énergie avec pour finalité la démarche « Territoire durable 2030 », s'ouvre une fenêtre d'action pour les entreprises d'architecture voulant aller vers l'urbanisme et l'aménagement du territoire. La démarche « Territoire durable 2030 » vise à explorer les scénarios soutenables et les stratégies d'action susceptibles de mener progressivement le territoire national vers un « territoire durable » à l'horizon 2030. Dans cette vision TAUP est une entreprise réfléchissant à l'articulation entre la ville "urbaine" et le territoire (conurbation) par moyen d'une lecture participative et active dans la constante transformation de notre territoire. Elle invite d’autres professionnels et le public intéressé à faire part à des groupes actifs de réflexion dans divers sujet proposés dans le blog taupblog ou lors de séances conviviales mensuelles.</p>
                        <p>Sujets de réflexion à venir :</p>
                        <p>1- Notre parc immobilier en santé vieillissante
                            <br> Le parc immobilier dans le domaine de la santé commence à dater et avec de nouveaux services et technologies
                            <br> à incorporer, ceci nécessite un nouvel aménagement. 
                        </p>
                        <p>2- Le BIM s'applique-t-il à la maison individuelle et au territoire?
                            <br> Le fait de passer à la technologie du BIM était un grand pari de la part de nos élus et dans le secteur du bâtiment; les architectes pour les particuliers et les urbanistes sont-ils aussi impliqués?
                        </p>
                        <div class="hidden-sm-down" id="image-wrapper">
                            <img class="zoom" src="images/rd_2.jpg" data-big="images/rd_2.jpg" alt="">
                        </div>
                        <img class="hidden-md-up" src="images/rd_2.jpg" alt="">
                        <img src="images/rd_3.jpg">
                        <p id="after-image" class="text-center">Superposition de couches que forment la ville. <br> Etude de la trame urbaine</p>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <?php require_once 'tools/footer.php' ?>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery.mlens-1.6.min.js"></script>
    <script type="text/javascript" src="js/lens.js"></script>
</body>
</html>