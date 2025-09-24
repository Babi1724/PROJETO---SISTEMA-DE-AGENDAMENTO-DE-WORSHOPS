<?php

namespace template;

use template\ITemplate;

class WorkshopTemp implements ITemplate
{
    public function cabecalho()
    {
        echo "<header><h1>Gestão de Workshops</h1></header>";
    }

    public function rodape()
    {
        echo "<footer><p>© 2025 Workshop</p></footer>";
    }

    public function layout($caminho, $parametro = null)
    {
        $this->cabecalho();

        if ($parametro) {
            extract($parametro);
        }

        include $_SERVER["DOCUMENT_ROOT"] . "\\PROJETO-SISTEMA DE AGENDAMENTO DE WORKSHOP" . $caminho;

        $this->rodape();
    }
}
