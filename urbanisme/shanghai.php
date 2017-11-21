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
                        <h4 id="project-title"><?php echo $TEXTS['shanghai']['title'] ?></h4>
                        <img src="../images/ps_1.jpg" alt="">
                        <p id="after-image">
                            <?php echo $TEXTS['shanghai'][0] ?>
                        </p>
                        <h4><?php echo $TEXTS['shanghai'][1] ?></h4>
                        <img src="../images/ps_2.jpg" alt="">
                        <h4><?php echo $TEXTS['shanghai'][2] ?></h4>
                        <img src="../images/ps_3.jpg" alt="">
                        <h4><?php echo $TEXTS['shanghai'][3] ?></h4>
                        <img src="../images/ps_4.jpg" alt="">
                        <h4><?php echo $TEXTS['shanghai'][4] ?></h4>
                        <div class="hidden-sm-down" id="image-wrapper">
                            <img class="zoom" src="../images/ps_5.jpg" data-big="../images/ps_5.jpg" alt="">
                        </div>
                        <img class="hidden-md-up" src="../images/ps_5.jpg" alt="">
                        <h4><?php echo $TEXTS['shanghai'][5] ?></h4>
                        <img src="../images/ps_6.jpg" alt="">
                        <h4><?php echo $TEXTS['shanghai'][6] ?></h4>
                        <div class="hidden-sm-down" id="image-wrapper">
                            <img class="zoom" src="../images/ps_7.jpg" data-big="../images/ps_7.jpg" alt="">
                        </div>
                        <img class="hidden-md-up" src="../images/ps_7.jpg" alt="">
                        <h4><?php echo $TEXTS['shanghai'][7] ?></h4>
                        <div class="hidden-sm-down" id="image-wrapper">
                            <img class="zoom" src="../images/ps_8.jpg" data-big="../images/ps_8.jpg" alt="">
                        </div>
                        <img class="hidden-md-up" src="../images/ps_8.jpg" alt="">
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
    <script type="text/javascript" src="../js/jquery.mlens-1.6.min.js"></script>
    <script type="text/javascript" src="../js/lens.js"></script>
    <script type="text/javascript" src="../js/sections-menu.js"></script>
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