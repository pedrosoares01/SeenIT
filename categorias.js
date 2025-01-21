$('#criar').click(function(){
    let nomecat = $('#nomecategoria').val();
    $('#organizar').append('<br> <input type="button"' + 'value="' + nomecat + '" class="categorias ' + nomecat + '">');
    $('#organizar').append('<div id ="'+ nomecat + '" class="textos"> </div>');
    $('#'+nomecat).css("display","none");
});

let chave;

$('.categorias').click(function(e){
    if (chave) {
        $('.textos').css("display","none");
    }
    let botao = $(e.currentTarget).value;
    $('#'+botao).css("display", "inline");
    chave = 1;
})

