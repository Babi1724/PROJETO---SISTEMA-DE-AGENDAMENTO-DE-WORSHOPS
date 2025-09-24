<?php
namespace generic;

class Controller {
    private $arrChamadas = [];

    public function __construct() {
        // Definição das rotas do sistema
        $this->arrChamadas = [
            "workshop/listar"     => new Acao("Workshop", "listar"),
            "workshop/criar"      => new Acao("Workshop", "criar"),
            "workshop/editar"     => new Acao("Workshop", "editar"),
            "workshop/deletar"    => new Acao("Workshop", "deletar"),

            "usuario/login"       => new Acao("Usuario", "login"),
            "usuario/registrar"   => new Acao("Usuario", "registrar"),
            "usuario/listar"      => new Acao("Usuario", "listar"),

            "inscricao/inscrever" => new Acao("Inscricao", "inscrever"),
            "inscricao/minhas"    => new Acao("Inscricao", "minhas"),
            "inscricao/cancelar"  => new Acao("Inscricao", "cancelar")
        ];
    }

    // Verifica se a rota existe e executa a ação
    public function verificarChamadas($rota) {
        if (isset($this->arrChamadas[$rota])) {
            $acao = $this->arrChamadas[$rota];
            $acao->executar();
            return;
        }
        echo "Rota '$rota' não existe!";
    }
}