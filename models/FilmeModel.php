<?php

require_once "Conexao.php";
require_once "Filme.php";

class FilmeModel
{

    private $tabela = "filmes";

    public function create(Filme $c)
    {
        try {
            // Cria string SQL
            $sql = "insert into $this->tabela (genero, filme, descricao, diretor, duracao, estudante, arquivo) values (?,?,?,?,?,?,'')";

            // Prepara conexão com banco de dados
            $stmt = Conexao::getConn()->prepare($sql);

            // Insere dados na consulta
            $stmt->bindValue(1, $c->getGenero());
            $stmt->bindValue(2, $c->getFilme());
            $stmt->bindValue(3, $c->getDescricao());
            $stmt->bindValue(4, $c->getDiretor());
            $stmt->bindValue(5, $c->getDuracao());
            $stmt->bindValue(6, $c->getEstudante());

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
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Filme');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id)
    {
        $stmt = Conexao::getConn()->prepare("select * from $this->tabela where id=?");
        $stmt->bindValue(1, $id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Filme');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Filme $c)
    {
        try {
            // Cria string SQL
            $sql = "update $this->tabela set genero=?, filme=?, descricao=?, diretor=?, duracao=?, estudante=? where id=?";
            // Prepara conexão com banco de dados
            $stmt = Conexao::getConn()->prepare($sql);
            // Insere dados na consulta
            $stmt->bindValue(1, $c->getGenero());
            $stmt->bindValue(2, $c->getFilme());
            $stmt->bindValue(3, $c->getDescricao());
            $stmt->bindValue(4, $c->getDiretor());
            $stmt->bindValue(5, $c->getDuracao());
            $stmt->bindValue(6, $c->getEstudante());
            $stmt->bindValue(7, $c->getId());
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

    public function updateFile(Filme $c)
    {
        try {
            // Cria string SQL
            $sql = "update $this->tabela set arquivo=? where id=?";
            // Prepara conexão com banco de dados
            $stmt = Conexao::getConn()->prepare($sql);
            // Insere dados na consulta
            $stmt->bindValue(1, $c->getArquivo());
            $stmt->bindValue(2, $c->getId());
            // Executa código SQL no banco de dados
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            echo " Número: " . (int)$e->getCode();
        }
    }

    public function findIdInserted()
    {
        $stmt = Conexao::getConn()->prepare("select max(id) as id from $this->tabela");
        $stmt->execute();
        return $stmt->fetch();
    }
}
