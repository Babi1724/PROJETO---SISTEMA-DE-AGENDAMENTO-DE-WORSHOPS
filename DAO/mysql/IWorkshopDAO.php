<?php

namespace dao;

interface IWorkshopDAO
{
    // Lista todos os workshops
    public function listar();

    // Busca um workshop pelo ID
    public function listarId($id);

    // Insere um novo workshop
    public function inserir($titulo, $descricao, $data, $vagas);

    // Altera os dados de um workshop
    public function alterar($id, $titulo, $descricao, $data, $vagas);

    // Remove um workshop pelo ID
    public function apagar($id);
}