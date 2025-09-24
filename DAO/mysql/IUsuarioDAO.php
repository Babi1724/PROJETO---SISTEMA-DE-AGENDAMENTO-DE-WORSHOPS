<?php

namespace dao;

interface IUsuarioDAO
{
    // Lista todos os usuários
    public function listar();

    // Insere um novo usuário
    public function inserir($nome, $email, $senha, $telefone);

    // Busca um usuário pelo ID
    public function listarId($id);

    // Altera os dados de um usuário
    public function alterar($id, $nome, $email, $senha, $telefone);

    // Remove um usuário pelo ID
    public function apagar($id);

    // Lista os workshops em que o usuário está inscrito
    public function listarInscricoes($id);
}