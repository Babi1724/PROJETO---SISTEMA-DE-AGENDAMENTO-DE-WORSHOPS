<?php

namespace controller;

use service\usuarioService;
use template\UsuarioTemp;
use template\ITemplate;

class Usuario
{
    private ITemplate $template;

    public function __construct()
    {
        $this->template = new UsuarioTemp();
    }

    // Lista usuário por ID
    public function listarId()
    {
        $id = $_GET['id'];
        $service = new UsuarioService();
        $resultado = $service->listarId($id);

        $this->template->layout("\\public\\usuario\\listarUsuario.php", $resultado);
    }

    // Insere um novo usuário
    public function inserir()
    {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $telefone = $_POST["telefone"];

        $service = new UsuarioService();
        $resultado = $service->inserir($nome, $email, $senha, $telefone);

        header("location: /seu_projeto/usuario/listar?info=1");
    }

    // Formulário para cadastro de usuário
    public function formulario()
    {
        $this->template->layout("\\public\\usuario\\formUsuario.php");
    }

    // Edita usuário (opcional)
    public function alterar()
    {
        $id = $_POST["usuario_id"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $telefone = $_POST["telefone"];

        $service = new UsuarioService();
        $service->alterar($id, $nome, $email, $senha, $telefone);

        header("location: /seu_projeto/usuario/listar?info=2");
    }

    // Apaga usuário
    public function apagar()
    {
        $id = $_GET["id"];
        $service = new UsuarioService();
        $service->apagar($id);

        header("location: /seu_projeto/usuario/listar?info=3");
    }
}
