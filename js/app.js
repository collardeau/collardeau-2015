$(document).foundation();

$(document).ready(function(){

    $('header').hide();
    $('.content').css({"visibility": "hidden"});

    // need to load photo after dom ready for bloxhover to work
    $('#whatNow-pic').attr('src', './img/whatNow.jpg');
    $('#artJunk').attr('src', './img/logo/artJunk.png');
    $('#fadeIn').attr('src', './img/fadein_bluelogo.png');
    $('#oti-pic').attr('src', './img/oti-yellow.png');
    $('#agatha').attr('src', './img/agatha3.jpg');
    $('#johnHong').attr('src', './img/frobel6.jpg');
    $('#collardeau-pic').attr('src', './img/collardeau.png');
    $('#bikers').attr('src', './img/bikers2.jpg');
    $('#tennisGame').attr('src', './img/tennisBall3.png');
    $('#summer2012').attr('src', './img/summer2012-2.jpg');
    $('#karaoke').attr('src', './img/mic_poster.png');
    $('#audition').attr('src', './img/audition.jpg');
    $('#constantine').attr('src', './img/constantine.jpg');
    $('.twitter-pic').attr('src', './img/twitterCover2.png');
    $('#insta-mex-pic').attr('src', './img/instagram-3.jpg');
    $('#insta-reactweek-pic').attr('src', './img/reactWeek.jpg');
    $('#insta-berliner-pic').attr('src', './img/insta-berliner.jpg');

    $('.vid').bloxhover({
        effect: "horizontal alternate", // accepted strings: 'square', 'square reveal', 'vertical', 'vertical reveal', 'vertical alternate', 'vertical alternate reveal', 'horizontal', 'horizontal reveal', 'horizontal alternate', 'horizontal alternate reveal'
        sliceCount: 5, // the number of slices
        color: 'rgba(0, 0, 0, 0.6)', //rgba color of the slices
        duration: 360, //how long should the animation of each slice last
        delay: 40 // delay between slice animations
    });

    $('.web').bloxhover({effect: 'vertical alternate', duration: 360, sliceCount: 5, delay: 40, color: 'rgba(1, 1, 1, 0.6)'
    });

    $('.instagram').bloxhover({effect: 'square', duration: 360, sliceCount: 16, delay: 40, color: 'rgba(0, 0, 0, 0.6)'
    });

    $('.twitter').bloxhover({
        effect: "vertical reveal", // accepted strings: 'square', 'square reveal', 'vertical', 'vertical reveal', 'vertical alternate', 'vertical alternate reveal', 'horizontal', 'horizontal reveal', 'horizontal alternate', 'horizontal alternate reveal'
        sliceCount: 1, // the number of slices
        color: 'rgba(122,83,101, 0.25)', //rgba color of the slices
        duration: 100, //how long should the animation of each slice last
        delay: 20 // delay between slice animations
    });

    var controller = $.superscrollorama({
        triggerAtCenter: false,
        playoutAnimations: true,
        reverse: true
    });

    controller.addTween('header', TweenMax.from( $('#Grid'),1.2, {css:{top: '3.2em'}}));


    $('#Grid').mixitup();


});

$(window).load(function() {
    $('header').show();
    $('.content').css({"visibility": "visible"});

});