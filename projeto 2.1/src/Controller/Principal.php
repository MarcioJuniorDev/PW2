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
        echo $this->ambiente->render("autentica.html", $dados);
    }
}