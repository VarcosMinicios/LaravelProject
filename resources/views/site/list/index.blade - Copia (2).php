<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script>

        function linkToRoute(route, id) {

            if (route == "edit") {
                let url = "{{ route('register.edit', ':id') }}";
                url = url.replace(':id', id);
                document.location.href=url;
            } else if (route == "register") {
                location.href="{{route('register.create')}}"
            } else if (route == "exclude") {
                let url = "{{ route('register.show', ':id') }}";
                url = url.replace(':id', id);
                document.location.href=url;
            }
        }

        function showPupup(name, id) {

            document.getElementById('popup').style.display = "block";
            document.getElementById('mask').style.display = "block";
            const elements = document.getElementsByClassName('action-btn');

            for (let i = 0; i < collection.lenght; i++) {
                elements[i].disabled = true;
            }

            document.getElementById('subtitulo').innerHTML = "Excluir Cadastro de <br><br>" + name;

            // document.getElementById('exclude').setAttribute('onclick', "linkToRoute('exclude', " + id + ")");
                
            }
        }

    </script>

    @toastr_css

    <style>

        body {
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
        table th, table td {
            font-size: 14px;
            font-family: sans-serif;
            padding: 5px 5px;
            border: solid 1px #ccc;
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

        #imagem {
            padding: 5px 10px 5px 30px;
            size: 50%;
        }

        #div-table {
            margin: 20px 20px;
        }

        #body-content {
            border: solid 1px #00000035;
            height: 75vh;
            overflow:auto; 
        }

        .table-list tbody tr td {
            text-align: center;
        }

        #div-selector {
            margin: 15px 10px 10px 20px;
            display: flex;
        }

        #div-selector select{
            padding: 0.2em;
            font-size: 16px;
            border: 1px solid #00000067;
            background-color: transparent;
            margin: 10px 10px 10px 10px;
            width: 100px;
        }

        #div-selector p {
            font-size: 18px;
        }

        .btn {
            font-size: 1.2em;
            background-color: #2596be;
            border: 0;
            margin-top: 20px;
            margin-bottom: 1em;
            margin-left: 47%;
            color: #ffffff;
            padding: 0.2em 0.6em;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
            justify-content: center;
            align-items: center;
        }

        .btn:hover {
            background-color: rgba(0, 60, 255, 0.596);
            color: #00000085;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
        }

        #container {
            position: relative;
        }

        #popup {
            position: absolute;
            margin: 20vh 35vw;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.4);;
            width: 400px;
            height: 300px;
            border: solid 1px rgba(0, 0, 0, 0.2);
            background-color: #ffffff;
            display: none; 
        }

        #mask {
            position: absolute;
            margin: -8px -8px;
            width: 100%;
            height: 100%;
            background-color: #00000035;
            display: none; 
        }

        #subtitulo {
            font-family: sans-serif;
            font-size: 22px;
            color: #000000;
            margin-top: 40px;
            margin-left: 30px;
        }

        .btn-excluir {
            font-size: 1.2em;
            background-color: #c41515;;
            border: 0;
            margin-top: 90px;
            margin-bottom: 1em;
            margin-left: 15%;
            color: #ffffff;
            padding: 0px 20px;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
            justify-content: center;
            align-items: center;
        }

        .btn-excluir:hover {
            background-color: rgba(255, 0, 0, 0.596);
            color: #00000085;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
        }

        .btn-cancel {
            font-size: 1.2em;
            background-color: #2596be;;
            border: 0;
            margin-top: 90px;
            margin-bottom: 1em;
            margin-left: 15%;
            color: #ffffff;
            padding: 0px 20px;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
            justify-content: center;
            align-items: center;
        }

        .btn-cancel:hover {
            background-color: rgba(0, 60, 255, 0.596);
            color: #00000085;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
        }

        #btn-box {
            display: flex;
        }


    </style>
    <title>Listagem de Cadastros</title>
</head>
<body>

    <div id="mask"></div>

    <div id="container">

        <div id="popup">

            <h2 id="subtitulo">Deseja excluir o cadastro?</h2>

            <div id="btn-box">

                <button class="btn-cancel" id="cancel">

                    <p>Cancelar</p>

                </button>

                <button class="btn-excluir" id="exclude">

                    <p>Excluir</p>

                </button>

            </div>

        </div>

        <div id="header">
            <img id="imagem" src="{{asset('images/fi-rr-document-icon.svg')}}" alt="icon">
            <h1 id="title">Listagem de Cidadãos</h1>
        </div>

        <div id="body-content">

            <div id="div-selector">
                <select class="action-btn" name="count" id="count">
                    <option value="50" selected>50</option>
                    <option value="100">100</option>
                </select>

                <p>Records</p>

            </div>

            <div id="div-table">
                <table class="table-list">
                    <thead>
                        <tr>
                            <th style="width: fit-content;">NOME</th>
                            <th style="width: fit-content;">DT. NASCIMENTO</th>
                            <th style="width: fit-content;">CNS</th>
                            <th style="width: fit-content;">NOME MÃE</th>
                            <th style="width: 12%;">AÇÃO</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($citizens as $citizen)
                        <tr>
                            <td>{{$citizen->name}}</td>
                            <td>{{$citizen->born_day}}</td>
                            <td>{{$citizen->cns}}</td>
                            <td>{{$citizen->mother}}</td>
                            <td>
                
                                <button class="action-btn" style="background-color: transparent; border: none; cursor:pointer;"
                                        onclick="linkToRoute('edit', {{$citizen->id}})">

                                    <img src="{{asset('images/fi-rr-edit.svg')}}" alt="editar">

                                </button>

                                <button class="action-btn" style="background-color: transparent; border: none; cursor:pointer;" 
                                        onclick="showPupup('{{$citizen->name}}', {{$citizen->id}});">

                                    <img src="{{asset('images/fi-rr-cross.svg')}}" alt="excluir">

                                </button>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div>
            <input class="btn" type="button" onclick='linkToRoute("register", "null")' value="Cadastrar" />
        </div>
    
    </div>

    @jquery
    @toastr_js
    @toastr_render

</body>
</html>

