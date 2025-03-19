// espera tudo carregar
document.addEventListener("DOMContentLoaded", () => 
{
    // constante do objeto js do botão html
    const btnCalcular = document.getElementById("btnCalcular");
    // espera o botão ser clicado
    btnCalcular.addEventListener("click", () => 
    {
        // declara as variaveis
        let nValor1 = parseFloat(document.getElementById("txtValor1").value);
        let nValor2 = parseFloat(document.getElementById("txtValor2").value);
        let cSinal = document.getElementById("txtSinal").value;

        // switch para ver o valor do sinal e executa a operação matemática de acordo
        switch(cSinal)
        {
            case "+": alert(nValor1 + nValor2); break;
            case "-": alert(nValor1 - nValor2); break;
            case "*": alert(nValor1 * nValor2); break;
            case "/": alert(nValor1 / nValor2); break;
        }
    });
});
