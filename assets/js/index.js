/* Funny text animation */
$(document).ready(function() {
    $('.funny').funnyText({
        speed: 500,
        borderColor: 'black',
        activeColor: '#123456',
        color: 'black',
        fontSize: '70em',
        direction: 'both'
    });
});

$(document).ready(function() {
    $('.funnyT').funnyText({
        speed: 500,
        borderColor: 'black',
        activeColor: '#123456',
        color: 'black',
        fontSize: '70em',
        direction: 'both'
    });
});


var typed = new Typed('#typed', {
    strings: ['Association internationale pour la coopération et le\n' +
    'Développement durable'],
    typeSpeed: 70,
    backSpeed: 0,
    fadeOut: true,
    loop: true
});