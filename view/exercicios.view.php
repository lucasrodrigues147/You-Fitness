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

    .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
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

        <a href= "<?php echo BASE_URL ?>/?url=treinos">
                        <button type="button" class="btn btn-primary btn-lg btn-block">Voltar</button>
                    </a>    
    <p class="mt-5 mb-3 text-muted text-center">&copy;You-Fitness 2020</p>
</form>