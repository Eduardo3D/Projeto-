<?php require __DIR__ . "/header.php"; ?>

<section class="section">
    <div class="container">
        <h1 class="title">Listagem de Logins</h1>
        <table class="table is-fullwidth is-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($logars)): ?>
                    <?php foreach ($logars as $logar): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($logar->getId()); ?></td>
                            <td><?php echo htmlspecialchars($logar->getNome()); ?></td>
                            <td><?php echo htmlspecialchars($logar->getEmail()); ?></td>
                            <td><?php echo htmlspecialchars($logar->getSenha()); ?></td>

                            <td>
                                <a class="button is-small is-info" href="/index.php?acao=editar&id=<?=$logar->getId()?>">Editar</a>
                                <a class="button is-small is-danger" href="/index.php?acao=excluir&id=<?=$logar->getId()?>">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="has-text-centered"><strong>Base de dados vazia!</strong></td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <?php require __DIR__ . "/footer.php"; ?>