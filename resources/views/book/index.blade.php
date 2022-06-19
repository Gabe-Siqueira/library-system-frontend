@extends('layouts.authBase')

@section('content')

<style>

    body{
        margin: 0;
        font-size: .9rem;
        font-weight: 400;
        line-height: 1.6;
        color: #212529;
        text-align: left;
        background-color: #f5f8fa;
    }

    .navbar-laravel
    {
        box-shadow: 0 2px 4px rgba(0,0,0,.04);
    }

    .navbar-brand , .nav-link, .my-form, .login-form
    {
        font-family: Raleway, sans-serif;
    }

    .my-form
    {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .my-form .row
    {
        margin-left: 0;
        margin-right: 0;
    }

    .book-form
    {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .book-form .row
    {
        margin-left: 0;
        margin-right: 0;
    }
</style>


<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand">Sistema Bibliotecário</a>
    </div>
</nav>

<main class="book-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="container-fluid">
                <!-- CARD ADICIONAR LIVROS -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h2>
                                    Adicionar Livros<br>
                                </h2>
                                <div class="table-responsive-sm  table-responsive-md">
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
                <!-- FIM CARD ADICIONAR LIVROS -->
                <!-- CARD LISTA LIVROS -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h2>
                                    Livros<br>
                                </h2>
                                <div class="table-responsive-sm  table-responsive-md">
                                <table id="tab-broker" class="table table-striped table-bordered no-wrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Título</th>
                                            <th>Descrição</th>
                                            <th>Autor</th>
                                            <th>Número Páginas</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!--  -->
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FIM CARD LISTA LIVROS -->
            </div>
            <!--  -->

        </div>
    </div>
</main>

@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript">

    $(document).ready(function() {
        $('#formLogin').submit(function(e){
            e.preventDefault();
            // var dados = new FormData(this);
            var formdata = new FormData($("form[id='formLogin']")[0]);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '{{route("login-autentication")}}',
                type: "POST",
                data: formdata,
                processData: false,
                cache: false,
                contentType: false,
                success: function( data ) {
                    console.log(data);
                },
                error: function (request, status, error) {
                    alert(request.responseText);
                }
            });
            return false;
        });
    });

</script>
