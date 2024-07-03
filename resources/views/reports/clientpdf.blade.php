<style>
    body{
        font-family: Arial, Helvetica, sans-serif
    }
    table{
        border: 1px solid darkblue;
        border-collapse: collapse;
        width: 100%;
    }
    tr,td,th{
        border: 1px solid darkblue;
        padding: 4px;
    }

    thead{
        background-color: darkblue;
        color: white;
    }
    h1{
        text-align: center;
        color: darkblue;
        text-decoration: underline;
        margin-top: 10px;
    }
    img{
        position: absolute;
        width: 120px;
        height: 60px;
    }
</style>
<img src="img/logo.png" width="150px">
<h1>LISTADO DE CLIENTES</h1>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido_paterno</th>
            <!--<th>Apellido_materno</th>-->
            <th>dni</th>
            <!--<th>email</th>-->
            <th>telefono</th>
            <th>direccion</th>
            <th>edad</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clients as $key=>$client)

        <tr>
            <td>{{++$key}}</td>
            <td>{{$client->nombre}}</td>
            <td>{{$client->apellido_paterno}}</td>
            {{-- <td>{{$client->apellido_materno}}</td> --}}
            <td>{{$client->dni}}</td>
             {{-- <td>{{$client->email }}</td> --}}
            <td>{{$client->telefono}}</td>
            <td>{{$client->direccion}}</td>
            <td>{{$client->edad}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
