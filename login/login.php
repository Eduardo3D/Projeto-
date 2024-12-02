<?php require __DIR__."/header.php"; ?>

<section class="section">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-half">
                    <div class="box">
                        <h1 class="title has-text-centered">Formulário de Login</h1>
                        <form action="index.php?acao=login" method="post">
                            <div class="field">
                                <label class="label">Nome</label>
                                <div class="control">
                                    <input class="input" type="text" placeholder="Seu nome" name="nome">
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Senha</label>
                                <div class="control">
                                    <input class="input" type="password" placeholder="Sua senha" name="senha" >
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
                                <div class="columns">
                                <div class="column"> <input type="submit" class="button is-primary is-fullwidth" value="Entrar"></div>
                                <div class="column"><a class="button is-primary is-fullwidth" href="novo-usuario.php">Cadastre-se</a> </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require __DIR__."/footer.php"; ?>