<?php

namespace dao;

interface IInscricaoDAO
{
    // Lista todas as inscrições
    public function listar();

    // Busca inscrição pelo ID
    public function listarId($id);

    // Insere uma nova inscrição (usuário em workshop)
    public function inserir($fk_usuario, $fk_workshop);

    // Altera inscrição (por exemplo, mudar workshop)
    public function alterar($id, $fk_workshop);

    // Remove inscrição pelo ID
    public function apagar($id);

    // Lista todas as inscrições de um usuário
    public function listarPorUsuario($usuario_id);

    // Lista todos os usuários inscritos em um workshop
    public function listarPorWorkshop($workshop_id);
}