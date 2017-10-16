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
                        <h4 id="project-title"><?php echo $TEXTS['manizales']['title'] ?></h4>
                        <img src="../images/pm_1.jpg" alt="">
                        <p id="after-image">
                            <?php echo $TEXTS['manizales'][0]?>
                        </p>
                        <img src="../images/pm_2.jpg" alt="">
                        <p id="after-image">
                            <?php echo $TEXTS['manizales'][1] ?>
                        </p>
                        <img src="../images/pm_3.jpg" alt="">
                        <h4 id="section-title"><?php echo $TEXTS['manizales'][2] ?></h4>
                        <p>
                            <?php echo $TEXTS['manizales'][3] ?>
                        </p>
                        <div class="hidden-sm-down" id="image-wrapper">
                            <img class="zoom" src="../images/pm_4.jpg" data-big="../images/pm_4.jpg" alt="">
                        </div>
                        <img class="hidden-md-up" src="../images/pm_4.jpg" alt="">
                        <h4 id="section-title"><?php echo $TEXTS['manizales'][4] ?></h4>
                        <p>
                            <?php echo $TEXTS['manizales'][5] ?>
                        </p>
                        <div class="hidden-sm-down" id="image-wrapper">
                            <img class="zoom" src="../images/pm_5.jpg" data-big="../images/pm_5.jpg" alt="">
                        </div>
                        <img class="hidden-md-up" src="../images/pm_5.jpg" alt="">
                        <h4 id="section-title"><?php echo $TEXTS['manizales'][6] ?></h4>
                        <p>
                            <?php echo $TEXTS['manizales'][7] ?>
                        </p>
                        <div class="hidden-sm-down" id="image-wrapper">
                            <img class="zoom" src="../images/pm_6.jpg" data-big="../images/pm_6.jpg" alt="">
                        </div>
                        <h4 id="section-title"><?php echo $TEXTS['manizales'][8] ?></h4>
                        <p>
                            <?php echo $TEXTS['manizales'][9] ?>
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <?php require_once '../tools/footer.php' ?>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <script type="text/javascript" src="../js/sections-menu.js"></script>
    <script type="text/javascript" src="../js/jquery.mlens-1.6.min.js"></script>
    <script type="text/javascript" src="../js/lens.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        var path = window.location.pathname.split("/").pop();;
        var target = $('nav a[href="../urbanisme/' + path + '"]');
        target.addClass('active');
    });
    openList()
    </script>
</body>

</html>