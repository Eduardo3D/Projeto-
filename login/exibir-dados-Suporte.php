<section class="section">
    <div class="container">
        <h1 class="title">Listagem de Suporte</h1>
        <table class="table is-fullwidth is-striped">
            <thead>
                <tr>
                    <th>id_usuario</th>
                    <th>comentario</th>
                    <th>Perfil Ativo</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($suportes)): ?>
                    <?php foreach ($suportes as $suporte): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($suporte->getId_usuario()); ?></td>
                            <td><?php echo htmlspecialchars($suporte->getComentario()); ?></td>
                            <td><?= $suporte->getAtivo() == "1"?"Sim":"Não" ?></td>
                            <td>
                                <a class="button is-small is-info" href="/index.php?acaosup=editar&id=<?=$suporte->getId_usuario()?>">Editar</a>
                                <a class="button is-small is-danger" href="/index.php?acaosup=excluir&id=<?=$suporte->getId_usuario()?>">Excluir</a>
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
