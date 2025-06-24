<?php
namespace Etec\Marcio\Controller;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
class Adm
{
     private \Twig\Environment $ambiente;
     private \Twig\Loader\FilesystemLoader $carregador;
     public function __construct()
     {
          $this->carregador = new \Twig\Loader\FilesystemLoader("./src/View");

          $this->ambiente = new \Twig\Environment($this->carregador);
     }
     function autenticar(array $dados)
     {
          session_start();
          if (isset($dados['login']) && isset($dados['senha']))
          {
               // aqui você faria a autenticação com o banco de dados simulando uma autenticação bem sucedida
               $_SESSION['id'] = 1;
               $_SESSION['tipo'] = "adm";

               echo "Usuário adm autenticado";
          }
          else
          {
               echo "Usuario adm errado";
          }
     }

     function login(array $dados)
     {
          echo $this->ambiente->render("loginAdm.html", $dados);
     }
    function listarUsuarios(array $dados)
    {
       session_start();
       if (isset($_SESSION['id']))
       {
            // pessoa logada
            echo "sabe muito";
       }
       else
       {
            // pessoa não logada
            echo "burro burro";
       }
    }
}