<?php

namespace dao\mysql;

use dao\IUsuarioDAO;
use generic\MysqlFactory;

class UsuarioDAO extends MysqlFactory implements IUsuarioDAO
{
    // Lista todos os usuários
    public function listar()
    {
        $sql = "SELECT * FROM usuarios";
        $retorno = $this->banco->executar($sql);
        return $retorno;
    }

    // Busca um usuário pelo ID
    public function listarId($id)
    {
        $sql = "SELECT * FROM usuarios WHERE usuario_id = :usuario_id";
        $param = [":usuario_id" => $id];
        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }

    // Insere um novo usuário
    public function inserir($nome, $email, $senha, $telefone)
    {
        $sql = "INSERT INTO usuarios (nome, email, senha, telefone) 
                VALUES (:nome, :email, :senha, :telefone)";
        $param = [
            ":nome" => $nome,
            ":email" => $email,
            ":senha" => $senha,
            ":telefone" => $telefone
        ];
        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }

    // Altera os dados de um usuário
    public function alterar($id, $nome, $email, $senha, $telefone)
    {
        $sql = "UPDATE usuarios 
                SET nome = :nome, email = :email, senha = :senha, telefone = :telefone 
                WHERE usuario_id = :usuario_id";
        $param = [
            ":nome" => $nome,
            ":email" => $email,
            ":senha" => $senha,
            ":telefone" => $telefone,
            ":usuario_id" => $id
        ];
        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }

    // Remove um usuário pelo ID
    public function apagar($id)
    {
        $sql = "DELETE FROM usuarios WHERE usuario_id = :usuario_id";
        $param = [":usuario_id" => $id];
        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }

    // Lista os workshops em que o usuário está inscrito
    public function listarInscricoes($id)
    {
        $sql = "SELECT i.inscricao_id, w.titulo, w.data 
                FROM inscricoes AS i 
                INNER JOIN workshops AS w ON i.fk_workshop = w.workshop_id 
                WHERE i.fk_usuario = :usuario_id";
        $param = [":usuario_id" => $id];
        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }
}