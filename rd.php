<!DOCTYPE html>
<head>
    <?php @session_start();?>
    <title>T.A.U.P</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <!-- animate css -->
    <link rel="stylesheet" href="styles/animate.min.css">
    <link href="styles/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--owl carousel-->
    <link rel="stylesheet" href="styles/owl.carousel.min.css">
</head>

<body>
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
                    <li><a href="rd.php">R.&. D.</a></li>
                    <li><a data-scroll href="index.php#summary">Sur...</a></li>
                    <li><a data-scroll href="index.php#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="project-content">
        <div class="container-fluid">
            <div class="row">
                <article class="col-12 col-md-10 rd" id="images-project">
                    <div class="images">
                        <img style="margin-top: 7rem;" src="images/rd_1.jpg">
                        <p id="after-image">Aujourd'hui, le code de marchés publics étant stabilisé, la mise en œuvre du décret sur la loi CAP et l’adoption des objectifs du ministère de l'écologie du développement durable et de l'énergie avec pour finalité la démarche « Territoire durable 2030 », s'ouvre une fenêtre d'action pour les entreprises d'architecture voulant aller vers l'urbanisme et l'aménagement du territoire. La démarche « Territoire durable 2030 » vise à explorer les scénarios soutenables et les stratégies d'action susceptibles de mener progressivement le territoire national vers un « territoire durable » à l'horizon 2030. Dans cette vision TAUP est une entreprise réfléchissant à l'articulation entre la ville "urbaine" et le territoire (conurbation) par moyen d'une lecture participative et active dans la constante transformation de notre territoire. Elle invite d’autres professionnels et le public intéressé à faire part à des groupes actifs de réflexion dans divers sujet proposés dans le blog taupblog ou lors de séances conviviales mensuelles.</p>
                        <p>Sujets de réflexion à venir :</p>
                        <p>1- Notre parc immobilier en santé vieillissante
                            <br> Le parc immobilier dans le domaine de la santé commence à dater et avec de nouveaux services et technologies
                            <br> à incorporer, ceci nécessite un nouvel aménagement. 
                        </p>
                        <p>2- Le BIM s'applique-t-il à la maison individuelle et au territoire?
                            <br> Le fait de passer à la technologie du BIM était un grand pari de la part de nos élus et dans le secteur du bâtiment; les architectes pour les particuliers et les urbanistes sont-ils aussi impliqués?
                        </p>
                        <img src="images/rd_2.jpg">
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
</body>
</html>