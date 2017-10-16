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
                        <h4 id="project-title"><?php echo $TEXTS['espaces']['title'] ?></h4>
                        <img src="../images/pes_1.jpg" alt="">
                        <h4 id="after-image"><?php echo $TEXTS['espaces'][0] ?></h4>
                        <p id="list">
                            <?php echo $TEXTS['espaces'][1] ?>
                        </p>
                        <p id="list">
                            <?php echo $TEXTS['espaces'][2] ?>
                        </p>
                        <p id="list">
                            <?php echo $TEXTS['espaces'][3] ?>
                        </p>
                        <h4 id="project-title"><?php echo $TEXTS['espaces'][4] ?></h4>
                        <p>
                            <?php echo $TEXTS['espaces'][5] ?>
                        </p>
                        <h4><?php echo $TEXTS['espaces'][6] ?></h4>
                        <div id="portrait-image">
                            <img src="../images/pes_2.jpg" alt="">
                        </div>
                        <h4><?php echo $TEXTS['espaces'][7] ?></h4>
                        <img src="../images/pes_3.jpg" alt="">
                        <p id="after-image">
                            <?php echo $TEXTS['espaces'][8] ?>
                        </p>
                        <p>
                            <?php echo $TEXTS['espaces'][9] ?>
                        </p>
                        <h4><?php echo $TEXTS['espaces'][10] ?></h4>
                        <div id="sketch">
                            <img src="../images/pes_4.jpg" alt="">
                        </div>
                        <h4><?php echo $TEXTS['espaces'][11] ?></h4>
                        <div id="sketch">
                            <img src="../images/pes_5.jpg" alt="">
                        </div>
                        <h4><?php echo $TEXTS['espaces'][12] ?></h4>
                        <img src="../images/pes_6.jpg" alt="">
                        <img src="../images/pes_7.jpg" alt="">
                        <p id="after-image">
                            <?php echo $TEXTS['espaces'][13] ?>
                        </p>
                        <h4><?php echo $TEXTS['espaces'][14] ?></h4>
                        <img src="../images/pes_8.jpg" alt="">
                        <h4><?php echo $TEXTS['espaces'][15] ?></h4>
                        <div class="hidden-sm-down" id="image-wrapper">
                            <img class="zoom" src="../images/pes_9.jpg" data-big="../images/pes_9.jpg" alt="">
                        </div>
                        <img class="hidden-md-up" src="../images/pes_9.jpg" alt="">
                        <h4><?php echo $TEXTS['espaces'][16] ?></h4>
                        <img src="../images/pes_10.jpg" alt="">
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