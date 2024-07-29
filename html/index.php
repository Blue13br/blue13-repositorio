<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <h1 id="id_do_titulo" class="classe_do_h1">Cadastro de Cliente</h1>
    <hr>
    <form name="form" id="form">
        <h2>Dados Pessoais</h2>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required><br><br>

        <label for="sobrenome">Sobrenome:</label>
        <input type="text" id="sobrenome" name="sobrenome" placeholder="Digite seu sobrenome" required><br><br>

        <label for="rg">RG:</label>
        <input type="text" id="rg" name="rg" placeholder="Digite seu RG" required><br><br>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" required><br><br>

        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento" required><br><br>

        <label for="nome_pai">Nome do Pai:</label>
        <input type="text" id="nome_pai" name="nome_pai" placeholder="Digite o nome do seu pai" required><br><br>

        <label for="nome_mae">Nome da Mãe:</label>
        <input type="text" id="nome_mae" name="nome_mae" placeholder="Digite o nome da sua mãe" required><br><br>

        <label for="renda_mensal">Renda Mensal:</label>
        <select id="renda_mensal" name="renda_mensal" required>
            <option value="">Selecione</option>
            <option value="1000">R$ 1.000,00</option>
            <option value="2000">R$ 2.000,00</option>
            <option value="4000">R$ 4.000,00</option>
        </select><br><br>

        <label for="estado_civil">Estado Civil:</label>
        <select id="estado_civil" name="estado_civil" required>
            <option value="">Selecione</option>
            <option value="solteiro">Solteiro(a)</option>
            <option value="casado">Casado(a)</option>
        </select><br><br>

        <h2 id="id_do_titulo2" class="classe_do_h2">Endereço</h2>
        <label for="cep">CEP:</label>
        <input type="text" id="cep" name="cep" placeholder="Digite seu CEP" required><br><br>

        <label for="logradouro">Logradouro:</label>
        <input type="text" id="logradouro" name="logradouro" placeholder="Digite seu logradouro" required><br><br>

        <label for="numero">Número:</label>
        <input type="text" id="numero" name="numero" placeholder="Digite seu numero" required><br><br>

        <label for="bairro">Bairro:</label>
        <input type="text" id="bairro" name="bairro" placeholder="Digite seu bairro" required><br><br>

        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade" placeholder="Digite sua cidade" required><br><br>

        <label for="uf">UF:</label>
        <select id="uf" name="uf" required>
        <option value="">Selecione</option>
            <option value="AM">AM</option>
            <option value="RO">RO</option>
        </select><br><br>

        <label for="pais">País:</label>
        <select id="pais" name="pais" required>
            <option value="">Selecione</option>
            <option value="brasil">Brasil</option>

        </select><br><br>

        <label for="ibge">IBGE:</label>
        <input type="text" id="ibge" name="ibge" placeholder="Digite seu código do IBGE" required><br><br>

        <button type="submit">Cadastrar</button>
    </form>
    <script src="/js/indesx.js"></script>
</body>
</html>