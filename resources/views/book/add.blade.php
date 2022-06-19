<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-b-15 responsive">
        <a class="btn btn-primary waves-effect m-b-15 btnAbrirCollapse" role="button" style="margin-bottom: 30px; color: #fff;" onclick="javascript: abrirCollapse()">
        <i class="fas fa-plus"></i> <span class="icon-name">Adicionar Livro</span>
        </a>
        <a class="btn btn-primary waves-effect m-b-15 btnFecharCollapse" role="button" style="margin-bottom: 30px; display: none; color: #fff;" onclick="javascript: fecharCollapse()">
        <i class="fas fa-plus"></i> <span class="icon-name">Adicionar Livro</span>
        </a>
        <div class="collapse" id="collapseExample">
            <div class="card">
                <div class="card-body">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h2>Adicionar Livro</h2>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <div class="form-f-box">
                            <div class="box-body">
                                <form action method="POST" id="idNovoRegistro" autocomplete="off">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <b>Título:</b>
                                            <div class="form-group">
                                                <input type="text" name="name" id="name" class="form-control">
                                                <span class="error-validate"><p id="validate-name"></p></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <b>Descrição:</b>
                                            <div class="form-group">
                                                <input type="text" name="name" id="name" class="form-control">
                                                <span class="error-validate"><p id="validate-name"></p></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <b>Autor:</b>
                                            <div class="form-group">
                                                <input type="text" name="name" id="name" class="form-control">
                                                <span class="error-validate"><p id="validate-name"></p></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <b>Número páginas:</b>
                                            <div class="form-group">
                                                <input type="text" name="name" id="name" class="form-control">
                                                <span class="error-validate"><p id="validate-name"></p></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <button id="btnNovaCorretoraSMS" type="submit" class="btn btn-primary btn-block">Salvar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
