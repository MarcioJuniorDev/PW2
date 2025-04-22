<!-- abre a tag de início do php -->
<?php
    // classe: molde para os objetos. Usaremos como exemplo uma classe de animal
class Animal
{
    // - atributos da classe. Modelo de declaração: public(visível a todos objetos e modificável) <tipo de variável>(opcional) <variável>

    public int $peso;
    public int $altura;

    // atributo protegido. Variáveis auxiliares. Acessível apenas na própria classe (ou filhas) e herdável. A privada é a mesma coisa, mas não é herdável.
    protected string $quimicaDoSangue;

    // - métodos da classe. Modelo de declaração public(vísivel a todos objetos) function <nome da função>
        
    public function locomover(String $nome)
    {
        echo "$nome andou <br>";
    }

    public function comer(String $nome)
    {
        echo "$nome comeu <br>";
    }

    // método protegido. Acessível apenas na própria classe (ou filhas) e herdável. A privada é a mesma coisa, mas não é herdável.
    protected function produzirInsulina()
    {
        echo "insulina";
    }
}

// instanciando objetos. "cadastro". Modelo de declaração: <variável>(objeto) = new <classe()>
$scooby = new Animal();
$jorge = new Animal();

// atribuindo os atributos das instâncias. Modelo de declaração: <objeto> -> <atributo> = <valor>
$scooby -> altura = 80;
$scooby -> peso = 50;
$scooby -> comer("scooby");
$scooby -> locomover("scooby");

$jorge -> altura = 180;
$jorge -> peso = 100;
$jorge -> comer("jorge");
$jorge -> locomover("jorge");

// herança. Modelo de declaação: class <classe filha> extends <classe pai>
// - a classe cachorro herda os atributos e métodos da classe animal (exceto os privados)
class Cachorro extends Animal
{
    // sobrescrevendo métodos
    public function locomover(String $nome)
    {
        echo "$nome andou au au <br>";
    }
}

class Humano extends Animal
{
    // sobrescrevendo
    public function comer(String $nome)
    {
        echo "$nome mastiga <br>";
    }

    // adicionando
    public function falar(String $nome, String $barrasebarras)
    {
        echo "$nome disse $barrasebarras <br>";
    }
}

$cobra = new Animal();
$cobra -> altura = 30;
$cobra -> peso = 100;
$cobra -> locomover("cobra");
$cobra -> comer("cobra");

$thor = new Cachorro();
$thor -> locomover("thor");
$thor -> comer("thor");

$juliana = new Humano();
$juliana -> falar("juliana", "ce pensa q meu fresstyle é uma diss");
$juliana -> locomover("juliana");