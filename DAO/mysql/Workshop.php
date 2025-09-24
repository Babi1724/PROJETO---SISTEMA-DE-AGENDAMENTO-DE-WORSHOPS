<?php

namespace dao\mysql;

use dao\IWorkshopDAO;
use generic\MysqlFactory;

class WorkshopDAO extends MysqlFactory implements IWorkshopDAO
{
    // Listar todos os workshops
    public function listar()
    {
        $sql = "SELECT * FROM workshops";
        $retorno = $this->banco->executar($sql);
        return $retorno;
    }

    // Listar workshop por ID
    public function listarId($id)
    {
        $sql = "SELECT * FROM workshops WHERE workshop_id = :workshop_id";
        $param = [":workshop_id" => $id];
        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }

    // Inserir novo workshop
    public function inserir($titulo, $descricao, $data, $vagas)
    {
        $sql = "INSERT INTO workshops (titulo, descricao, data, vagas) 
                VALUES (:titulo, :descricao, :data, :vagas)";
        $param = [
            ":titulo" => $titulo,
            ":descricao" => $descricao,
            ":data" => $data,
            ":vagas" => $vagas
        ];
        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }

    // Alterar workshop
    public function alterar($id, $titulo, $descricao, $data, $vagas)
    {
        $sql = "UPDATE workshops SET titulo = :titulo, descricao = :descricao, data = :data, vagas = :vagas 
                WHERE workshop_id = :workshop_id";
        $param = [
            ":titulo" => $titulo,
            ":descricao" => $descricao,
            ":data" => $data,
            ":vagas" => $vagas,
            ":workshop_id" => $id
        ];
        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }

    // Apagar workshop
    public function apagar($id)
    {
        $sql = "DELETE FROM workshops WHERE workshop_id = :workshop_id";
        $param = [":workshop_id" => $id];
        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }
}