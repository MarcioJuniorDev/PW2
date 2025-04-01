<?php 
    // declarando variáveis
    // - texto
    $mensagem = "Olá mundo";
    // - numero
    $idade = 15;

    // array vazio
    $lista = array();
    // - adicionando elementos ao array
    $lista[] = "teste1";
    $lista[] = "teste2";

    // acessando valores do array por posição
    echo $lista[0];

    // array não vazio
    $lista2 = array("teste1", "teste2");

    // arrays com chave
    $lista4 = array();
    $lista4["RG"] = 3434242413;
    $lista4["CPF"] = 2234323123;
    $lista4[nome] = "nome";
    $lista4[] = "perus";

    // acessando valores do array por hashmap
    echo $lista4["RG"];

    // array com indice numerica
    $lista5 = array();
    $lista5[2] = "uga";
    $lista5[0] = 10;
    $lista5[20] = 45.5;

    // array não vazia com chave
    $lista6 = array("RG" => 5654323234, "CPF" => 433231324, "nome" => "paranaue", "parana"); // parana não tem chave

    // estruturas de repetição
    // - for/para
    for ($i = 0; $i < count($lista); $i++)
    {
        echo $lista[$i];
    }
    // -- foreach (para cada) percorre obrigatoriamente todos os itens da lista 
    foreach ($lista6 as $chave => $valor)
    {
        echo $chave;
        echo $valor;
    }