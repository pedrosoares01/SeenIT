$('#criar').click(function(){
    let nomecat = $('#nomecategoria').val();
    $('#organizar').append(`
        <div id="categoria-${nomecat}" class="categoria">
            <input type="button" value="${nomecat}" class="categorias ${nomecat}">
            <button class="apagarCategoria" data-categoria="${nomecat}">Apagar</button>
        </div>
    `);
    $('#organizar').append('<div id="' + nomecat + '" class="textos" style="display:none;"> </div>');
    $('#nomecategoria').val('');
});

let chave;
$('#organizar').on('click', '.categorias', function(e){
    if (chave) {
        $('.textos').css("display", "none");
    }
    let botao = $(e.currentTarget).val(); 
    $('#' + botao).css("display", "inline");
    chave = 1;
});

$('#organizar').on('click', '.apagarCategoria', function(){
    let nomecat = $(this).data('categoria');  
    $('#categoria-' + nomecat).remove();
    $('#' + nomecat).remove();
});
