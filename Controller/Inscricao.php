<?php

namespace controller;

use service\inscricaoService;
use template\InscricaoTemp;
use template\ITemplate;

class Inscricao
{
    private ITemplate $template;

    public function __construct()
    {
        $this->template = new InscricaoTemp();
    }

    // Lista inscrição por ID
    public function listarId()
    {
        $id = $_GET['id'];
        $service = new InscricaoService();
        $resultado = $service->listarId($id);

        $this->template->layout("\\public\\inscricao\\listarInscricao.php", $resultado);
    }

    // Insere uma nova inscrição
    public function inserir()
    {
        $fk_usuario = $_POST["fk_usuario"];
        $fk_workshop = $_POST["fk_workshop"];

        $service = new InscricaoService();
        $service->inserir($fk_usuario, $fk_workshop);

        header("location: /seu_projeto/inscricao/listar?info=1");
    }

    // Formulário para cadastro de inscrição
    public function formulario()
    {
        $this->template->layout("\\public\\inscricao\\formInscricao.php");
    }

    // Edita inscrição (ex.: mudar workshop)
    public function alterar()
    {
        $id = $_POST["inscricao_id"];
        $fk_workshop = $_POST["fk_workshop"];

        $service = new InscricaoService();
        $service->alterar($id, $fk_workshop);

        header("location: /seu_projeto/inscricao/listar?info=2");
    }

    // Apaga inscrição
    public function apagar()
    {
        $id = $_GET["id"];
        $service = new InscricaoService();
        $service->apagar($id);

        header("location: /seu_projeto/inscricao/listar?info=3");
    }

    // Lista todas as inscrições de um usuário
    public function listarPorUsuario()
    {
        $usuario_id = $_GET['usuario_id'];
        $service = new InscricaoService();
        $resultado = $service->listarPorUsuario($usuario_id);

        $this->template->layout("\\public\\inscricao\\listarInscricao.php", $resultado);
    }

    // Lista todos os usuários inscritos em um workshop
    public function listarPorWorkshop()
    {
        $workshop_id = $_GET['workshop_id'];
        $service = new InscricaoService();
        $resultado = $service->listarPorWorkshop($workshop_id);

        $this->template->layout("\\public\\inscricao\\listarInscricao.php", $resultado);
    }
}