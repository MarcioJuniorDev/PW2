<?php

// define o namespace
namespace Etec\Marcio\Controller;

// classe principal
class Principal
{
    /** A classe environment serve como gerenciador de dados que vem do template e do controlador. O papel dela é combinar os dados e gerar o html final. @var \Twig\Environment */
    private \Twig\Environment $ambiente;
    /** O carregador tem a função de ler o template de alguma origem. Neste caso, carregamos o template do sistema de arquivos (ou seja, disco ou armazenamento local) @var \Twig\LoaderzFilesystemLoader */
    private \Twig\Loader\FilesystemLoader $carregador;
    // construtor
    public function __construct()
    {
        // abre o diretório onde se encontram o template
        $this->carregador = new \Twig\Loader\FilesystemLoader("./src/View");

        // combina os dados com o template
        $this->ambiente = new \Twig\Environment($this->carregador);
    }  

    public function inicio(array $dados)
    {
        $dados["titulo"] = "Pagina inicial";
        $dados["mensagem"] = "uga";

        // exibe a pagina
        echo $this->ambiente->render("inicio.html", $dados);
    }

    public function sobre(array $dados)
    {
        $dados["mensagem"] = "uga";

        // exibe a pagina
        echo $this->ambiente->render("sobre.html", $dados);
    }
    public function login(array $dados)
    {
        $dados["mensagem"] = "informe seu login e senha";

        // exibe a pagina
        echo $this->ambiente->render("login.html", $dados);
    }

    public function autenticar(array $dados)
    {
        $login = trim($dados['login']);
        $senha = trim($dados['senha']);

        if($login === "" || $senha === "")
        {
            header("redirect: /login");
        }
        if($login == "usuario123" && $senha == "senha123")
        {
            $dados["mensagem"] = "Login correto!";

            /* CRIA OS COOKIES NO NAVEGADOR E NO SERVIDOR
            CASO UMA SESSÃO AINDA NÃO EXISTA.
            CASO A SESSÃO JÁ EXISTA (LOGIN ANTERIOR JÁ FEITO)
            SESSION_START() RECUPERA OS DADOS DA SESSÃO ANTERIOR. E 
            ATENÇÃO: SEMPRE QUE PRECISAR LER OU GRAVAR DADOS EM UMA SESSÃO, É OBRIGATÓRIO USAR SESSION_START(). */
            session_start();

            /* A partir disso o php disponibiliza uma variável super global
            chamada $_SESSION dentro da qual colocaremos os dados da sessão. E ATENÇÃO: $_SESSION só fica
            disponivel após a execução de dession_start();
            E mais: evite colocar muitas informações na $_SESSION
            pois isso ocupa memória no servidor */
            $_SESSION["id"] = 80;

            /* No código acima guardou-se o número 80 na posição "id" da sessão,
            esse valor ficará salvo mesmo que o usuário ou usuária saia do site e/ou recarregue a página. 
            Curiosidade: se você apagar os cookies do navegador você estará deslogando do site */
            $dados["nome"] = "Banano de pijama";
        }
        echo $this->ambiente->render("autentica.html", $dados);
    }
}