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
<!-- <div class="row-6">
    <div class="col-12">
     <h1 class="h3 mb-3 font-weight-normal text-center">You-Fitness</h1>
                      <a href= "<?php echo BASE_URL ?>/?url=add">
                        <button type="button" class="btn btn-primary" >Adicionar</button>
                      </a>  
                      <a href= "<?php echo BASE_URL ?>/?url=treinos">
                        <button type="button" class="btn btn-warning">Treinos</button>
                      </a>  
                      <a href= "<?php echo BASE_URL ?>/?url=alunos">
                        <button type="button" class="btn btn-warning">Alunos</button>
                      </a>   -->

<!-- </div>
</div>
<div class="container">
  <div class="row-2">
    <div class="col-4">
    </div>
    <div class="col-6">
    <a href= "<?php echo BASE_URL ?>/?url=add">
                        <button type="button" class="btn btn-primary" >Adicionar</button>
                      </a>  
    <a href= "<?php echo BASE_URL ?>/?url=treinos">
                        <button type="button" class="btn btn-warning">Treinos</button>
                      </a>  
                      <a href= "<?php echo BASE_URL ?>/?url=alunos">
                        <button type="button" class="btn btn-warning">Alunos</button>
                      </a>  
    </div>
    </div>
    <div class="col-4">
  </div>
  </div>
</div> -->
<form class="form-signin">
  <fieldset>
    <div class="form-group">
      <img class="mb-4" src="/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal text-center">You-Fitness</h1>
      <a href="<?php echo BASE_URL ?>/?url=add">
        <button type="button" class="btn btn-primary">Adicionar</button>
      </a>
      <a href="<?php echo BASE_URL ?>/?url=treinos">
        <button type="button" class="btn btn-warning">Treinos</button>
      </a>
      <a href="<?php echo BASE_URL ?>/?url=alunos">
        <button type="button" class="btn btn-warning">Alunos</button>
      </a>
  
      <p class="mt-5 mb-3 text-muted text-center">&copy;You-Fitness 2020</p>
    </div>
  </fieldset>
  
</form>