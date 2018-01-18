/*carousel parameters*/
$('.owl-carousel').owlCarousel({
    loop: false,
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

/* show mobile projects menus clicking on their imagas */
$('#image-urbanism').click(function(){
    $('#collapseUrbanism').toggleClass('collapse show');
});
$('#image-socio').click(function(){
    $('#collapseSocio').toggleClass('collapse show');
});
$('#image-logement').click(function(){
    $('#collapseLogement').toggleClass('collapse show');
});
$('#image-maison').click(function(){
    $('#collapseMaison').toggleClass('collapse show');
});
$('#image-sante').click(function(){
    $('#collapseSante').toggleClass('collapse show');
});
$('#image-third').click(function(){
    $('#collapseThird').toggleClass('collapse show');
});






