<?php

namespace controller;

use service\workshopService;
use template\WorkshopTemp;
use template\ITemplate;

class Workshop
{
    private ITemplate $template;

    public function __construct()
    {
        $this->template = new WorkshopTemp();
    }

    // Lista workshop por ID
    public function listarId()
    {
        $id = $_GET['id'];
        $service = new WorkshopService();
        $resultado = $service->listarId($id);

        $this->template->layout("\\public\\workshop\\listarWorkshop.php", $resultado);
    }

    // Insere um novo workshop
    public function inserir()
    {
        $titulo = $_POST["titulo"];
        $descricao = $_POST["descricao"];
        $data = $_POST["data"];
        $vagas = $_POST["vagas"];

        $service = new WorkshopService();
        $service->inserir($titulo, $descricao, $data, $vagas);

        header("location: /seu_projeto/workshop/listar?info=1");
    }

    // Formulário para cadastro de workshop
    public function formulario()
    {
        $this->template->layout("\\public\\workshop\\formWorkshop.php");
    }

    // Edita workshop
    public function alterar()
    {
        $id = $_POST["workshop_id"];
        $titulo = $_POST["titulo"];
        $descricao = $_POST["descricao"];
        $data = $_POST["data"];
        $vagas = $_POST["vagas"];

        $service = new WorkshopService();
        $service->alterar($id, $titulo, $descricao, $data, $vagas);

        header("location: /seu_projeto/workshop/listar?info=2");
    }

    // Apaga workshop
    public function apagar()
    {
        $id = $_GET["id"];
        $service = new WorkshopService();
        $service->apagar($id);

        header("location: /seu_projeto/workshop/listar?info=3");
    }
}