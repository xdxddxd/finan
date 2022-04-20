<link rel="stylesheet" href="<?php echo URL_BASE; ?>/assets/themes/css/Home.css">
<script src="<?php echo URL_BASE; ?>/assets/themes/js/Home.js"></script>
<div class="Home container mt-auto">


    <div class="row" id="p1">

        <div class="col-md-6">

            <div class="apresentacao-txt">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Precisa de Dinheiro ?</h1>
                </div>

                <div class="row">

                    <div class="col-md-12">

                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make.
                        <br>
                        <a href="#p2" class="btn btn-success">
                            Saiba Mais&nbsp;
                            <i class="fa fa-angle-double-down" aria-hidden="true"></i>
                        </a>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-6">
            <img class="apresentacao" src="<?php echo URL_BASE; ?>assets/img/tesouro.svg" alt="Tesouro">
        </div>

    </div>

    <div class="row" id="p2">

        <div class="col-md-6">

            <div class="apresentacao-txt">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Nossa Equipe tem a Melhor Proposta Para Você</h1>
                </div>

                <div class="row">

                    <div class="col-md-12">

                        Clique Agora no Botão abaixo e dê o primeiro passo para iniciar o seu sonho.
                        <hr>
                        <button type="button" class="btn btn-success w-100" data-toggle="modal" data-target="#staticBackdrop">
                            Fazer Simulação
                        </button>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-6">
            <img src="<?php echo URL_BASE; ?>assets/img/credito.svg" alt="Crédito" class="apresentacao-main apresentacao m-auto">
        </div>

    </div>

    <div class="row" id="p3">

        <div class="col-md-6">
            <img class="apresentacao" src="<?php echo URL_BASE; ?>assets/img/economia.svg" alt="economia">
        </div>

        <div class="col-md-6">

            <div class="apresentacao-txt">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Como Conseguir um Empréstimo?</h1>
                </div>

                <small>Siga as Instruções:</small>

                <div class="row">

                    <div class="col-md-12">

                        <ul>
                            <li>Lorem Ipsum</li>
                            <li>Lorem Ipsum</li>
                            <li>Lorem Ipsum</li>
                            <li>Lorem Ipsum</li>
                            <li>Lorem Ipsum</li>
                            <li>Lorem Ipsum</li>
                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="row" id="p4">

        <div class="col-md-6">

            <div class="apresentacao-txt">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Precisa de Dinheiro ?</h1>
                </div>

                <div class="row">

                    <div class="col-md-12">

                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make.

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-6">
            <img class="apresentacao" src="<?php echo URL_BASE; ?>assets/img/cofre.svg" alt="cofre">
        </div>

    </div>


</div>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Formulário para Simulação</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form onsubmit="sendData(); return false;">
                    <div class="breadcumb">

                        <div id="step-1">
                            <h3>Dados para Contato</h3>
                            <div class="form-group">
                                <label for="name">Nome Completo</label>
                                <input type="text" class="form-control" id="name" placeholder="Fulano Beltrano Silva">
                            </div>
                            <div class="form-group">
                                <label for="cpf">CPF</label>
                                <input type="text" class="form-control" id="cpf" placeholder="000.000.000-00">
                            </div>
                            <div>
                                <label for="celular">Celular</label>
                                <input type="tel" class="form-control" id="celular" placeholder="(00) 00000-0000">
                            </div>
                            <div>
                                <label for="nascimento">Data de Nascimento</label>
                                <input type="date" class="form-control" id="nascimento" placeholder="19/03/2001">
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                    <label class="form-check-label" for="gridCheck">
                                        Concordo com os <a href="#">termos de uso</a> e <a href="#">LGPD</a>
                                    </label>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xs-6">
                                    <button type="button" class="btn btn-light w-100" data-dismiss="modal">Cancelar</button>
                                </div>
                                <div class="col-xs-6">
                                    <button type="button" class="btn btn-success w-100" onclick="steps(1, 'go')">Continuar</button>
                                </div>
                            </div>
                        </div>

                        <div class="d-none" id="step-2">
                            <h3>Informações Adicionais</h3>
                            
                            <div class="row">
                                <div class="col-xs-6">
                                    <button type="button" class="btn btn-light w-100" onclick="steps(2, 'back')">Voltar</button>
                                </div>
                                <div class="col-xs-6">
                                    <button type="submit" class="btn btn-success w-100">Enviar Dados</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>