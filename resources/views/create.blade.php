<form action="{{route('accidente.store')}}" method="POST" enctype="multipart/form-data">

    @csrf
   
    <label>
        Codigo Accidente:
        <br>
        <input type="text" name="codigo">
    </label>
    <br>
    <label>
        Hora del accidente:
        <br>
        <input type="text" name="hora">
    </label>
   
    <br>
    <label>
        Fecha del accidente:
        <br>
        <input type="text" name="fecha">
    </label>
   
    <br>
    <label>
        Lugar del accidente:
        <br>
        <input type="text" name="lugar">
    </label>
   
    <br>
    <br><br>
    <button type="submit">Enviar Formulario:</button>
    </form>