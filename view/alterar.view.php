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

  .form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }

  .form-signin input[type="password"] {
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
<form class="form-signin">
  <label>Nome Completo</label>
  <input type="text" class="form-control" name="nome" value="<?php echo $_POST['nome']; ?>" />
  <label>Email</label>
  <input type="email" class="form-control" name="email" value="<?php echo $_POST['email']; ?>" />
  <label>Idade</label>
  <input type="text" class="form-control" name="idade" value="<?php echo $_POST['idade']; ?>" />
  <label>Peso</label>
  <input type="text" class="form-control" name="peso" value="<?php echo $_POST['peso']; ?>" />
  <small class="form-text text-muted">Preencha seu peso com a medida bruta ex: 80.</small>
  <label>Altura</label>
  <input type="text" class="form-control" name="altura" value="<?php echo $_POST['altura']; ?>" />
  <small class="form-text text-muted">Preencha em centímetros ex: 190.</small>
  <label>Sexo</label>
  <input type="text" class="form-control" name="sexo" value="<?php echo $_POST['sexo']; ?>" />
  <small class="form-text text-muted">Preencha com "m" para masculino e "f" para feminino.</small>
  <button type="submit" class="btn btn-warning">Alterar</button>
</form>