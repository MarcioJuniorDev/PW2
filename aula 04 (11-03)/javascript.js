// objeto padrão do js (document) que referencia à pagina. Escutador de evento (event listener) é adicionado. executa uma função anônima que verifica se o conteúdo foi carregado.
document.addEventListener("DOMContentLoaded", () =>
{
    // cria duas constantes com os valores do btnAcessar e txtValor
    const button = document.getElementById("btnAcessar");
    const inputField = document.getElementById("txtValor");

    // cria uma função assíncrona (async)
    // uma função assíncrona é carregada paralelamente com outros processos utilizando múltiplos núcleos do processador
    async function CarregarInfo()
    {
        try 
        {
            // cria uma constante que espera os dados da função assíncrona anônima "fetch" carregar
            const resposta = await fetch("http://localhost/aula 04 (11-03)/servidor.php");

            // se a resposta não (!) for confirmada, emite um erro
            if (!resposta.ok)
            {
                throw new Error("o servidor não responder corretamente");
            }

        // cria uma constante que espera a resposta ser convertida para texto pela função anônima text()
        const resultado = await resposta.text();
        // atribui o resultado para o valor de inputField
        inputField.value = resultado;
        } 
        catch (error) 
        {
            // mostra o erro
            console.error("erro ao carregar as informações", error);
        }
    }

    // adiciona um escutador de evento no botão que observa o clique
    button.addEventListener("click", () => 
    {
        // executa o carregar info 
        CarregarInfo();
        // mostra o botão funcionou, mesmo que o CarregarInfo() não tenha terminado
        alert("foi");
    });
}
);