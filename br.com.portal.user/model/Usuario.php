<?php
namespace model;
require_once "../../PDO/Conexao.php";

class Usuario
{
    private $bd;

    public function __construct(){
        $this->bd = new Conexao.php;
    }

    public function listar(){
        $query = "SELECT * FROM usuario";

        //Define a consulta
        $consulta = $this->bd->query($query);
        //Executa a consulta
        $consulta->execute();

        //Traz todos os registros para a variável $dados
        $dados = $consulta->fetchAll();

        return $dados;
    }

    /**
     * Método Cadastrar
     * @param array $dados ("nome", "email", "senha", "ativo)
     * @return PDO result
     */
    public function cadastrar(array $dados){
        $query = "INSERT INTO usuario (nome, email, senha, ativo) VALUES (:nome, :email, :senha, :ativo)";
        $consulta = $this->bd->prepare($query);
        /* Segurança para os dados */
        $consulta->bindParam(":nome", $dados["nome"]);
        $consulta->bindParam(":email", $dados["email"]);
        $consulta->bindParam(":senha", $dados["senha"]);
        $consulta->bindParam(":ativo", $dados["ativo"], PDO::PARAM_BOOL);//Vai filtrar para o tipo de dados
        //Executa a inserção
        $consulta->execute();

        //Retorna o resultado da consulta
        return $consulta;
    }
}

?>