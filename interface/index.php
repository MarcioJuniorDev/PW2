<?php

// interface
// uma interface é um padrão que define quais métodos uma classe deve implementar. Uma interface não pode ter métodos implementados nem atributos nem ser instanciada
// resumo: a interface diz o que a classe tem que ter pelo menos
interface iAutentica
{
    public function fnAutenticar(String $senha): bool;
    public function fnDesautenticar(): void;
    public function fnEstaAutenticado(): bool;
}

// a função fnAutenticar recebe a interface iAutentica (aceita qualquer classe que implementa essa interface)
function fnIAutenticar(iAutentica $moduloDeAutenticação, String $senha): void
{
    // requer que exista a função fnEstaAutenticado (garantido pela interface)
    if ($moduloDeAutenticação -> fnEstaAutenticado())
    {
        return;
    }

    // requer que a função fnAutenticar exista (garantido pela interface)
    if ($moduloDeAutenticação -> fnAutenticar($senha))
    {
        echo "Usuário autenticado com sucesso <br>";
    }
    else
    {
        echo "Senha inválida <br>";
    }
}

class AutentificacaoCachorro implements iAutentica
{
    private bool $autenticado = false;
    public function fnAutenticar(String $senha): bool
    {
        if ($senha === "auau")
        {
            $this->autenticado = true;
        }
        else
        {
            $this->autenticado = false;
        }

        return $this->autenticado;
    }

    public function fnDesautenticar(): void   
    {
        $this->autenticado = false;
        echo "Desautenticado com sucesso";
    }

    public function fnEstaAutenticado(): bool
    {
        return $this -> autenticado;
    }
}

$autenticador = new AutentificacaoCachorro();

fnIAutenticar($autenticador, "uga");
fnIAutenticar($autenticador, "auau");