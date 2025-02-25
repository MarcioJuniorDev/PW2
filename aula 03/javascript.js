// limita inconsistencia do javascript
"use strict"

function Repetir()
{
    let nValor = document.getElementById('repete').value;
    let repetir_contador = 0;

    while (contador < 10)
        {
            alert(nValor);
            repetir_contador ++;
        }
}

// cria um vetor
let lista = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
let contador = 0;

// para, o contador é definido no primeiro parametro e vai ate o valor do segundo parametro e é aumentado conforme o terceiro
for (let i = 0; i < lista.length; i++)
{
    // variavel "elemento" vai aparecer
    const elemento = lista[i];
    // mostra a lista no console
    console.log(`Elemento ${elemento}`);
}

// enquanto, se o contador for menor q o tamanho da lista ele continua
while (contador < lista.length)
{
    const elemento = lista[contador];
    console.log(`Elemento ${elemento}`);
    // soma 1 no no contador
    contador++;
}

// para cada (forEach) elemento da lista ele realiza o codigo
lista.forEach
( elemento =>
    {
        console.log(`Elemento ${elemento}`);
    }
);

// "while reverso", faz algo e dps testa a condição
do
{
    const elemento = lista[contador];
    console.log(`Elemento ${elemento}`);
    contador--;
}
while(contador > 0);