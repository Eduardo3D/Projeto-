<?php require __DIR__."/header.php";?>
<section class="section">
        <div class="container">
            <h1 class="title">Formulário de Pagamento</h1>
            <form action="./index.php?acaopag=atualizar" method="POST">
                <div class="field">
                    <label class="label">curso</label>
                    <div class="control">
                        <input class="input" type="text" name="usuario" placeholder="Digite seu username" value="<?= !empty($usuario)? $usuario[0]->getCurso():''?>" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label">numerocartao</label>
                    <div class="control">
                        <input class="input" type="text" name="numerocartao" placeholder="Digite o número do seu cartão" value="<?= !empty($usuario)? $usuario[0]->getNumerocartao():''?>" required>
                    </div>
                </div>

                <p><strong>preco</strong></p>
                <div class="radios">
                    <div class="control">
                        <label class="radio">
                            <input type="radio" name="ativo" value="Á vista" <?= !empty($usuario) && $usuario[0]->getNumerocartao() == 1 ? 'checked' :''?>>
                           R$90,00 Á vista
                        </label>
                        <label class="radio">
                            <input type="radio" name="ativo" value="parcelado" <?= !empty($usuario) && $usuario[0]->getNumerocartao() == 0 ? 'checked' :''?>>
                           R$90,00 parcelado
                        </label>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <button class="button is-primary">Pagar</button>
                    </div>
                </div>
            </form>
        </div>
    
        <?php require __DIR__."/footer.php"; ?>
