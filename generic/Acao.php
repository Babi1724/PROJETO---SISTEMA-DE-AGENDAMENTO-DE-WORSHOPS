<?php
namespace generic;

class Acao{
    private $classe;
    private $metodo;

    public function_construct($classe,$metodo){
        $this->classe = "controller\\".$classe;
        $this->metodo = $metodo;
    }

    public function executar(){
        $obj = new $this ->classe();
        $obj->{$this->metodo}();
    }
}