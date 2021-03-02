<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGE - Sistema Gerenciador de Estoque</title>
    <link rel="stylesheet" type="text/css" href="_css/style.css">
    <link rel="stylesheet" type="text/css" href="_css/cadastrarVendedor.css">
    <link rel="stylesheet" type="text/css" href="_css/pagesCadastro.css">
    <style>
        .campoMenor {
            width: 140px;
        }
    </style>
</head>
<body>
    <div id="interface">
        <header id="cabecalho">
            <h1>SGE - Sistema Gerenciador de Estoque</h1>
        </header>
        <section id="conteudo">
            <div class="telaLoginCadastro telaCadastroVendedor" style="margin: 8vh auto auto auto;">
                <img src="_imgs/insert-prod.png" id="iconeUsuario" alt="Ícone cadastro produto">
                <h3>Cadastrar Produto</h3>
                <form method="GET">
                    <div class="campos">
                        <fieldset>
                            <legend>Informações Pessoais</legend>
                            <table id="tableInfoPessoais">
                                <tr>
                                    <td class="alinhaDireita"><label for="nome">Nome:</label></td>
                                    <td colspan="3"><input type="text" id="nome" name="nome" size="50"></td>
                                </tr>
                                <tr>
                                    <td class="alinhaDireita"><label for="categoria">Categoria:</label></td>
                                    <td>
                                        <select id="categoria" name="categoria" style="font-size: 11pt;padding: 2px 0px 2px 0px;">
                                            <!-- Inserir categorias dinamicamente -->
                                        </select>
                                    </td>
                                    <td><label for="estMin">Est. Mín.:</label></td>
                                    <td><input type="number" id="estMin" name="estMin" class="campoMenor" placeholder="Somente números"></td>
                                </tr>
                                <tr>
                                    <td class="alinhaDireita"><label for="valCom">Valor Compra:</label></td>
                                    <td><input type="number" id="valCom" name="valCom" class="campoMenor" placeholder="Somente números"></td>
                                    <td class="alinhaDireita"><label for="valVen">Valor Venda:</label></td>
                                    <td><input type="number" id="valVen" name="valVen" class="campoMenor" placeholder="Somente números"></td>
                                </tr>
                            </table>
                        </fieldset>
                    </div>
                    <div class="btnSubmit btnCadastrarVendedor">
                        <input type="submit" value="Cadastrar">
                    </div>
                </form>
            </div>
        </section>
        <footer id="rodape">
            <nav id="menu">
                <ul>
                    <li><a href="cadastrar-vendedor.php" class="nao-ativo">Cadastrar Vendedor</a> |</li>
                    <li><a href="cadastrar-cliente.php" class="nao-ativo">Cadastrar Cliente</a> |</li>
                    <li><a href="#" class="ativo">Cadastrar Produto</a> |</li>
                    <li><a href="index.html" class="nao-ativo">Fazer Login</a> |</li>
                    <li><a href="caixa.html" class="nao-ativo">Caixa</a></li>
                </ul>
            </nav>
        </footer>
    </div>
</body>
</html>