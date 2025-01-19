$('#criar').click(function(){
    let nomecat = $('#nomecategoria').val();
    $('#organizar').append('<input type="button"' + 'value="' + nomecat + '" class="categorias">');
});
