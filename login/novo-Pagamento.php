<?php require __DIR__."/header.php"; ?>

<section class="section">
        <div class="container">
            <h1 class="title">Formulário de Pagamento</h1>
            <form action="./index.php?acaopag=cadastrar" method="POST">
                <div class="field">
                    <label class="label">Curso</label>
                    <div class="control">
                        <input class="input" type="text" name="curso" placeholder="Digite o curso desejado" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label">preço</label>
                    <div class="control">
                        <input class="input" type="text" name="preco" placeholder="Digite o preço" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Número do cartao</label>
                    <div class="control">
                        <input class="input" type="text" name="numerocartao" placeholder="Digite o numero do seu cartao" required>
                    </div>
                </div>

                <p><strong>Preco</strong></p>
                <div class="radios">
                    <div class="control">
                        <label class="radio">
                            <input type="radio" name="ativo" value="1">
                           R$90,00 Á vista
                        </label>
                        <label class="radio">
                            <input type="radio" name="ativo" value="0">
                           R$90,00 Parcelado
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
    
        <?php require __DIR__."/footer.php"; ?>
