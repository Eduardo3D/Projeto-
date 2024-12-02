
<section class="section">
        <div class="container">
            <h1 class="title">Formulário de Suporte</h1>
            <form action="./index.php?acao=atualizar" method="POST">
                <div class="field">
                    <label class="label">id_usuario</label>
                    <div class="control">
                        <input class="input" type="text" name="id_usuario" placeholder="Digite seu username" value="<?= !empty($usuario)? $usuario[0]->getId_usuario():''?>" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label">comentario</label>
                    <div class="control">
                        <input class="input" type="text" name="comentario" placeholder="Digite seu comentário" value="<?= !empty($usuario)? $usuario[0]->getComentario():''?>" required>
                    </div>
                </div>

                <p><strong>Está ativo?</strong></p>
                <div class="radios">
                    <div class="control">
                        <label class="radio">
                            <input type="radio" name="ativo" value="1" <?= !empty($usuario) && $usuario[0]->getAtivo() == 1 ? 'checked' :''?>>
                           Sim
                        </label>
                        <label class="radio">
                            <input type="radio" name="ativo" value="0" <?= !empty($usuario) && $usuario[0]->getAtivo() == 0 ? 'checked' :''?>>
                           Não
                        </label>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <button class="button is-primary">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    