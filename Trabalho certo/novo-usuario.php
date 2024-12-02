<?php require __DIR__."/header.php"; ?>

<section class="section">
        <div class="container">
        <div class="columns is-centered">
                <div class="column is-half">
                    <div class="box">
            <h1 class="title">Formulário de Cadastro</h1>
            <form action="./index.php?acao=cadastrar" method="POST">
                <div class="field">
                    <label class="label">Username</label>
                    <div class="control">
                        <input class="input" type="text" name="usuario" placeholder="Digite seu username" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Nome completo</label>
                    <div class="control">
                        <input class="input" type="text" name="nome" placeholder="Digite seu nome" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Password</label>
                    <div class="control">
                        <input class="input" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>
                </div>

                <p><strong>Está ativo?</strong></p>
                <div class="radios">
                    <div class="control">
                        <label class="radio">
                            <input type="radio" name="ativo" value="1">
                           Sim
                        </label>
                        <label class="radio">
                            <input type="radio" name="ativo" value="0">
                           Não
                        </label>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <input type="submit" value="Cadastrar" class="button has-backgroun-white">
                    </div>
                </div>
            </form>
        </div>
</div>
</div>
</div>
</section>

<?php require __DIR__."/footer.php"; ?>













