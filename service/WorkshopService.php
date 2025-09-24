<?php

namespace service;

use dao\mysql\WorkshopDAO;

class WorkshopService extends WorkshopDAO
{
    // Lista todos os workshops
    public function listarWorkshops()
    {
        return parent::listar();
    }

    // Lista workshop por ID
    public function listarId($id)
    {
        return parent::listarId($id);
    }

    // Insere um novo workshop
    public function inserir($titulo, $descricao, $data, $local)
    {
        return parent::inserir($titulo, $descricao, $data, $local);
    }

    // Atualiza workshop
    public function atualizar($id, $titulo, $descricao, $data, $local)
    {
        return parent::atualizar($id, $titulo, $descricao, $data, $local);
    }

    // Deleta workshop
    public function deletar($id)
    {
        return parent::deletar($id);
    }
}