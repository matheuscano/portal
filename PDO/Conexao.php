<?php
namespace PDO;

class Conexao
{
    /**
     * Método que faz a conexão com o PDO
     * @return \PDO\PDO
     */
    public function conecta(){

        try{ //Tenta fazer a conxão
            //Tipo do banco de dados, nome do banco de dados, usuário, senha
            $conexao = new PDO("mysql:host=localhost;dbname=nomedobanco", "root", "root");
            return $conexao;
        }
        catch (PDOException $e){
            echo "Erro ao conectar: ".$e->getMessage();
        }
    }
}

?>