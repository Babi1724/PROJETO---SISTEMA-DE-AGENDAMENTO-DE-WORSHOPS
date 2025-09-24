<?php

namespace template;

use template\ITemplate;

class UsuarioTemp implements ITemplate
{
    public function cabecalho()
    {
        echo "<header><h1>Gestão de Usuários</h1></header>";
    }

    public function rodape()
    {
        echo "<footer><p>© 2025 Workshop</p></footer>";
    }

    public function layout($caminho, $parametro = null)
    {
        $this->cabecalho();

        if ($parametro) {
            extract($parametro); // transforma array em variáveis
        }

        include $_SERVER["DOCUMENT_ROOT"] . "\\PROJETO-SISTEMA DE AGENDAMENTO DE WORKSHOP" . $caminho;

        $this->rodape();
    }
}