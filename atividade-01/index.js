// escutador pra ver se o conteudo foi carregado
document.addEventListener("DOMContentLoaded", () =>
{
    // cria função assincrona
    async function Verificar()
    {
        try 
        {
            // espera os dados do php carregarem
            const carregou = await fetch("http://localhost/atividade-01/verificacao.php");

            // senão carregou, emite um erro
            if (!carregou.ok)
            {
                throw new Error("o servidor não respondeu corretamente");
            }

            // variaveis com o valor do php
            const senha = await carregou.text();
            // variaveis com o valor que o usuario digitou
            let txtUsuario = document.getElementById("txtUsuario").value;
            let txtSenha = document.getElementById("txtSenha").value;

            // se qualquer um dos valores for diferente do informado pelo php, ele pede para digitar novamente
            if (txtUsuario != senha || txtSenha != senha)
            {
                alert("usuario ou senha incorreto. tente novamente.");
            }
            // se nenhum valor for diferente do informado, o login está correto e passa para a página principal
            else
            {
                window.location.href="http://localhost/atividade-01/main.html";
            }
        } 
        catch (error) 
        {
            // mostra o erro
            console.error("erro ao carregar as informações", error);
        }
    }

    // executa o codigo quando o botao btnAcessar é apertado
    btnAcessar.addEventListener("click", () => 
    {
        Verificar();      
    });
});