<?php require __DIR__."/header.php";?>
<section class="section">
        <div class="container">
            <h1 class="title">Editar Login</h1>
            <form action="./index.php?acao=atualizar" method="POST">
                <div class="field">
                    <label class="label">Id</label>
                    <div class="control">
                        <input class="input" type="text" name="id" placeholder="Digite seu id" value="<?= !empty($logar)? $logar[0]->getId():''?>" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Nome</label>
                    <div class="control">
                        <input class="input" type="text" name="nome" placeholder="Digite seu nome" value="<?= !empty($logar)? $logar[0]->getNome():''?>" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Email</label>
                    <div class="control">
                        <input class="input" type="text" name="email" placeholder="Digite seu email" value="<?= !empty($logar)? $logar[0]->getEmail():''?>" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Senha</label>
                    <div class="control">
                        <input class="input" type="password" name="senha" placeholder="Digite sua senha" value="<?= !empty($logar)? $logar[0]->getSenha():''?>" required>
                    </div>
                </div>


                <div class="field">
                    <div class="control">
                        <button class="button is-primary">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    
        <?php require __DIR__."/footer.php"; ?>
