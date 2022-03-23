<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Cidadão</title>
    <style>

        body {
            margin: 0;
            font-family: 'Times New Roman', Times, serif;
        }

        body * {
            box-sizing: border-box;
        }

        .content {
            display: flex;
            flex-direction: column;
            overflow: hidden;
            background: #ccc;
        }

        .content div {
            display: flex;
            width: 100%;
        }

        .line-edit {
            width: 100%;
            margin: 5px 10px 5px 10px;
        }

    </style>
</head>
<body>
    <div class="content">
        <form action="{{route('site.form')}}" method="post">
            @csrf
            <div>
                <input class="line-edit" type="text" name="cpf" placeholder="DIGITE O CPF">
                <input class="line-edit" type="text" name="rg" placeholder="DIGITE O RG">
                <input class="line-edit" type="text" name="prontuario" placeholder="DIGITE O PRONTUÁRIO">
            </div>

            <div>
                <input class="line-edit" type="text" name="name" placeholder="DIGITE O NOME">
                <input class="line-edit" type="text" name="mother" placeholder="DIGITE O NOME DA MÃE">
            </div>

            <div>
                <input class="line-edit" type="text" name="cns" placeholder="DIGITE O CNS">
                <input class="line-edit" type="date" name="born_day" placeholder="DIA/MÊS/ANO">
                <select class="line-edit" name="gender">
                    <option value="valor1">Valor 1</option>
                    <option value="valor2" selected>Valor 2</option>
                    <option value="valor3">Valor 3</option>
                </select>
            </div>

            <div>
                <select class="line-edit" name="breed">
                    <option value="valor1">Valor 1</option>
                    <option value="valor2" selected>Valor 2</option>
                    <option value="valor3">Valor 3</option>
                </select>
                <select class="line-edit" name="ethnicity">
                    <option value="valor1">Valor 1</option>
                    <option value="valor2" selected>Valor 2</option>
                    <option value="valor3">Valor 3</option>
                </select>
                <select class="line-edit" name="nationality">
                    <option value="valor1">Valor 1</option>
                    <option value="valor2" selected>Valor 2</option>
                    <option value="valor3">Valor 3</option>
                </select>
            </div>

            <div>
                <input class="line-edit" type="email" name="email" placeholder="DIGITE O EMAIL">
                <input class="line-edit" type="tel" name="phone" placeholder="DIGITE O TELEFONE">
                <input class="line-edit" type="tel" name="cellphone" placeholder="DIGITE O TELEFONE">
            </div>

            <div>
                <input class="line-edit" type="text" name="cep" placeholder="DIGITE O CEP">
                <select class="line-edit" name="state">
                    <option value="valor1">Valor 1</option>
                    <option value="valor2" selected>Valor 2</option>
                    <option value="valor3">Valor 3</option>
                </select>
                <input class="line-edit" type="text" name="city" placeholder="DIGITE O CIDADE">
            </div>

            <div>
                <input class="line-edit" type="text" name="district" placeholder="DIGITE O BAIRRO">
                <input class="line-edit" type="text" name="adress_type" placeholder="DIGITE O TIPO">
                <input class="line-edit" type="text" name="adress" placeholder="DIGITE O LOGADOURO">
            </div>

            <div>
                <input class="line-edit" type="number" name="number" placeholder="DIGITE O N°">
                <input class="line-edit" type="text" name="reference" placeholder="DIGITE O PONTO DE REFERÊNCIA">
                <input class="line-edit" type="text" name="city_code" placeholder="DIGITE O CÓDIGO">
            </div>

            <div>
                <input class="line-edit" type="text" name="complement" placeholder="DIGITE O COMPLEMENTO">
            </div>

            <div>
                <input class="back-btn" type="button" value="Voltar">
                <input class="confirm-btn" type="submit" value="Salvar">
            </div>
        </form>
    </div>
</body>
</html>
