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
                        <h4 id="project-title"><?php echo $TEXTS['reamenagement']['title'] ?></h4>
                        <img src="../images/ream_1.jpg">
                        <p class="text-center" id="legend"><?php echo $TEXTS['reamenagement'][0] ?></p>
                        <img style="width: 35%; height: auto;" src="../images/ream_2.jpg">
                        <p class="text-center" id="legend"><?php echo $TEXTS['reamenagement'][1] ?></p>
                        <img style="width: 35%; height: auto;" src="../images/ream_3.jpg">
                        <p class="text-center" id="legend"><?php echo $TEXTS['reamenagement'][2] ?></p>
                        <img style="width: 35%; height: auto;" src="../images/ream_4.jpg">
                        <p class="text-center" id="legend"><?php echo $TEXTS['reamenagement'][3] ?></p>
                        <img src="../images/ream_5.jpg">
                        <img style="width: 35%; height: auto;" src="../images/ream_6.jpg">
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
        var target = $('nav a[href="../maison/' + path + '"]');
        target.addClass('active');
    });
    openList()
    </script>
</body>

</html>