<?php

namespace service;

use dao\mysql\InscricaoDAO;

class InscricaoService extends InscricaoDAO
{
    // Lista todas as inscrições
    public function listarInscricoes()
    {
        return parent::listar();
    }

    // Lista inscrição por ID
    public function listarId($id)
    {
        return parent::listarId($id);
    }

    // Insere uma nova inscrição
    public function inserir($usuario_id, $workshop_id, $data_inscricao)
    {
        return parent::inserir($usuario_id, $workshop_id, $data_inscricao);
    }

    // Atualiza inscrição
    public function atualizar($id, $usuario_id, $workshop_id, $data_inscricao)
    {
        return parent::atualizar($id, $usuario_id, $workshop_id, $data_inscricao);
    }

    // Deleta inscrição
    public function deletar($id)
    {
        return parent::deletar($id);
    }
}