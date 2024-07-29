<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;

        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="date"],
        select {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 15px;
            /* Espaçamento entre campos */
            font-size: 16px;
        }



        .container {
            width: 80%;
            max-width: 800px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="date"],
        select {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 15px;

            font-size: 16px;
        }


        button {
            padding: 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        hr {
            border: 0;
            height: 1px;
            background: #ddd;
            margin: 20px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Cadastro de Cliente</h1>
        <hr>
        <form name="form" id="form">
            <h2>Dados Pessoais</h2>

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>

            <label for="sobrenome">Sobrenome:</label>
            <input type="text" id="sobrenome" name="sobrenome" placeholder="Digite seu sobrenome" required>

            <label for="rg">RG:</label>
            <input type="text" id="rg" name="rg" placeholder="Digite seu RG" required>

            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" required>

            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" id="data_nascimento" name="data_nascimento" required>

            <label for="nome_pai">Nome do Pai:</label>
            <input type="text" id="nome_pai" name="nome_pai" placeholder="Digite o nome do seu pai" required>

            <label for="nome_mae">Nome da Mãe:</label>
            <input type="text" id="nome_mae" name="nome_mae" placeholder="Digite o nome da sua mãe" required>

            <label for="renda_mensal">Renda Mensal:</label>
            <select id="renda_mensal" name="renda_mensal" required>
                <option value="">Selecione</option>
                <option value="1000">R$ 1.000,00</option>
                <option value="2000">R$ 2.000,00</option>
                <option value="4000">R$ 4.000,00</option>
            </select>



            <h2>Endereço</h2>
            <label for="cep">CEP:</label>
            <input type="text" id="cep" name="cep" placeholder="Digite seu CEP" required onblur="buscarEndereco()">

            <label for="logradouro">Logradouro:</label>
            <input type="text" id="logradouro" name="logradouro" placeholder="Digite seu logradouro" required>

            <label for="numero">Número:</label>
            <input type="text" id="numero" name="numero" placeholder="Digite seu número" required>

            <label for="bairro">Bairro:</label>
            <input type="text" id="bairro" name="bairro" placeholder="Digite seu bairro" required>

            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" placeholder="Digite sua cidade" required>

            <label for="uf">UF:</label>
            <select id="uf" name="uf" required>
                <option value="">Selecione</option>
                <option value="AM">AM</option>
                <option value="RO">RO</option>
            </select>

            <label for="pais">País:</label>
            <select id="pais" name="pais" required>
                <option value="">Selecione</option>
                <option value="brasil">Brasil</option>
            </select>

            <label for="ibge">IBGE:</label>
            <input type="text" id="ibge" name="ibge" placeholder="Digite seu código do IBGE" required>

            <button type="submit">Cadastrar</button>
        </form>
    </div>

    <script>
        function buscarEndereco() {
            const cep = document.getElementById('cep').value.replace(/\D/g, '');

            if (cep.length !== 8) {
                alert('CEP inválido!');
                return;
            }

            const url = `https://viacep.com.br/ws/${cep}/json/`;

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    if (data.erro) {
                        alert('CEP não encontrado!');
                        return;
                    }

                    document.getElementById('logradouro').value = data.logradouro || '';
                    document.getElementById('bairro').value = data.bairro || '';
                    document.getElementById('cidade').value = data.localidade || '';
                    document.getElementById('uf').value = data.uf || '';
                })
                .catch(error => {
                    console.error('Erro ao buscar o endereço:', error);
                    alert('Erro ao buscar o endereço!');
                });
        }
    </script>
</body>

</html>