<a href="/workshop/inscricao/formulario">Nova Inscrição</a>
<table>
    <tr>
        <th>ID</th>
        <th>Participante</th>
        <th>Email</th>
        <th>Workshop</th>
        <th>Data da Inscrição</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($parametro as $i) { ?>
        <tr>
            <td><?= $i["inscricao_id"] ?></td>
            <td><?= $i["nome_usuario"] ?></td>
            <td><?= $i["email_usuario"] ?></td>
            <td><?= $i["titulo_workshop"] ?></td>
            <td><?= date("d/m/Y", strtotime($i["data_inscricao"])) ?></td>

            <td>
                <a href="/workshop/inscricao/formularioalterar?id=<?= $i['inscricao_id'] ?>">Alterar</a> |
                <a href="/workshop/inscricao/apagar?id=<?= $i['inscricao_id'] ?>" 
                   onclick="return confirm('Deseja realmente apagar esta inscrição?')">Apagar</a>
            </td>
        </tr>
    <?php } ?>
</table>