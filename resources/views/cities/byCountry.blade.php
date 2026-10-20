<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cidades do país: {{$codigoPaís}}</h1>

<style>
    table{
        widht: 100%;
        border-collapse:collapse;
    }

    th, td{
        border:1px solid #999;
        padding:8px;
        text-aling: left;
    }

    th{
        background-color:#e5e7eb;
    }
</style>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>País</th>
            <th>População</th>
            <th>Distrito</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($cities as $city)
        <tr>
            <td>{{ $city->ID }}</td>
            <td>{{ $city->name }}</td>
            <td>{{ $city->CountryCode }}</td>
            <td>{{ number_format($city->Population, 0, ',', '.') }}</td>
            <td>{{ $city->District }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>