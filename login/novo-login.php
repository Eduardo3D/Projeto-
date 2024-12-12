<?php require __DIR__."/header.php"; ?>

<section class="section">
        <div class="container">
            <h1 class="title">Formulário de Login</h1>
            <form action="./index.php?acao=cadastrar" method="POST">
                <div class="field">
                    <label class="label">Id</label>
                    <div class="control">
                        <input class="input" type="text" name="id" placeholder="Digite seu id" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Nome</label>
                    <div class="control">
                        <input class="input" type="text" name="nome" placeholder="Digite seu nome" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Email</label>
                    <div class="control">
                        <input class="input" type="text" name="email" placeholder="Digite seu email" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Senha</label>
                    <div class="control">
                        <input class="input" type="password" name="senha" placeholder="Digite sua senha" required>
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
