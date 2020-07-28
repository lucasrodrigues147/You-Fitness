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

<form class="form-signin" action="<?php echo BASE_URL ?>/?url=home" method="POST">
    <img class="mb-4" src="/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal text-center">You-Fitness</h1>
    
    <?php
    foreach ($data as $key => $treino) {
    ?>
        <a href="<?php echo BASE_URL ?>/?url=treinos/exercicios&treino_id=<?php echo $treino['id']?>" type="button" class="btn btn-warning btn-lg btn-block"><?php echo $treino['nome']?></a>
    <?php
    }
    ?>
    <a href= "<?php echo BASE_URL ?>/?url=login/sair">
                        <button  type="button" class="btn btn-primary btn-lg btn-block">Sair</button>
                    </a>    

    <p class="mt-5 mb-3 text-muted text-center">&copy;You-Fitness 2020</p>
</form>