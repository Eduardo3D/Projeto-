
<section class="section">
    <div class="container">
        <h1 class="title">Listagem de Pagamento</h1>
        <table class="table is-fullwidth is-striped">
            <thead>
                <tr>
                    <th>Curso</th>
                    <th>numerocartao</th>
                    <th>Pagamento</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($pagamentos)): ?>
                    <?php foreach ($pagamentos as $pagamento): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($pagamento->getCurso()); ?></td>
                            <td><?php echo htmlspecialchars($pagamento->getPreco()); ?></td>

                            <td><?= $pagamento->getNumerocartao() == "1"?"Á vista":"Parcelado" ?></td>
           
                            <td>
                                <a class="button is-small is-info" href="/index.php?acaopag=editar&id=<?=$pagamento->getCurso()?>">Editar</a>
                                <a class="button is-small is-danger" href="/index.php?acaopag=excluir&id=<?=$pagamento->getCurso()?>">Excluir</a>
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