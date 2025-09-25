<a href="/workshop/usuario/formulario">Cadastrar Usuário</a>
<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($parametro as $u) { ?>
        <tr>
            <td><?= $u["usuario_id"] ?></td>
            <td><?= $u["nome"] ?></td>
            <td><?= $u["email"] ?></td>
            <td><?= $u["telefone"] ?></td>

            <td>
                <a href="/workshop/usuario/formularioalterar?id=<?= $u['usuario_id'] ?>">Alterar</a> |
                <a href="/workshop/usuario/apagar?id=<?= $u['usuario_id'] ?>" 
                   onclick="return confirm('Deseja realmente apagar este usuário?')">Apagar</a> |
                <a href="/workshop/inscricao/listarporusuario?id=<?= $u['usuario_id'] ?>">Ver Inscrições</a>
            </td>
        </tr>
    <?php } ?>
</table>