<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        #titulo {
            font-family: sans-serif;
            font-size: 18px;
            color: darkturquoise;
            margin-left: 10px;
            margin-bottom: 4px;
        }

        #subtitulo {
            font-family: sans-serif;
            font-size: 16px;
            color: rgba(0, 0, 0, 0.6);
            margin-top: 10px;
            margin-left: 10px;
            margin-bottom: 4px;
        }

        fieldset {
            border: 0;
        }

        body {
            background-color: rgb(245, 245, 245);
            font-family: sans-serif;
            font-size: 1em;
            color: #000000;
            margin-left: 20px;
            margin-right: 20px;
            margin-top: 2%;
            justify-content: center;
        }

        input, select, textarea, button {
            border-radius: 5px;
        }

        .campo {
            margin-bottom: 1em;
            width: 100%;
        }

        .campo label {
            margin-bottom: 0.2em;
            color: #000000;
            display: block;
            font-size: 12px;
        }

        .group {
            display: flex;
        }

        fieldset.group .campo {
            float: left;
            margin-right: 1em;
        }

        .campo input[type="text"], .campo input[type="tel"], .campo input[type="date"], .campo input[type="number"], .campo input[type="email"], .campo select, .campo textarea {
            padding: 0.3em;
            border: 1px solid #000000;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
            display: block;
            margin-left: 5px;
            margin-right: 5px;
            width: 100%;
        }

        .campo select option {
            padding-right: 1em;
        }

        .campo input:focus, .campo select:focus, .campo textarea:focus {
            background-color: azure;
        }

        .btn {
            font-size: 1.2em;
            background-color: cadetblue;
            border: 0;
            margin-bottom: 1em;
            margin-top: 20px;
            color: #ffffff;
            padding: 0.2em 0.6em;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .btn:hover {
            background-color: aqua;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
            text-shadow: none;
        }

        .btns {
            display: flex;
            margin-left: 40%;
        }

    </style>
    @toastr_css
    <title>Cadastro do Cidadão</title>
</head>
<body>
    
    <div>
        <h1 id="titulo">Cadastro de Cidadão</h1>
        <br>
    </div>

    <form action="{{ route('register.update', $citizen->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <h3 id="subtitulo">Informações Pessoais</h3>
            <hr>
            <br>
        </div>

        <fieldset class="group">

            <div class="campo">
                <strong><label for="cpf">CPF</label></strong>
                <input type="text" name="cpf" id="cpf" placeholder="DIGITE O CPF" value="{{$citizen->cpf}}">
            </div>

            <div class="campo">
                <strong><label for="rg">RG</label></strong>
                <input type="text" name="rg" id="rg" placeholder="DIGITE O RG" value="{{$citizen->rg}}">
            </div>

            <div class="campo">
                <strong><label for="prontuario">Prontuário</label></strong>
                <input type="text" name="prontuario" id="prontuario" placeholder="DIGITE O PRONTUÁRIO" value="{{$citizen->prontuario}}">
            </div>

        </fieldset>

        <fieldset class="group">
            
            <div class="campo">
                <strong><label for="name">Name *</label></strong>
                <input type="text" name="name" id="name" placeholder="DIGITE O NOME" value="{{$citizen->name}}" required>
                @error('name')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div class="campo">
                <strong><label for="mother">Nome da Mãe *</label></strong>
                <input type="text" name="mother" id="mother" placeholder="DIGITE O NOME DA MÃE" value="{{$citizen->mother}}" required>
            </div>

        </fieldset>

        <fieldset class="group">
            
            <div class="campo">
                <strong><label for="cns">CNS *</label></strong>
                <input type="text" name="cns" id="cns" placeholder="DIGITE O CARTÃO DO SUS" value="{{$citizen->cns}}" required>
            </div>

            <div class="campo">
                <strong><label for="born_day">Data de Nascimento *</label></strong>
                <input type="date" name="born_day" id="born_day" placeholder="SELECIONE A DATA DE NASCIMENTO" value="{{$citizen->born_day->format('Y-m-d')}}" required>
            </div>

            <div class="campo">
                <strong><label for="gender">Sexo *</label></strong>
                <select name="gender" id="gender" value="{{$citizen->gender}}" required>
                    <option selected disabled value="">Escolha uma opção</option>
                    <option>Masculino</option>
                    <option>Feminino</option>
                </select>
            </div>

        </fieldset>

        <fieldset class="group">
            
            <div class="campo">
                <strong><label for="breed">Raça/Cor</label></strong>
                <select name="breed" id="breed" value="{{$citizen->breed}}">
                    <option disabled value="">Escolha uma opção</option>
                    <option>Branco</option>
                    <option>Preto</option>
                    <option>Pardo</option>
                    <option>Amarelo</option>
                    <option>Indígena</option>
                </select>
            </div>

            <div class="campo">
                <strong><label for="ethnicity">Etinia</label></strong>
                <select name="ethnicity" id="ethnicity" value="{{$citizen->ethnicity}}">
                    <option disabled value="">Escolha uma opção</option>
                    <option>Masculino</option>
                    <option>Feminino</option>
                </select>
            </div>

            <div class="campo">
                <strong><label for="nationality">Nacionalidade</label></strong>
                <select name="nationality" id="nationality" value="{{$citizen->nacionality}}">
                    <option disabled value="">Escolha uma opção</option>
                    <option>Brasileiro</option>
                    <option>Estrangeiro</option>
                </select>
            </div>

        </fieldset>

        <fieldset class="group">

            <div class="campo">
                <strong><label for="email">E-mail</label></strong>
                <input type="email" name="email" id="email" placeholder="DIGITE O EMAIL" value="{{$citizen->email}}">
            </div>

            <div class="campo">
                <strong><label for="phone">Telefone Residencial</label></strong>
                <input type="tel" name="phone" id="phone" placeholder="DIGITE TELEFONE" value="{{$citizen->phone}}">
            </div>

            <div class="campo">
                <strong><label for="cellphone">Telefone Celular</label></strong>
                <input type="tel" name="cellphone" id="cellphone" placeholder="DIGITE TELEFONE" value="{{$citizen->cellphone}}">
            </div>

        </fieldset>

        <div>
            <h3 id="subtitulo">Endereço Residencial</h3>
            <hr>
            <br>
        </div>

        <fieldset class="group">

            <div class="campo">
                <strong><label for="cep">CEP *</label></strong>
                <input type="text" name="cep" id="cep" placeholder="DIGITE O CEP" value="{{$citizen->cep}}" required>
            </div>

            <div class="campo">
                <strong><label for="state">Estado *</label></strong>
                <select name="state" id="state" value="{{$citizen->state}}" required>
                    <option disabled value="">Escolha uma opção</option>
                    <option>Minas Gerais</option>
                    <option>São Paulo</option>
                    <option>Rio de Janeiro</option>
                    <option>Espírito Santo</option>
                    <option>Bahia</option>
                    <option>Paraná</option>
                    <option>Santa Catarina</option>
                    <option>Brasília</option>
                </select>
            </div>

            <div class="campo">
                <strong><label for="city">Cidade *</label></strong>
                <input type="text" name="city" id="city" placeholder="DIGITE A CIDADE" value="{{$citizen->city}}" required>
            </div>

        </fieldset>

        <fieldset class="group">

            <div class="campo">
                <strong><label for="district">Bairro *</label></strong>
                <input type="text" name="district" id="district" placeholder="DIGITE O BAIRRO" value="{{$citizen->district}}" required>
            </div>

            <div class="campo">
                <strong><label for="adress_type">Tipo de Logadouro *</label></strong>
                <input type="text" name="adress_type" id="adress_type" placeholder="DIGITE O TIPO DE LOGADOURO" value="{{$citizen->adress_type}}" required>
            </div>

            <div class="campo">
                <strong><label for="adress">Logadouro *</label></strong>
                <input type="text" name="adress" id="adress" placeholder="DIGITE O LOGADOURO" value="{{$citizen->adress}}" required>
            </div>

        </fieldset>

        <fieldset class="group">

            <div class="campo">
                <strong><label for="number">Número *</label></strong>
                <input type="number" name="number" id="number" placeholder="DIGITE O NÚMERO" value="{{$citizen->number}}" required>
            </div>

            <div class="campo">
                <strong><label for="reference">Ponto de Referência</label></strong>
                <input type="text" name="reference" id="reference" placeholder="DIGITE A REFERÊNCIA" value="{{$citizen->reference}}">
            </div>

            <div class="campo">
                <strong><label for="city_code">Código IBGE</label></strong>
                <input type="text" name="city_code" id="city_code" placeholder="DIGITE O CÓDIGO IBGE" value="{{$citizen->city_code}}">
            </div>

        </fieldset>

        <fieldset class="group">

            <div class="campo">
                <strong><label for="complement">Complemento</label></strong>
                <input type="text" name="complement" id="complement" placeholder="DIGITE O COMPLEMENTO" value="{{$citizen->complement}}">
            </div>

        </fieldset>

        <fieldset class="group">

            <div class="btns">

                <div class="campo">
                    <a href="{{route('register.index')}}">
                    <button class="btn" type="button">Voltar</button> 
                </div>

                <div class="campo">
                    <button class="btn" type="submit">Salvar</button>
                </div>

            </div>

        </fieldset>
        
    </form>

    @jquery
    @toastr_js
    @toastr_render

</body>
</html>