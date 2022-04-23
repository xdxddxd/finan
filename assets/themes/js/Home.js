$('.owl-banner').click(function () {
    $('.owl-banner').trigger('next.owl.carousel');
});

async function steps(step, fun) {
    switch (step) {
        case 1:
            if (fun == 'go') {
                $("#step-1").addClass("d-none");
                $("#step-2").removeClass("d-none");
            }
            break;
        case 2:
            if (fun == 'go') {
                $("#step-2").addClass("d-none");
                $("#step-3").removeClass("d-none");
            }
            else if (fun == 'back') {
                $("#step-1").removeClass("d-none");
                $("#step-2").addClass("d-none");
            }
            break;
        case 3:
            if (fun == 'back') {
                $("#step-2").removeClass("d-none");
                $("#step-3").addClass("d-none");
            }
            break;
    }
}

async function sendData() {
    let data = {
        name: $("#name").val(),
        cpf: $("#cpf").val(),
        celular: $("#celular").val(),
        nascimento: $("#nascimento").val(),
        funcao: $('.form-check-input:checked').val(),
    }

    let notFilled = '';
    for (let i in data) {
        if (data[i] == '') {
            notFilled += '<span class="badge badge-danger">' + i + '</span>';
        }
    }
    if (notFilled != '') {
        $("#response").html('<div class="alert alert-danger">Preencha os campos: ' + notFilled + '</div>');
        return;
    }
}