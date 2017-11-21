/*carousel parameters*/
$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    autoWidth: false,

    navText: ['<i class="fa fa-arrow-circle-left" title="Anterior"></i>', '<i class="fa  fa-arrow-circle-right" title="Siguiente"></i>'],
    responsive: {
        0: {
            items: 1
        },
        525: {
            items: 2,
            margin: 20
        },
        800: {
            items: 3,
            margin: 20
        },
        1000: {
            items: 4,
            margin: 20
        }
    }
});

/*instanciates wowjs lib*/
new WOW().init();

/*instanciates smoothScroll lib*/
smoothScroll.init({
    speed: 1000, //How fast it goes
    offset: 50, //How far it goes
});

/*hides site-title after 15sec*/
$(".card").show();
setTimeout(function() {
    $(".card").hide();
}, 15000);

/* waypoints for scrolling down over the homepage */
$(document).ready(function() {
    var waypoint = $('.card').waypoint({
        handler: function(direction) {
            if (this.element.triggerPoint = '300') {
                $('.scroll-down').attr('href', '#services')
            }
        },
        offset: '100'
    });
    var waypoint1 = $('.services').waypoint({
        handler: function(direction) {
            if (this.element.triggerPoint = '1') {
                $('.scroll-down').attr('href', '#projects')
            }
        },
        offset: '100'
    });
    var waypoint2 = $('.projects').waypoint({
        handler: function(direction) {
            if (this.element.triggerPoint = '1') {
                $('.scroll-down').attr('href', '#summary')
            }
        },
        offset: '100'
    });
});

/* hides scroll-down */
$(document).scroll(function() {
    if ($(this).scrollTop() > 1100) {
        $('.scroll-down').hide();
    } else {
        $('.scroll-down').show();
    }
});

/* Menu popovers*/
$(document).ready(function() {
    if ($(window).width() < 768) {
        $("#urban-box").popover('hide');
        $("#socio-box").popover('hide');
        $("#housing-box").popover('hide');
        $("#third-box").popover('hide');
        $("#health-box").popover('hide');
        $("#design-box").popover('hide');
    } else {
        $("#urban-box").popover({
            title: '<h3 class="etude-title">ÉTUDE ET CONSEIL</h3>',
            content: "<a href='urbanisme/manizales.php'>AMÉNAGEMENT</a> <br> <a href='urbanisme/bursa.php'>TRANSPORT</a> <br> <a href='urbanisme/shanghai.php'>SCHÉMA DIRECTEUR</a> <br> <a href='urbanisme/plaine.php'> COHÉSION TERRITORIALE</a>",
            html: true
        }).popover('show');
        $("#socio-box").popover({
            title: '<h3 class="etude-title">ÉTUDE ET CONSEIL</h3>',
            content: "<a href='socio-culturel/espaces_sequentiels.php'>AMÉNAGEMENT</a> <br> <a href='socio-culturel/musee.php'>REQUALIFICATION</a> <br> <a href='socio-culturel/bibliotheque.php'>RÉHABILITATION</a>",
            html: true
        }).popover('show');
        $("#housing-box").popover({
            title: '<h3 class="etude-title">ÉTUDE ET CONSEIL</h3>',
            content: "<a href='logement/japon.php'>PROSPECTIVE</a> <br> <a href='logement/colombia.php'>FONCTIONNALITÉ</a>",
            html: true
        }).popover('show');
        $("#third-box").popover({
            title: '<h3 class="accompagnement-title">ACCOMPAGNEMENT & RÉALISATION</h3>',
            content: "<a href='maison/renovation.php'>RENOVATION</a> <br> <a href='maison/reamenagement.php'>RÉAMÉNAGEMENT</a> <br> <a href='maison/cons_nueva.php'>NEUF</a> <br> <a href='maison/allemagne.php'>CONSTRUCTION</a>",
            html: true
        }).popover('show');
        $("#health-box").popover({
            title: '<h3 class="accompagnement-title">ACCOMPAGNEMENT & RÉALISATION</h3>',
            content: "<a href='sante/michel_beauvais.php'>EHPAD/PA/CHU</a> <br> <a href='sante/remy_butler.php'>MÉDICO-SOCIAUX</a>",
            html: true
        }).popover('show');
        $("#design-box").popover({
            title: '<h3 class="etude-title">ÉTUDE ET CONSEIL</h3>',
            content: "<a href='tertiaire/equipement_urbain.php'>EQUIPEMENT URBAIN</a> <br> <a href='tertiaire/boutique.php'>MENUISERIE INTÉRIEURE</a>",
            html: true
        }).popover('show');
    }

});