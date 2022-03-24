<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script>

        // Function to autocapitalize the inputs, cause the attribute "autocapitalize='characters'" isn't working
        function toUpper(value, id) {
            value = value.toUpperCase();
            document.getElementById(id).value = value;
        }

        // pass the type of mask, id of element, the actual value for practicality and the event key dispatched
        // verify the key for only accepts numbers (in this case), and prevents loops caused by replacement of value and backspace
        function inputMask(mask, id, value, k) {

            if (k.key == "Backspace" || k.key == "ArrowRight" || k.key == "ArrowLeft" || k.key == "ArrowDown" || k.key == "ArrowUp") return;

            if (mask == "cpf") {
                if (!isNaN(k.key)) {
                    if (value.length == 3) {
                        document.getElementById(id).value = value + '.';
                    }
                    else if (value.length == 7) {
                        document.getElementById(id).value = value + '.';
                    }
                    else if (value.length == 11) {
                        document.getElementById(id).value = value + '-';
                    }
                } else {
                    value = value.replace(value[value.length - 1], "")
                    document.getElementById(id).value = value;
                }
            }

            if (mask == "phone-res") {
                if (!isNaN(k.key)) {
                    if (value.length == 1) {
                        document.getElementById(id).value = '(' + value;
                    }
                    else if (value.length == 3) {
                        document.getElementById(id).value = value + ') ';
                    }
                    else if (value.length == 9) {
                        document.getElementById(id).value = value + '-';
                    }
                } else {
                    value = value.replace(value[value.length - 1], "")
                    document.getElementById(id).value = value;
                }
            }

            if (mask == "phone-cel") {
                if (!isNaN(k.key)) {
                    if (value.length == 1) {
                        document.getElementById(id).value = '(' + value;
                    }
                    else if (value.length == 3) {
                        document.getElementById(id).value = value + ') ';
                    }
                    else if (value.length == 10) {
                        document.getElementById(id).value = value + '-';
                    }
                } else {
                    value = value.replace(value[value.length - 1], "")
                    document.getElementById(id).value = value;
                }
            }

            if (mask == "cns") {
                if (!isNaN(k.key)) {
                    if (value.length == 3) {
                        document.getElementById(id).value = value + '.';
                    }
                    else if (value.length == 8) {
                        document.getElementById(id).value = value + '.';
                    }
                    else if (value.length == 13) {
                        document.getElementById(id).value = value + '.';
                    }
                } else {
                    value = value.replace(value[value.length - 1], "")
                    document.getElementById(id).value = value;
                }
            }

            if (mask == "cep") {
                if (!isNaN(k.key)) {
                    if (value.length == 5) {
                        document.getElementById(id).value = value + '-';
                    }
                } else {
                    value = value.replace(value[value.length - 1], "")
                    document.getElementById(id).value = value;
                }
            }
        }

    </script>

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
            margin-top: 1%;
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
            margin-top: 15px;
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

        #header {
            background-color: #2596be;
            display: flex;
        }

        #title {
            padding: 2px 10px 2px 15px;
            font-size: 22px;
            color: #ffffff;
        }

        .error {
            margin: 5px 5px;
        }

    </style>

    @toastr_css

    <title>Cadastro do Cidadão</title>

</head>
<body>
    
    <div id="header">
        <h1 id="title">Cadastro de Cidadão</h1>
    </div>

    <form action="{{route('register.store')}}" method="post">
        @csrf
        <div>
            <h3 id="subtitulo">Informações Pessoais</h3>
            <hr>
            <br>
        </div>

        <fieldset class="group">

            <div class="campo">
                <strong><label for="cpf">CPF</label></strong>
                <input type="text" name="cpf" id="cpf" onkeyup="inputMask('cpf', this.id, this.value, event)" maxlength="14" placeholder="DIGITE O CPF">
            </div>

            <div class="campo">
                <strong><label for="rg">RG</label></strong>
                <input type="text" name="rg" id="rg" onkeyup="toUpper(this.value, this.id)" placeholder="DIGITE O RG">
            </div>

            <div class="campo">
                <strong><label for="prontuario">Prontuário</label></strong>
                <input type="text" name="prontuario" id="prontuario" placeholder="DIGITE O PRONTUÁRIO">
            </div>

        </fieldset>

        <fieldset class="group">
            
            <div class="campo">
                <strong><label for="name">Nome *</label></strong>
                <input type="text" name="name" id="name" placeholder="DIGITE O NOME" onkeyup="toUpper(this.value, this.id)" required value="{{old('name')}}">
                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="campo">
                <strong><label for="mother">Nome da Mãe *</label></strong>
                <input type="text" name="mother" id="mother" onkeyup="toUpper(this.value, this.id)" placeholder="DIGITE O NOME DA MÃE" required>
                @error('mother')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

        </fieldset>

        <fieldset class="group">
            
            <div class="campo">
                <strong><label for="cns">CNS *</label></strong>
                <input type="text" name="cns" id="cns" maxlength="18"  onkeyup="inputMask('cns', this.id, this.value, event)" placeholder="DIGITE O CARTÃO DO SUS" required>
                @error('cns')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="campo">
                <strong><label for="born_day">Data de Nascimento *</label></strong>
                <input type="date" name="born_day" id="born_day" placeholder="SELECIONE A DATA DE NASCIMENTO" required>
                @error('born_day')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="campo">
                <strong><label for="gender">Sexo *</label></strong>
                <select name="gender" id="gender" required>
                    <option selected disabled value="">Escolha uma opção</option>
                    <option>Masculino</option>
                    <option>Feminino</option>
                </select>
                @error('gender')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

        </fieldset>

        <fieldset class="group">
            
            <div class="campo">
                <strong><label for="breed">Raça/Cor</label></strong>
                <select name="breed" id="breed">
                    <option selected disabled value="">Escolha uma opção</option>
                    <option>Branco</option>
                    <option>Preto</option>
                    <option>Pardo</option>
                    <option>Amarelo</option>
                    <option>Indígena</option>
                </select>
            </div>

            <div class="campo">
                <strong><label for="nationality">Nacionalidade</label></strong>
                <select name="nationality" id="nationality" >
                    <option selected disabled value="">Escolha uma opção</option>
                    <option>Brasileiro</option>
                    <option>Estrangeiro</option>
                </select>
            </div>

        </fieldset>

        <fieldset class="group">

            <div class="campo">
                <strong><label for="email">E-mail</label></strong>
                <input type="email" name="email" id="email" placeholder="DIGITE O EMAIL">
            </div>

            <div class="campo">
                <strong><label for="phone">Telefone Residencial</label></strong>
                <input type="tel" name="phone" maxlength="14" onkeyup="inputMask('phone-res', this.id, this.value, event)" id="phone" placeholder="DIGITE TELEFONE">
            </div>

            <div class="campo">
                <strong><label for="cellphone">Telefone Celular</label></strong>
                <input type="tel" name="cellphone" id="cellphone" maxlength="15" onkeyup="inputMask('phone-cel', this.id, this.value, event)" placeholder="DIGITE TELEFONE">
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
                <input type="text" name="cep" id="cep" maxlength="9" onkeyup="inputMask('cep', this.id, this.value, event)" placeholder="DIGITE O CEP" required>
                @error('cep')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="campo">
                <strong><label for="state">Estado *</label></strong>
                <select name="state" id="state" required>
                    <option selected disabled value="">Escolha uma opção</option>
                    <option>Acre</option>
                    <option>Alagoas</option>
                    <option>Amapá</option>
                    <option>Amazonas</option>
                    <option>Bahia</option>
                    <option>Ceará</option>
                    <option>Distrito Federal</option>
                    <option>Espírito Santo</option>
                    <option>Goiás</option>
                    <option>Maranhão</option>
                    <option>Mato Grosso</option>
                    <option>Mato Grosso do Sul</option>
                    <option>Minas Gerais</option>
                    <option>Pará</option>
                    <option>Paraíba</option>
                    <option>Paraná</option>
                    <option>Pernambuco</option>
                    <option>Piauí</option>
                    <option>Rio de Janeiro</option>
                    <option>Rio Grande do Norte</option>
                    <option>Rio Grande do Sul</option>
                    <option>Rondônia</option>
                    <option>Roraima</option>
                    <option>Santa Catarina</option>
                    <option>São Paulo</option>
                    <option>Sergipe</option>
                    <option>Tocantins</option>
                </select>
                @error('state')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="campo">
                <strong><label for="city">Cidade *</label></strong>
                <input type="text" name="city" onkeyup="toUpper(this.value, this.id)" id="city" placeholder="DIGITE A CIDADE" required>
                @error('city')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

        </fieldset>

        <fieldset class="group">

            <div class="campo">
                <strong><label for="district">Bairro *</label></strong>
                <input type="text" name="district" onkeyup="toUpper(this.value, this.id)" id="district" placeholder="DIGITE O BAIRRO" required>
                @error('district')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="campo">
                <strong><label for="adress_type">Tipo de Logadouro *</label></strong>
                <select name="adress_type" id="adress_type" required>
                    <option selected disabled value="">Escolha uma opção</option>
                    <option>Avenida</option>
                    <option>Campo</option>
                    <option>Chácara</option>
                    <option>Condomínio</option>
                    <option>Distrito</option>
                    <option>Estrada</option>
                    <option>Fazenda</option>
                    <option>Jardim</option>
                    <option>Loteamento</option>
                    <option>Parque</option>
                    <option>Praça</option>
                    <option>Rua</option>
                    <option>Travessa</option>
                    <option>Trevo</option>
                    <option>Viela</option>
                    <option>Rodovia</option>
                </select>
                @error('adress_type')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="campo">
                <strong><label for="adress">Logadouro *</label></strong>
                <input type="text" name="adress" onkeyup="toUpper(this.value, this.id)" id="adress" placeholder="DIGITE O LOGADOURO" required>
                @error('adress')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

        </fieldset>

        <fieldset class="group">

            <div class="campo">
                <strong><label for="number">Número *</label></strong>
                <input type="number" name="number" id="number" placeholder="DIGITE O NÚMERO" required>
                @error('number')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="campo">
                <strong><label for="reference">Ponto de Referência</label></strong>
                <input type="text" name="reference" onkeyup="toUpper(this.value, this.id)" id="reference" placeholder="DIGITE A REFERÊNCIA">
            </div>

            <div class="campo">
                <strong><label for="city_code">Código IBGE</label></strong>
                <input type="text" name="city_code" id="city_code" placeholder="DIGITE O CÓDIGO IBGE">
            </div>

        </fieldset>

        <fieldset class="group">

            <div class="campo">
                <strong><label for="complement">Complemento</label></strong>
                <input type="text" name="complement" onkeyup="toUpper(this.value, this.id)" id="complement" placeholder="DIGITE O COMPLEMENTO">
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