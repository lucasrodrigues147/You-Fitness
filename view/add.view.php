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
        color:orange;
        font-family: monospace;
    }
    legend {
        color:orange;
        font-family: monospace;
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

    .form-signin input[type="button"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .form-signin button[type="button"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
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
<form class="form-signin" action="<?php echo BASE_URL ?>/?url=alunos/add" method="POST">
  <fieldset>
    <legend>Cadastro de Alunos</legend>
    <div class="form-group">
      <label>Nome</label>
      <input type="text" class="form-control" name="nome" id="nome"  placeholder="Nome">
      <label>Email</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="Email">
      <label>Idade:</label>
      <input type="text" class="form-control" name="idade" id="idade"  placeholder="Idade">
      <label>Peso</label>
      <input type="text" class="form-control" name="peso" id="peso"  placeholder="Peso">
      <small class="form-text text-muted">Preencha seu peso com a medida bruta ex: 80.</small>

      <label>Altura</label>
      <input type="text" class="form-control" name="altura" id="altura" placeholder="Altura">
      <small class="form-text text-muted">Preencha em centímetros ex: 190.</small>

      <label>Sexo</label>
      <input type="text" class="form-control"name="sexo" id="sexo"  placeholder="Sexo">
      <small class="form-text text-muted">Preencha com "m" para masculino e "f" para feminino.</small>
      </fieldset>
      <button type="submit" class="btn btn-warning">Adicionar</button>
      </fieldset>
      </fieldset>
      <fildset>
      <a href= "<?php echo BASE_URL ?>/?url=menu">
                        <button type="button" class="btn btn-primary ">Voltar</button>
                    </a>    
                    <p class="mt-5 mb-3 text-muted text-center">&copy;You-Fitness 2020</p>
      
      </fieldset>
    </div>
   
</form>