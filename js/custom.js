
$(window).load(function() {
    $('header').show();
    $('.content').css({"visibility": "visible"});
    TweenMax.from( $('header'), 2, {css:{opacity: 0}, delay: 0, ease:Quad.easeOut});
    TweenMax.from( $('.spin-it'), 2, {css:{opacity: 0}, delay: 1, ease:Quad.easeOut});
    TweenMax.from($('.fling-it'), 1.5, {css:{left:-1800}, delay: 1, ease:Quad.easeInOut});
    TweenMax.from( $('.fade-it'), 1.5, {css:{opacity: 0, left: -1800}, delay: 1, ease:Quad.easeOut});
    TweenMax.from($('.fling-it2'), 2, {css:{left: -2500, rotation: -5000}, delay: 1.5, ease:Quad.easeInOut});
    TweenMax.from( $('#menu-1'), 1.5, {css:{top: '-1100px'}, delay: 2, ease:Quad.easeInOut});
    TweenMax.from( $('#menu-3'), 1, {css:{top: '-900px'}, delay: 3.3, ease:Quad.easeInOut});
    TweenMax.from( $('#menu-2'), 0.5, {css:{top: '-1200px'}, delay: 4.5, ease:Quad.easeInOut});
    TweenMax.from( $('#menu-4'), 0.7, {css:{top: '-1200px'}, delay: 3.8, ease:Quad.easeInOut});
    TweenMax.from( $('.project'), 2.5, {css:{opacity: 0, bottom: -1500}, delay: 2, ease:Quad.easeOut});
    TweenMax.from( $('.overBlox'), 2, {css:{opacity: 0}, delay: 5, ease:Quad.easeOut});

});

$(document).ready(function(){


    var controller = $.superscrollorama({
        triggerAtCenter: false,
        playoutAnimations: true,
        reverse: true 
    });
    
    controller.addTween('header', TweenMax.from( $('#Grid'),1.6, {css:{top: '1.6em'}}));


    $('#Grid').mixitup();

});



 
