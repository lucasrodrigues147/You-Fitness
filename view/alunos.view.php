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
    .formgroup{
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
</style>
<div  class="form-group">
    <div class="col-12">
     <h1 class="h3 mb-3 font-weight-normal text-center">You-Fitness</h1>
        <table class="table">
            <thead>
                <tr>
                <th width="5%" scope="col">Id</th>
                <th width="70%" scope="col">Nome</th>
                <th width="10%" scope="col">Idade</th>
                <th width="10%" scope="col">Peso</th>
                <th width="10%" scope="col">Altura</th>

                <th width="10%" colspan="1"></th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($data as $key => $alunos) {
            ?>
                <tr>
                    <td><?php echo $alunos['id']?></td>
                    <td><?php echo $alunos['nome']?></td>
                    <td><?php echo $alunos['idade']?></td>
                    <td><?php echo $alunos['peso']?></td>
                    <td><?php echo $alunos['altura']?></td>
                    <td>
                    <a href= "<?php echo BASE_URL ?>/?url=alunos/alterar/?&id=<?php echo $alunos['id']?>">
                        <button type="button" class="btn btn-warning" >
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></button>
                    </a>
                    <a href= "<?php echo BASE_URL ?>/?url=alunos/excluir/?&id=<?php echo $alunos['id']?>">
                        <button type="button" class="btn btn-danger">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></button>
                    </a>    
                    </td>
                </tr>

                <?php
                }
                
                ?>
                
            </tbody>
        </table>
        <a href= "<?php echo BASE_URL ?>/?url=menu">
                        <button type="button" class="btn btn-primary">Voltar</button>
            </a>
    </div>
</div>