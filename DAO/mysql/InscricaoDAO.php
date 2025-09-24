<?php

namespace dao\mysql;

use dao\IInscricaoDAO;
use generic\MysqlFactory;

class InscricaoDAO extends MysqlFactory implements IInscricaoDAO
{
    // Listar todas as inscrições
    public function listar()
    {
        $sql = "SELECT * FROM inscricoes";
        $retorno = $this->banco->executar($sql);
        return $retorno;
    }

    // Listar inscrição por ID
    public function listarId($id)
    {
        $sql = "SELECT * FROM inscricoes WHERE inscricao_id = :inscricao_id";
        $param = [":inscricao_id" => $id];
        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }

    // Inserir nova inscrição
    public function inserir($fk_usuario, $fk_workshop)
    {
        $sql = "INSERT INTO inscricoes (fk_usuario, fk_workshop) 
                VALUES (:fk_usuario, :fk_workshop)";
        $param = [
            ":fk_usuario" => $fk_usuario,
            ":fk_workshop" => $fk_workshop
        ];
        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }

    // Alterar inscrição (por exemplo, mudar workshop)
    public function alterar($id, $fk_workshop)
    {
        $sql = "UPDATE inscricoes SET fk_workshop = :fk_workshop WHERE inscricao_id = :inscricao_id";
        $param = [
            ":fk_workshop" => $fk_workshop,
            ":inscricao_id" => $id
        ];
        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }

    // Apagar inscrição
    public function apagar($id)
    {
        $sql = "DELETE FROM inscricoes WHERE inscricao_id = :inscricao_id";
        $param = [":inscricao_id" => $id];
        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }

    // Listar todas as inscrições de um usuário
    public function listarPorUsuario($usuario_id)
    {
        $sql = "SELECT i.inscricao_id, w.titulo, w.data 
                FROM inscricoes AS i 
                INNER JOIN workshops AS w ON i.fk_workshop = w.workshop_id 
                WHERE i.fk_usuario = :usuario_id";
        $param = [":usuario_id" => $usuario_id];
        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }

    // Listar todas as inscrições de um workshop
    public function listarPorWorkshop($workshop_id)
    {
        $sql = "SELECT i.inscricao_id, u.nome, u.email 
                FROM inscricoes AS i 
                INNER JOIN usuarios AS u ON i.fk_usuario = u.usuario_id 
                WHERE i.fk_workshop = :workshop_id";
        $param = [":workshop_id" => $workshop_id];
        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }
}