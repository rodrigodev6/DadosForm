<?php
/**
 * Este arquivo contém uma classe de conexão ao banco de dados.
 * --
 * Primeiro é nomeado o seu namespace seguindo os padrões da psr-4.
 * --
 * Segundo é feito o "use PDO" que faz com que as classes abaixo usem as propriedades da classe PDO do php.
 * --
 * Terceiro dentro da classe ConexaoBanco, é criado uma função que retornará a conexão ao banco de dados informado
 * nos parâmetros 
 */
namespace DadosForm\Database;

use PDO;

class ConexaoBanco 
{
    
    public static function criadorConexao(): PDO
    {
        $database   = "mysql";      // tipo do banco de dados
        $host       = "127.0.0.1";  //serviço que o banco de dados está rodando
        $port       = "3366";       // Porta que configurada para o contêiner Docker MySQL
        $dbname     = "dados_form"; //nome do banco
        $username   = "root";       // usuário com acesso
        $password   = "root";       //senha do usuário

        // na váriavel $dsn é feito uma string "dsn" usando as variáveis já criadas para facilitar o ajuste, 
        // caso algum parâmetro como nome banco seja modificado.
        $dsn    = "$database:host={$host};port={$port};dbname={$dbname}";
        
        //Bloco de debug try catch
        try {
            // abaixo a váriavel $connection é criada como uma nova Instância do PDO
            $connection = new PDO( 
                $dsn,       //o primeiro parâmetro é o dsn
                $username, 
                $password
            );

            // Configuração do modo de erro e do modo de busca padrão do PDO
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
        }
        
        return $connection;
    } 
}