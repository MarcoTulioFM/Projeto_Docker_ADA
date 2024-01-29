let url = "http://192.168.100.107:8096/index.php"

$("#button-blue").on("click", function() {
    let txt_nome = $("#name").val();
    let txt_email = $("#email").val();
    let txt_comentario = $("#comment").val();

    $.ajax({
        url: url,
        type: "post",
        data: {nome: txt_nome, comentario: txt_comentario, email: txt_email},
        beforeSend: function() {
            console.log("Tentando enviar os dados....");
        }
    }).done(function(response) {
        console.log(response); // Log da resposta do servidor para fins de depuração
        alert("Dados Salvos");
    }).fail(function(xhr, status, error) {
        console.error("Erro na requisição AJAX:", status, error);
    });
});
