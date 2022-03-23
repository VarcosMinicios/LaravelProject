<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

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

    </style>
    <title>Listagem de Cadastros</title>
</head>
<body>
    <div id="listaRegistros">
        <table>
            <thead>
                <tr>
                    <th>NOME</th>
                    <th>DT. NASCIMENTO</th>
                    <th>CNS</th>
                    <th>NOME MÃE</th>
                    <th>AÇÃO</th>
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
                        <button style="background-color: transparent; border: none;">
                            <img src="{{asset('images/fi-rr-edit.svg')}}" alt="editar">
                        </button>
                        <button style="background-color: transparent; border: none;">
                            <img src="{{asset('images/fi-rr-cross.svg')}}" alt="excluir">
                        </button>
                        <button style="background-color: transparent; border: none;">
                            <img src="{{asset('images/fi-rr-document.svg')}}" alt="gerar pdf">
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>