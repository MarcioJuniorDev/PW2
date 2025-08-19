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

    // recupera os dados do usuario. "?" indica que a função pode retornar nulo ou uma instância da classe na sua frente
    public function RecuperarUsuario(int $id): ?USUARIO
    {
        // prepara a instrução SQL para buscar o usuário pelo ID
        $selectUsuario = $this->conexao->prepare("SELECT ID, LOGIN, SENHA FROM User WHERE id = :id");

        // vincula o id da função com o do SQL
        $selectUsuario->bindValue(":id", $id);
        // executa o comando sql
        $selectUsuario->execute();

        // busca o resultado e cria um objeto User cado seja encontrado
        $resultado = $selectUsuario->fetchObject(USUARIO::class);

        if ($resultado != null)
        {
            return $resultado;
        }
        
        return null;
    }
    
    // vai cadastrar os usuarios no banco de dados
    public function salvarUsuario(USUARIO $u)
    {
        // recebe o valor do sql preparado (insert com o login e senha)
        $insertUsuario = $this->conexao->prepare("INSERT INTO USUARIO(LOGIN, SENHA) VALUES (:login, :senha)");

        // vincula o valor do USUARIO.php com os placeholders do insertUsuario
        $insertUsuario->bindValue(":login", $u->login);
        $insertUsuario->bindValue(":senha", $u->senha);

        // executa o comando
        return $insertUsuario->execute();
    }
}