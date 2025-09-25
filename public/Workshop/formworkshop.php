<form action="/workshop/workshop/salvar" method="post">
    <?php if ($parametro != null) { ?>
        <!-- Se for edição, passa o ID do workshop -->
        <input type="hidden" name="workshop_id" value="<?= $parametro[0]["workshop_id"] ?>" />
    <?php } ?>

    <!-- Título -->
    <label>Título do Workshop:</label>
    <input type="text" name="titulo" 
           value="<?= ($parametro != null) ? $parametro[0]["titulo"] : "" ?>" required />
    <br />

    <!-- Descrição -->
    <label>Descrição:</label>
    <textarea name="descricao" required><?= ($parametro != null) ? $parametro[0]["descricao"] : "" ?></textarea>
    <br />

    <!-- Data -->
    <label>Data do Workshop:</label>
    <input type="date" name="data" 
           value="<?= ($parametro != null) ? $parametro[0]["data"] : "" ?>" required />
    <br />

    <!-- Local -->
    <label>Local:</label>
    <input type="text" name="local" 
           value="<?= ($parametro != null) ? $parametro[0]["local"] : "" ?>" required />
    <br />

    <!-- Vagas -->
    <label>Número de vagas:</label>
    <input type="number" name="vagas" min="1" 
           value="<?= ($parametro != null) ? $parametro[0]["vagas"] : "" ?>" required />
    <br />

    <input type="submit" value="Salvar Workshop">
</form>