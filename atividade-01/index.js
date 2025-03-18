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
            const txtUsuario_correto = "<?=$usuario>";
            const txtSenha_correta = "<?=$senha?>";
            // variaveis com o valor que o usuario digitou
            let txtUsuario = document.getElementById("txtUsuario").value;
            let txtSenha = document.getElementById("txtSenha").value;

            if (txtUsuario != txtUsuario_correto || txtSenha != txtSenha_correta)
            {
                alert("usuario ou senha incorreto. tente novamente.");
            }
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

    // executa o codigo quando o botao é apertado
    btnAcessar.addEventListener("click", () => 
    {
        Verificar();      
    });
});