$(function () {
    //Pesquisar os cursos sem refresh na página
    $("#box").keyup(function () {

        var box = $(this).val();

        //Verificar se há algo digitado
        if (box != '') {
            var dados = {
                palavra
                    :
                    box
            }
            $.post('buscarBanca.php', dados, function (retorna) {
                //Mostra dentro da ul os resultado obtidos 
                $(".busca").html(retorna);
            });
        } else {
            $(".busca").html('');
        }
    });
});