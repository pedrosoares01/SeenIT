$('.filme').click(function(e){
    let $cat = $(e.currentTarget);
    $cat.toggleClass('nvisto');
    $cat.toggleClass('visto');
});

$('.filtro').click(function(){
    $('.assistidos').toggleClass('aberto')
    $('.naoassistidos').toggleClass('aberto');
    $('.tudo').toggleClass('aberto');
})

$('.naoassistidos').click(function(){
    if ($('.nvisto').hasClass('escondido')) {
        $('.nvisto').toggleClass('escondido');
    }
    $('.visto').toggleClass('escondido');
    
})

$('.assistidos').click(function(){
    if ($('.visto').hasClass('escondido')) {
        $('.visto').toggleClass('escondido');
    }
    $('.nvisto').toggleClass('escondido');
})

$('.tudo').click(function(){
    if ($('.visto').hasClass('escondido')) {
        $('.visto').toggleClass('escondido');
    }
    if ($('.nvisto').hasClass('escondido')) {
        $('.nvisto').toggleClass('escondido');
    }
})