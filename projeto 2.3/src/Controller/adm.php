<?php
namespace Etec\Marcio\Controller;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
class Adm
{
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