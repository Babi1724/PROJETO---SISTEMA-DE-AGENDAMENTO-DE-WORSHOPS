<a href="/workshop/workshop/formulario">Cadastrar Workshop</a>
<table>
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Descrição</th>
        <th>Data</th>
        <th>Local</th>
        <th>Vagas</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($parametro as $w) { ?>
        <tr>
            <td><?= $w["workshop_id"] ?></td>
            <td><?= $w["titulo"] ?></td>
            <td><?= $w["descricao"] ?></td>
            <td><?= date("d/m/Y", strtotime($w["data"])) ?></td>
            <td><?= $w["local"] ?></td>
            <td><?= $w["vagas"] ?></td>

            <td>
                <a href="/workshop/workshop/formularioalterar?id=<?= $w['workshop_id'] ?>">Alterar</a> |
                <a href="/workshop/workshop/apagar?id=<?= $w['workshop_id'] ?>" 
                   onclick="return confirm('Deseja realmente apagar este workshop?')">Apagar</a> |
                <a href="/workshop/inscricao/listarporworkshop?id=<?= $w['workshop_id'] ?>">Ver Inscrições</a>
            </td>
        </tr>
    <?php } ?>
</table>
