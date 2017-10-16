<!DOCTYPE html>
<?php require_once '../tools/header.php' ?>
<body>
    <?php require_once '../tools/nav.php' ?>
    <section class="project-content">
        <div class="container-fluid">
            <div class="row">
                <?php require_once '../tools/sections-menu.php' ?>
                <article class="col-12 col-md-10" id="images-project">
                    <div class="images">
                        <h4><?php echo $TEXTS['equipement']['title'] ?></h4>
                        <div id="sketch">
                            <img src="../images/eu_1.jpg">
                        </div>
                        <p>
                            <?php echo $TEXTS['equipement'][0] ?>
                        </p>
                        <img src="../images/eu_2.jpg">
                        <p>
                            <?php echo $TEXTS['equipement'][1] ?>
                        </p>
                        <div id="sketch">
                            <h4 class="text-center"> <?php echo $TEXTS['equipement'][2] ?></h4>
                            <img src="../images/eu_3.jpg">
                            <img src="../images/eu_4.jpg">
                            <img src="../images/eu_5.jpg">
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <footer>
        <p class="copyright text-center">© T.A.U.P 2017</p>
    </footer>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/sections-menu.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        var path = window.location.pathname.split("/").pop();;
        var target = $('nav a[href="../tertiaire/' + path + '"]');
        target.addClass('active');
    });
    openList()
    </script>
</body>

</html>