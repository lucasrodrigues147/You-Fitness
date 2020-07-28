<form class="form-signin" action="<?php echo BASE_URL ?>/?url=home" method="POST">
    <img class="mb-4" src="/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <div class="container">
        <div class="row">

                <div class="col-8">
                    <h1 class="h3 mb-3 font-weight-normal text-center">You-Fitness</h1>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                        Adicionar
                    </button>
                 
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Formulário de Aluno</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <fieldset>
                                            <legend>Nome Completo</legend>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="nome" aria-describedby="Digite seu nome completo." placeholder="Nome Completo">
                                            </div>
                                            <legend>E-mail</legend>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="nome" aria-describedby="Digite seu nome completo." placeholder="Nome Completo">
                                            </div>
                                            <div class="form-group">
                                                <legend>Idade</legend>
                                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Idade">
                                            </div>
                                            <div class="form-group">
                                                <legend>Peso</legend>
                                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Peso">
                                            </div>
                                            <div class="form-group">
                                                <legend>Altura</legend>
                                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Altura">
                                            </div>

                                            <fieldset class="form-group">
                                                <legend>Sexo</legend>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        Feminino
                                                    </label>
                                                </div>
                                                <div class="form-check disabled">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        Masculino
                                                    </label>
                                                </div>
                                            </fieldset>

                                            <button type="submit" class="btn btn-warning">Salvar</button>
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Alterar Dados</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <fieldset>
                                            <legend>Nome Completo</legend>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="nome" aria-describedby="Digite seu nome completo." placeholder="Nome Completo">
                                            </div>
                                            <legend>E-mail</legend>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="nome" aria-describedby="Digite seu nome completo." placeholder="Nome Completo">
                                            </div>
                                            <div class="form-group">
                                                <legend>Idade</legend>
                                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Idade">
                                            </div>
                                            <div class="form-group">
                                                <legend>Peso</legend>
                                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Peso">
                                            </div>
                                            <div class="form-group">
                                                <legend>Altura</legend>
                                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Altura">
                                            </div>

                                            <fieldset class="form-group">
                                                <legend>Sexo</legend>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        Feminino
                                                    </label>
                                                </div>
                                                <div class="form-check disabled">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        Masculino
                                                    </label>
                                                </div>
                                            </fieldset>

                                            <button type="submit" class="btn btn-warning">Alterar</button>
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Lista de Alunos</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nome</th>
                                                <th scope="col">Idade</th>
                                                <th scope="col">Peso</th>
                                                <th scope="col">Altura</th>
                                            </tr>
                                        
                                        </thead>
                                        <tbody>

                                        <?php

                                        foreach ($data as $key => $usuario) {
                                        ?>
                                            <tr>
                                                <th scope="row"><?php echo $usuario['id']?></th>
                                                <td><?php echo $usuario['id']?></td>
                                                <td><?php echo $usuario['id']?></td>
                                                <td><?php echo $usuario['id']?></td>
                                                <td>
                                                    <button type="button" class="btn btn-warning" >Alterar </button>
                                                    <button type="button" class="btn btn-danger">Excluir</button>
                                                </td>
                                            </tr>

                                            <?php
                                            }
                                            
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            <div class="col">
            </div>
        </div>

        <div class="row">
        <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                        <th width="25%" scope="col">Nome</th>
                        <th width="20%" scope="col">Email</th>
                        <th width="20%" scope="col">Tipo</th>
                        <th width="10%" colspan="1"></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php

                    foreach ($data as $key => $usuario) {
                    ?>
                        <tr>
                            <td><?php echo $usuario['nome']?></td>
                            <td><?php echo $usuario['Email']?></td>
                            <td><?php echo $usuario['tipo']?></td>
                            <td>
                                <button type="button" class="btn btn-warning" >Alterar </button>
                                <button type="button" class="btn btn-danger">Excluir</button>
                            </td>
                        </tr>

                        <?php
                        }
                        
                        ?>
                     
                    </tbody>
                </table>'
            </div>
        </div>


    </div>

    <p class="mt-5 mb-3 text-muted text-center">&copy;You-Fitness 2020</p>


</form>