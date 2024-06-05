<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Accidente</title>
    <style>
        h1 {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Editar Accidente</h1>

    <form action="{{ route('accidente.update', $accidente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>
            Codigo del accidente:
            <br>
            <input name="codigo" type="text" value="{{ old('codigo', $accidente->codigo) }}">
        </label>
        <br>
        <label>
            Hora del accidente:
            <br>
            <input name="hora" type="text" value="{{ old('hora', $accidente->hora) }}">
        </label>
        <br>
        <label>
            Fecha del accidente:
            <br>
            <input name="fecha" type="text" value="{{ old('fecha', $accidente->fecha) }}">
        </label>
        <br>
        <label>
            Lugar del accidente:
            <br>
            <input name="lugar" type="text" value="{{ old('lugar', $accidente->lugar) }}">
        </label>
        <br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>