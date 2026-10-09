<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Áreas</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:#f4f7fc;
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:100vh;
        }

        .container{
            width:80%;
            max-width:800px;
            background:white;
            padding:30px;
            border-radius:12px;
            box-shadow:0 10px 25px rgba(0,0,0,.15);
        }

        h1{
            text-align:center;
            color:#2563eb;
            margin-bottom:25px;
        }

        table{
            width:100%;
            border-collapse:collapse;
            overflow:hidden;
            border-radius:10px;
        }

        thead{
            background:#2563eb;
            color:white;
        }

        thead th{
            padding:15px;
            text-align:left;
            font-size:18px;
        }

        tbody td{
            padding:15px;
            border-bottom:1px solid #ddd;
        }

        tbody tr:nth-child(even){
            background:#f8fafc;
        }

        tbody tr:hover{
            background:#dbeafe;
            transition:.3s;
        }

        .numero{
            width:70px;
            text-align:center;
            font-weight:bold;
        }

        .nombre{
            font-size:17px;
        }
        /* Contenedor de acciones */
        .acciones{
            display:flex;
            gap:10px;
            align-items:center;
        }

        /* Estilo general para enlaces */
        a{
            text-decoration:none;
            color:white;
            padding:8px 14px;
            border-radius:6px;
            font-size:14px;
            font-weight:bold;
            transition:.3s;
            display:inline-block;
        }

        /* Botón Mostrar */
        a.mostrar{
            background:#2563eb;
        }

        a.mostrar:hover{
            background:#1d4ed8;
        }

        /* Botón Editar */
        a.editar{
            background:#f59e0b;
        }

        a.editar:hover{
            background:#d97706;
        }

        /* Botón Eliminar */
        button{
            background:#dc2626;
            color:white;
            border:none;
            padding:8px 14px;
            border-radius:6px;
            cursor:pointer;
            font-size:14px;
            font-weight:bold;
            transition:.3s;
        }

        button:hover{
            background:#b91c1c;
        }

        form{
            display:inline;
        }

        .total{
            margin-top:20px;
            text-align:right;
            font-weight:bold;
            color:#555;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Listado de Áreas</h1>
    <table>
        <thead>
            <tr>
                <th class="numero">#</th>
                <th>Nombre del Área</th>
            </tr>
        </thead>
        <tbody>
            @forelse($areas as $area)
                <tr>
                    <td class="numero">{{ $loop->iteration }}</td>
                    <td class="nombre">{{ $area->name }}</td>
                    <td class="acciones">
                        <a href="{{ route('area.show', $area->id) }}" class="mostrar">
                            Mostrar
                        </a>

                        <a href="{{ route('area.edit', $area->id) }}" class="editar">
                            Editar
                        </a>

                        <form action="{{ route('area.destroy', $area->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" style="text-align:center; padding:20px;">
                        No hay áreas registradas.
                    </td>
                </tr>

            @endforelse

        </tbody>

    </table>

    <div class="total">
        Total de áreas: {{ count($areas) }}
    </div>

</div>

</body>
</html>