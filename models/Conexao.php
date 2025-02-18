<?php
class Conexao {

    private static $instance;

    public static function getConn() {
        if (!isset(self::$instance)) {
            try {
                self::$instance = new \PDO(
                    "mysql:host=localhost;port=3306;dbname=lp3_sistema;charset=utf8",
                    'root',
                    ''
                );
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
                exit();
            }
        }
        return self::$instance;
    }
    

}