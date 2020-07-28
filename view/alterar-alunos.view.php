<style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        font-family: monospace;

    }

    h1 {
        color: orange;
    }

    .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
    }

    .form-signin .checkbox {
        font-weight: 400;
    }

    .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
    }

    .form-signin .form-control:focus {
        z-index: 2;
    }

    .input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .input[type="text"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    legend{
        color:orange;
    }

    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
</style>
<form class="form-signin" action="<?php echo BASE_URL ?>/?url=alunos/dadosdoformulario'" method="POST">
    <fieldset>
        <legend>Alterar Dados</legend>
        <div class="form-group">
            <label>Nome</label>
            <input type="text"class="form-control" name="nome" value="<?php echo $data->nome; ?>">
            <input type="hidden" name="id" value="<?php echo $data->id; ?>">
            <label>Email</label>
            <input type="email"class="form-control" name="email" value="<?php echo $data->email; ?>">
            <label>Idade</label>
            <input type="text"class="form-control" name="idade" value="<?php echo $data->idade; ?>">
            <label>Peso</label>
            <input type="text"class="form-control" name="peso" value="<?php echo $data->peso; ?>">
            <label>Altura</label>
            <input type="text"class="form-control" name="altura" value="<?php echo $data->altura; ?>">
            <label>Sexo</label>
            <input type="text"class="form-control" name="sexo" value="<?php echo $data->sexo; ?>">
            <button type="submit" class="btn btn-warning">Alterar</button>
            <a href= "<?php echo BASE_URL ?>/?url=alunos">
                        <button type="button" class="btn btn-primary ">Voltar</button>
                    </a>       
                    <p class="mt-5 mb-3 text-muted text-center">&copy;You-Fitness 2020</p>

        </div>
    </fieldset>
</form>