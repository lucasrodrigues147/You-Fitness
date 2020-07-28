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

  h1,
  h2,
  h3,
  h4
   {
    color: orange;
    font-family: monospace;
    font-size: 10px;
  }
  h5{
    color: white;
    font-family: monospace;
    font-size: 10px;
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
  button{
    align-items: center;
  }
  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>


<form class="form-signin" action="<?php echo BASE_URL ?>/?url=login/autentication" method="POST">
  <fieldset>
    <div class="form-group">
      <img class="mb-4" src="/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h4 class="h4 mb-5 font-weight-small text-center">You-Fitness</h4>
      <h5 class="h5 mb-5 font-weight-small text-center">Aqui o seu treino, está na palma da sua mão.</h5>
      <a href="<?php echo BASE_URL ?>/?url=login">
        <button type="button" class="btn btn-lg btn-warning btn-block">Clique aqui.</button>
      </a>

      <p class="mt-5 mb-3 text-muted text-center">&copy;You-Fitness 2020</p>
    </div>
  </fieldset>
</form>
