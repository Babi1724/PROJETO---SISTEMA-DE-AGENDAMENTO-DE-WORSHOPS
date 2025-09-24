<?php

namespace service;

use dao\mysql\UsuarioDAO;

class UsuarioService extends UsuarioDAO
{
    // Lista todos os usuários
    public function listarUsuarios()
    {
        return parent::listar();
    }

    // Lista usuário pelo ID
    public function listarId($id)
    {
        return parent::listarId($id);
    }

    // Insere um novo usuário
    public function inserir($nome, $email, $senha, $telefone)
    {
        return parent::inserir($nome, $email, $senha, $telefone);
    }

    // Opcional: Atualizar usuário
    public function atualizar($id, $nome, $email, $senha, $telefone)
    {
        return parent::atualizar($id, $nome, $email, $senha, $telefone);
    }

    // Opcional: Deletar usuário
    public function deletar($id)
    {
        return parent::deletar($id);
    }
}
