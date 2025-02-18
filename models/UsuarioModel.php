<?php

require_once "Conexao.php";
require_once "Usuario.php";

class UsuarioModel
{

    private $tabela = "usuarios";

    public function create(Usuario $c)
    {
        try {
            // Cria string SQL
            $sql = "insert into $this->tabela 
                    (nome, email, senha) 
                    values (?,?,?)";
            // Prepara conexão com banco de dados
            $stmt = Conexao::getConn()->prepare($sql);
            // Insere dados na consulta
            $stmt->bindValue(1, $c->getNome());
            $stmt->bindValue(2, $c->getEmail());
            $stmt->bindValue(3, $c->getSenha());
           

            // Executa código SQL no banco de dados
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            echo " Número: " . (int)$e->getCode();
        } 
    }
    public function read()
    {
        $stmt = Conexao::getConn()->prepare("select * from $this->tabela");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Usuario');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id)
    {
        $stmt = Conexao::getConn()->prepare("select * from $this->tabela where id=?");
        $stmt->bindValue(1, $id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Usuario');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Usuario $c)
    {
        try {
            // Cria string SQL
            $sql = "update $this->tabela set nome=?, email=? where id=?";
            // Prepara conexão com banco de dados
            $stmt = Conexao::getConn()->prepare($sql);
            // Insere dados na consulta
            $stmt->bindValue(1, $c->getNome());
            $stmt->bindValue(2, $c->getEmail());
            $stmt->bindValue(3, $c->getId());
           

            // Executa código SQL no banco de dados
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            echo " Número: " . (int)$e->getCode();
        }
    }

    public function delete($id)
    {
        try {
            // Cria string SQL
            $sql = "delete from $this->tabela where id=?";
            // Prepara conexão com banco de dados
            $stmt = Conexao::getConn()->prepare($sql);
            // Insere dados na consulta
            $stmt->bindValue(1, $id);
            // Executa código SQL no banco de dados
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            echo " Número: " . (int)$e->getCode();
        }
    }

    public function updatePass(Usuario $c)
    {
        try {
            // Cria string SQL
            $sql = "update $this->tabela set senha=? where id=?";
            // Prepara conexão com banco de dados
            $stmt = Conexao::getConn()->prepare($sql);
            // Insere dados na consulta
            $stmt->bindValue(1, $c->getSenha());
            $stmt->bindValue(2, $c->getId());
            // Executa código SQL no banco de dados
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            echo " Número: " . (int)$e->getCode();
        }
    }

    public function login(Usuario $c)
{
    // Prepara a consulta SQL para verificar o usuário com o email e a senha
    $stmt = Conexao::getConn()->prepare("select * from $this->tabela where email=? and senha=?");
    $stmt->bindValue(1, $c->getEmail());
    $stmt->bindValue(2, $c->getSenha());  // Considerando que a senha já está criptografada (md5)
    $stmt->setFetchMode(PDO::FETCH_CLASS, 'Usuario');
    $stmt->execute();

    // Busca o resultado da consulta (um único usuário)
    return $stmt->fetch();;

}

    
    
    
}
