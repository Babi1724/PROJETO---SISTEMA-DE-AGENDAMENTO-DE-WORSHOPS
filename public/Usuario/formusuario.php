<form action="/workshop/usuario/salvar" method="post">
    <?php if ($parametro != null) { ?>
        <!-- Se for edição, passa o ID do usuário -->
        <input type="hidden" name="usuario_id" value="<?= $parametro[0]["usuario_id"] ?>" />
    <?php } ?>

    <!-- Nome -->
    <label>nome:</label>
    <input type="text" name="nome" 
           value="<?= ($parametro != null) ? $parametro[0]["nome"] : "" ?>" required />
    <br />

    <!-- Email -->
    <label>email:</label>
    <input type="email" name="email" 
           value="<?= ($parametro != null) ? $parametro[0]["email"] : "" ?>" required />
    <br />

    <!-- Senha -->
    <label>Senha:</label>
    <input type="password" name="senha" required />
    <br />

    <!-- Telefone -->
    <label>Telefone:</label>
    <input type="text" name="telefone" 
           value="<?= ($parametro != null) ? $parametro[0]["telefone"] : "" ?>" required />
    <br />

    <!-- data_cadastro -->
    <label>data_cadastro:</label>
    <input type="date" name="data_cadastro" 
           value="<?= ($parametro != null) ? $parametro[0]["data_cadastro"] : "" ?>" required />
    <br />

    

    <input type="submit" value="Salvar Usuário">
</form>