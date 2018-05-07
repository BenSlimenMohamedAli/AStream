var typed = new Typed('#typed', {
    strings: ['Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'],
    typeSpeed: 70,
    backSpeed: 0,
    fadeOut: true,
    loop: true
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