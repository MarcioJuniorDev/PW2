<?php
namespace Etec\Marcio\Model;

class BancoDeDados
{
    // variavel para conexão. precisa ter o "\PDO"(permite conectar a varios bancos de dados disponiveis, adiciona algumas funcionalidades)
    private \PDO $conexao;

    // prepara o objeto pra ser criado
    public function __construct()
    {
        // instancia a classe PDO na varivel conexao. Os parametros são, respectivamente: o endereço do banco de dados, o host, e o nome do banco (1° parametro); usuario do banco de dados (2°) e a senha (3°)
        $this->conexao = new \PDO("mysql:host=localhost;dbname=dbSistema", "root", "");
    }

    // vai cadastrar os usuarios no banco de dados
    public function salvarUsuario(USUARIO $u)
    {
        // recebe o valor do sql preparado (inserto com o login e senha)
        $insertUsuario = $this->conexao->prepare("INSERT INTO USUARIO(LOGIN, SENHA) VALUES (:login, :senha)");

        // vincula o valor do USUARIO.php com os placeholders do insertUsuario
        $insertUsuario->bindValue(":login", $u->login);
        $insertUsuario->bindValue(":senha", $u->senha);

        // executa o comando
        return $insertUsuario->execute();
    }
}