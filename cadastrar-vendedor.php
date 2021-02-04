<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGE - Sistema Gerenciador de Estoque</title>
    <link rel="stylesheet" type="text/css" href="_css/style.css">
    <link rel="stylesheet" type="text/css" href="_css/cadastrarVendedor.css">
</head>
<body>
    <div id="interface">
        <header id="cabecalho">
            <h1>SGE - Sistema Gerenciador de Estoque</h1>
        </header>
        <section id="conteudo">
            <div class="telaLoginCadastro telaCadastroVendedor" style="margin: 8vh auto auto auto;">
                <img src="_imgs/usuario-cad.png" id="iconeUsuario" alt="Ícone usuário cadastro">
                <h3>Cadastrar Vendedor</h3>
                <form method="GET">
                    <div class="campos">
                        <fieldset>
                            <legend>Informações Pessoais</legend>
                            <table id="tableInfoPessoais">
                                <tr>
                                    <td><label for="nomeCompleto">Nome Completo:</label></td>
                                    <td colspan="3"><input type="text" id="nomeCompleto" name="nomeCompleto" size="50"></td>
                                </tr>
                                <tr>
                                    <td class="alinhaDireita"><label for="email">Email:</label></td>
                                    <td colspan="3"><input type="email" id="email" name="email" size="50"></td>
                                </tr>
                                <tr>
                                    <td class="alinhaDireita"><label for="cpf">CPF:</label></td>
                                    <td><input type="number" id="cpf" name="cpf" placeholder="Somente números"></td>
                                    <td><label for="rg">RG:</label></td>
                                    <td><input type="number" id="rg" name="rg" placeholder="Somente números"><br></td>
                                </tr>
                            </table>
                        </fieldset>
                        <fieldset>
                            <legend>Endereço</legend>
                            <table id="tableEndereco">
                            <tr>
                                <td><label for="rua">Rua:</label></td>
                                <td><input type="text" id="rua" name="rua" class="larguraCampos"></td>
                                <td><label for="numero">Número:</label></td>
                                <td><input type="number" id="numero" name="numero" class="larguraCampos"></td>
                            </tr>
                            <tr>
                                <td><label for="bairro">Bairro:</label></td>
                                <td><input type="text" id="bairro" name="bairro" class="larguraCampos"></td>
                                <td><label for="cep">CEP:</label></td>
                                <td><input type="number" id="cep" name="cep" placeholder="Somente números" class="larguraCampos"></td>
                            </tr>
                            <tr>
                                <td><label for="uf">UF:</label></td>
                                <td>
                                    <select id="uf" name="uf" style="font-size: 11pt;padding: 2px 0px 2px 0px;" class="larguraCampos">
                                        <?php
                                        $estados = array("Maranhão", "Piauí", "Ceará", "Rio Grande do Norte", "Paraíba", "Pernambuco", "Alagoas", "Sergipe", "Bahia");
                                        $uf = array("MA", "PI", "CE", "RN", "PB", "PE", "AL", "SE", "BA");
                                        for ($i = 0; $i < sizeof($estados); $i++) {
                                            if ($estados[$i] != "Rio Grande do Norte") {
                                                echo '<option value="' . $uf[$i] . '">' . $estados[$i] . '</option>';
                                            } else {
                                                echo '<option value="RN" selected="selected">Rio Grande do Norte</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td><label for="cidade">Cidade: </label></td>
                                <td>
                                    <select id="cidade" name="cidade" style="font-size: 11pt;padding: 2px 0px 2px 0px;" class="larguraCampos">
                                        <?php
                                        $cidadesRn = array("Natal", "Mossoró", "Parnamirim", "São Gonçalo do Amarante", "Macaíba", "Ceará-Mirim", "Caicó", "Assu", "Currais Novos", "São José de Mipibu", "Santa Cruz", "Nova Cruz", "Apodi", "João Câmara", "Canguaretama", "Touros", "Macau", "Pau dos Ferros", "Extremoz", "Baraúna", "Areia Branca", "Nísia Floresta", "Goianinha", "São Miguel", "Jucurutu", "São Paulo do Potengi", "Passa-e-Fica", "Angicos", "Lajes", "Montanhas", "Baía Formosa", "Jandaíra", "Caiçara do Norte", "Serra de São Bento", "Ouro Branco", "Lajes Pintadas", "Paraná", "Venha-Ver", "Tibau Ruy Barbosa");
                                        for ($i = 0; $i < sizeof($cidadesRn); $i++) {
                                            echo '<option value="' . $cidadesRn[$i] . '">' . $cidadesRn[$i] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </td>
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
                    <li><a href="#" class="ativo">Cadastrar Vendedor</a> |</li>
                    <li><a href="#" class="nao-ativo">Cadastrar Cliente</a> |</li>
                    <li><a href="#" class="nao-ativo">Cadastrar Produto</a> |</li>
                    <li><a href="index.html" class="nao-ativo">Fazer Login</a> |</li>
                    <li><a href="caixa.html" class="nao-ativo">Compra e Venda</a></li>
                </ul>
            </nav>
        </footer>
    </div>
</body>
</html>