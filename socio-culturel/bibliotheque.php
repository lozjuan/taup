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
                        <h4 id="project-title"><?php echo $TEXTS['bibliotheque']['title'] ?></h4>
                        <img src="../images/pbi_9.jpg" alt="">
                        <p id="after-image">
                            <?php echo $TEXTS['bibliotheque'][0] ?>
                        </p>
                        <p>
                            <?php echo $TEXTS['bibliotheque'][1] ?>
                        </p>
                        <p>
                            <?php echo $TEXTS['bibliotheque'][2] ?>
                        </p>
                        <img src="../images/pbi_1.jpg" alt="">
                        <img src="../images/pbi_2.jpg" alt="">
                        <div class="hidden-sm-down" id="image-wrapper">
                            <img class="zoom" src="../images/pbi_3.jpg" data-big="../images/pbi_3.jpg" alt="">
                        </div>
                        <img class="hidden-md-up" src="../images/pbi_3.jpg" alt="">
                        <img src="../images/pbi_4.jpg" alt="">
                        <img src="../images/pbi_5.jpg" alt="">
                        <img src="../images/pbi_6.jpg" alt="">
                        <img src="../images/pbi_8.jpg" alt="">
                        <img src="../images/pbi_7.jpg" alt="">
                    </div>
                </article>
            </div>
        </div>
    </section>
    <?php require_once '../tools/footer.php' ?>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/sections-menu.js"></script>
    <script type="text/javascript" src="../js/jquery.mlens-1.6.min.js"></script>
    <script type="text/javascript" src="../js/lens.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        var path = window.location.pathname.split("/").pop();;
        var target = $('nav a[href="../socio-culturel/' + path + '"]');
        target.addClass('active');
    });
    openList()
    </script>
</body>

</html>