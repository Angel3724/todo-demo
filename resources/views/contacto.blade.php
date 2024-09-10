<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Formulario de Contacto</h1>
    <section>
        <form action="/guardar-formulario" method="POST">
            @csrf
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="{{ old('nombre') }}" id=""><br>

            <label for="correo">Correo</label>
            <input type="email" name="correo" value="{{ old('correo') }}" id=""><br>
            @error ('correo')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror

            <label for="mensaje">Mensaje:</label><br>
            <textarea type="text" cols="30" rows="4" name="mensaje" id="">{{ ('mensaje') }}</textarea><br>

            <input type="submit" value="Enviar">
        </form>        
    </section>
</body>
</html>