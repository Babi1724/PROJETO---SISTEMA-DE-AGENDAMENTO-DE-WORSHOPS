<?php
namespace generic;

class MysqlFactory{
    public MysqlSingleton $banco;
    public function_construct(){
        $this->banco=MysqlSingleton::getInstance();
    }
}