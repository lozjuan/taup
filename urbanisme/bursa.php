<!DOCTYPE html>
<?php require_once '../tools/header.php' ?>
<body>
    <?php require_once '../tools/nav.php' ?>
    <section class="project-content">
        <div class="container-fluid">
            <div class="row">
                <?php require_once '../tools/sections-menu.php' ?>
                <article class="col-12 col-md-10 col-lg-10" id="images-project">
                    <div class="images">
                        <h4 id="project-title"><? echo $TEXTS['bursa']['title'] ?></h4>
                        <img src="../images/pb_1.jpg" alt="">
                        <p id="after-image">
                            <? echo $TEXTS['bursa'][0] ?>
                        </p>
                        <h4><? echo $TEXTS['bursa'][1] ?></h4>
                        <div class="hidden-sm-down" id="image-wrapper">
                            <img class="zoom" src="../images/pb_3.jpg" data-big="../images/pb_3.jpg" alt="">
                        </div>
                        <img class="hidden-md-up" src="../images/pb_3.jpg" alt="">    
                        <h4><? echo $TEXTS['bursa'][2] ?></h4>
                        <div class="hidden-sm-down" id="image-wrapper">
                            <img class="zoom" src="../images/pb_4.jpg" data-big="../images/pb_4.jpg" alt="">
                        </div>
                        <img class="hidden-md-up" src="../images/pb_4.jpg" alt="">
                        <h4><? echo $TEXTS['bursa'][3] ?></h4>
                        <img src="../images/pb_5.jpg" alt="">
                        <h4><? echo $TEXTS['bursa'][4] ?></h4>
                         <div class="hidden-sm-down" id="image-wrapper">
                            <img class="zoom" src="../images/pb_6.jpg" data-big="../images/pb_6.jpg" alt="">
                        </div>
                        <img class="hidden-md-up" src="../images/pb_6.jpg" alt="">
                        <h4 id="section-title"><? echo $TEXTS['bursa'][5] ?></h4>
                        <p id="subtitle"><? echo $TEXTS['bursa'][6] ?></p>
                        <p id="list"><? echo $TEXTS['bursa'][7] ?></p>
                        <p id="list"><? echo $TEXTS['bursa'][8] ?></p>
                        <p id="list"><? echo $TEXTS['bursa'][9] ?></p>
                        <p id="list"><? echo $TEXTS['bursa'][10] ?></p>
                        <img src="../images/pb_2.jpg" alt="">
                        <img src="../images/pb_7.jpg" alt="">
                        <img src="../images/pb_9.jpg" alt="">
                        <h4><? echo $TEXTS['bursa'][11] ?></h4>
                        <img src="../images/pb_8.jpg" alt="">
                        <img src="../images/pb_10.jpg" alt="">
                    </div>
                </article>
            </div>
        </div>
    </section>
    <?php require_once '../tools/footer.php' ?>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <script type="text/javascript" src="../js/jquery.mlens-1.6.min.js"></script>
    <script type="text/javascript" src="../js/lens.js"></script>
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