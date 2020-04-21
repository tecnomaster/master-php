<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formularios PHP y HTML</title>
</head>

<body>
    <h1>Formulario</h1>
    <form action='' method='POST' enctype='multipart/form-data'>
        <p><label for='nombre'>Nombre:</label>
        <input type='text' name='nombre' value='' autofocus='autofocus' maxlength='20' minlength='3'></input></p>
        <p><label for='apellido'>Apellido:</label>
        <input type='text' name='apellido' value='' pattern='[A-Z ]+' require='required' placeholder='solo mayúsculas'></input></p>
        <p><label for='button'>Botón:</label> <input type='button' name='Mi Botón' value='Clic Aquí!'></input></p>
        <p><label for='checkbox'>Genero:</label>
            Hombre <input type='checkbox' name='genero' value='Hombre'></input>
            Mujer <input type='checkbox' name='genero' value='Mujer' checked='checked'></input>
        </p>
        <p><label for='color'>Color:</label> <input type='color' name='color' value=''></input></p>
        <p><label for='date'>Fecha:</label> <input type='date' name='fecha' value=''></input></p>
        <p><label for='correo'>Email:</label> <input type='email' name='correo' value=''></input></p>
        <p><label for='archivo'>Archivo:</label>
        <input type='file' name='archivo' value='' multiple='multiple'></input></p>
        <p><label for='oculto'>Oculto:</label> <input type='hidden' name='oculto' value=''></input></p>
        <p><label for='numero'>Número:</label> <input type='number' name='numero' value=''></input></p>
        <p><label for='pass'>Password:</label> <input type='password' name='pass' value=''></input></p>
        <p><label for='continente'>Continente:</label>
            América <input type='radio' name='continente' value='america'></input>
            Europa <input type='radio' name='continente' value='europa'></input>
        </p>
        <p><label for='web'>Página Web:</label> <input type='url' name='web' value=''></input></p>
        <p><label for='pais'>País:</label>
            <select  name='pais' value=''>
                <option value='Venezuela'>Venezuela</option>
                <option value='Argentina'>Argentina</option>
                <option value='Colombia' selected>Colombia</option>
                <option value='USA'>USA</option>
                <option value='España'>España</option>
                <option value='Chile'>Chile</option>
            </select>
        </p>
        <p><label for='descripcion'>Descripción:</label></p>
        <textarea name='descripcion' rows="10" cols="30">Llena este espacio</textarea>
        <p><input type='submit' value='Enviar'></input></p>
    </form>
</body>

</html>
