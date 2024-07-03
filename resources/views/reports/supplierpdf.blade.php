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
<h1>LISTADO DE PROVEEDORES</h1>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre Completo</th>
            <th>RUC</th>
            <th>Telefono</th>
            <th>Rubro</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($suppliers as $key=>$supplier)

        <tr>
            <td>{{++$key}}</td>
            <td>{{$supplier->nombre}}</td>
            <td>{{$supplier->codigo}}</td>
            <td>{{$supplier->telefono}}</td>
            <td>{{$supplier->rubro}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
