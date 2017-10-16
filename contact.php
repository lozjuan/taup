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
                        <li><a href="rd.php">R.&. D.</a></li>
                        <li><a data-scroll href="index.php#summary">Sur...</a></li>
                        <li><a data-scroll href="index.php#contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </section>
    <section class="contact-content">
        <div class="info">
            <img style="width: 40%;" src="images/logo.svg" alt="">
            <h4>T.A.U.P</h4>
            <p>Territoire Architecture Urbanisme & Patrimoine</p>
            <p>Rue des Alouettes 75019</p>
            <p>06.19.59.02.43</p>
            <p>Réf. ordre des architects 083225</p>
        </div>
        <div class="form">
            <h3>Contactez-nous</h3>
            <hr style="margin: 0 auto 2rem;">
            <div role="form">
                <form action="" method="post" class="contact-form">
                    <p>Nom
                        <br>
                        <span>
    					<input type="text" name="last_name" value size="40" class="" aria-required="true"  aria-invalid="false">
    				</span>
                    </p>
                    <p>Prénom
                        <br>
                        <span>
                		<input type="text" name="name" value size="40" class="" aria-required="true"  aria-invalid="false">
                	</span>
                    </p>
                    <p>Email
                        <br>
                        <span>
                		<input type="text" name="email" value size="40" class="" aria-required="true"  aria-invalid="false">
                	</span>
                    </p>
                    <p>Sujet
                        <br>
                        <span>
                		<input type="text" name="topic" value size="40" class="" aria-required="true"  aria-invalid="false">
                	</span>
                    </p>
                    <p>Votre Massage
                        <br>
                        <span>
                		<textarea type="text" name="message" cols="40" rows="10" class="message" aria-required="true" aria-invalid="false"></textarea>
                	</span>
                    </p>
                    <p>
                        <button type="submit" name="send" class="btn btn-success">Envoyer</button>
                    </p>
                </form>
            </div>
        </div>
    </section>
    <?php require_once 'tools/footer.php' ?>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>

</html>