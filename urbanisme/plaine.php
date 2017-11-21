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
                        <h4 id="project-title"><?php echo $TEXTS['plaine']['title'] ?></h4>
                        <img src="../images/pp_1.jpg" alt="">
                        <h4 id="section-title"><?php echo $TEXTS['plaine'][0] ?></h4>
                        <p id="subtitle">
                            <?php echo $TEXTS['plaine'][1] ?>
                        </p>
                        <p id="list">
                            <?php echo $TEXTS['plaine'][2] ?>
                        </p>
                        <p id="list">
                            <?php echo $TEXTS['plaine'][3] ?>
                        </p>
                        <p id="list">
                            <?php echo $TEXTS['plaine'][4] ?>
                        </p>
                        <h4><?php echo $TEXTS['plaine'][5] ?></h4>
                        <img src="../images/pp_2.jpg" alt="">
                        <p id="legend">
                            <?php echo $TEXTS['plaine'][6] ?>
                        </p>
                        <img src="../images/pp_3.jpg" alt="">
                        <p id="after-image">
                            <?php echo $TEXTS['plaine'][7] ?>
                        </p>
                        <h4><?php echo $TEXTS['plaine'][8] ?></h4>
                        <img src="../images/pp_4.jpg" alt="">
                        <img src="../images/pp_5.jpg" alt="">
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