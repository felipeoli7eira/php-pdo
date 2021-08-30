<table>
    <?php foreach($users as $user): ?>
        <tr>
            <td>
                <?= $user->name ?>
            </td>
            <td>
                <?= $user->email ?>
            </td>
            <td>
                <nav>
                    <a href="/atualizar?user=<?= $user->id ?>">editar</a>
                    <a href="/deletar?user=<?= $user->id ?>">deletar</a>
                </nav>
            </td>
        </tr>
    <?php endforeach ?>
</table>
