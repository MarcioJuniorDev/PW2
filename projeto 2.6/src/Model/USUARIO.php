<?php

namespace Etec\Marcio\Model;

// object relational mapping (ORM), correlaciona a classe com uma tabela do banco de dados
class USUARIO
{
    public int $id;
    public string $login;
    public string $senha;
}