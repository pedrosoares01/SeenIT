$('.filme').click(function(e){
    let $cat = $(e.currentTarget);
    $cat.toggleClass('visto');
});

