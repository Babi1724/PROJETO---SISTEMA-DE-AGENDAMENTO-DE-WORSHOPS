<?php
class MysqlSingleton {
    private $usuario = 'root';
    private $senha = '';
    private $dsn = 'mysql:host=localhost;dbname=agendamento_workshops;charset=utf8';
    private $conexao = null;

    // Instância única da classe
    private static $instance = null;

    // Construtor correto
    private function __construct() {
        try {
            $this->conexao = new PDO($this->dsn, $this->usuario, $this->senha);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Erro ao conectar ao banco: ' . $e->getMessage());
        }
    }

    // Método para obter a instância única
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new MysqlSingleton();
        }
        return self::$instance;
    }

    // Método para executar queries
    public function executar($query, $param = array()) {
        if ($this->conexao) {
            $sth = $this->conexao->prepare($query);
            foreach ($param as $k => $v) {
                $sth->bindValue($k, $v);
            }
            $sth->execute();
            return $sth->fetchAll(PDO::FETCH_ASSOC);
        }
        return false;
    }
}