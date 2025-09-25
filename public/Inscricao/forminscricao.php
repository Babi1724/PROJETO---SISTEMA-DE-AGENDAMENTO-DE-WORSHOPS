<form action="/workshop/inscricao/salvar" method="post">
    <?php if ($parametro != null) { ?>
        <!-- Se for edição, passa o ID da inscrição -->
        <input type="hidden" name="inscricao_id" value="<?= $parametro[0]["inscricao_id"] ?>" />
    <?php } ?>

    <!-- Nome do participante -->
    <label>Nome do participante:</label>
    <input type="text" name="nome" 
           value="<?= ($parametro != null) ? $parametro[0]["nome"] : "" ?>" required />
    <br />

    <!-- Email -->
    <label>Email:</label>
    <input type="email" name="email" 
           value="<?= ($parametro != null) ? $parametro[0]["email"] : "" ?>" required />
    <br />

    <!-- Telefone -->
    <label>Telefone:</label>
    <input type="text" name="telefone" 
           value="<?= ($parametro != null) ? $parametro[0]["telefone"] : "" ?>" required />
    <br />

    <!-- Workshop escolhido -->
    <label>Workshop:</label>
    <select name="workshop" required>
        <option value="">Selecione...</option>
        <option value="Programação" <?= ($parametro != null && $parametro[0]["workshop"] == "Programação") ? "selected" : "" ?>>Programação</option>
        <option value="Robótica" <?= ($parametro != null && $parametro[0]["workshop"] == "Robótica") ? "selected" : "" ?>>Robótica</option>
        <option value="Design Thinking" <?= ($parametro != null && $parametro[0]["workshop"] == "Design Thinking") ? "selected" : "" ?>>Design Thinking</option>
    </select>
    <br />

    <!-- Data da inscrição -->
    <label>Data da inscrição:</label>
    <input type="date" name="data_inscricao" 
           value="<?= ($parametro != null) ? $parametro[0]["data_inscricao"] : date('Y-m-d') ?>" required />
    <br />

    <input type="submit" value="Confirmar Inscrição">
</form>