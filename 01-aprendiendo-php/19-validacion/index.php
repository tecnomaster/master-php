<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Validar Formularios en PHP</title>
</head>

<body>
    <h1>Validar Formularios en PHP</h1>
    <?php
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        if ('faltan_valores' == $error) {
            echo '<span style="color:red;">Por favor introduzca abajo todos los valores!</span>';
        } else {
            echo '<span style="color:red;">Por favor corrija el error en el(los) campo(s): '.$error.'</span>';
        }
    }
    ?>
    <form action='procesar_formulario.php' method='POST' enctype='multipart/form-data'>
        <p><label for='nombres'>Nombres: </label>
            <input type='text' name='nombres' required='required'></input><span>
                <!--<input type='text' name='nombres' required='required' pattern='[A-Za-z ]+'></input>-->
                <span style='color:red;'>*</span></p>

        <p><label for='apellidos'>Apellidos: </label>
            <input type='text' name='apellidos' required='required' pattern='[A-Za-z ]+'></input><span
                style='color:red;'>*</span></p>

        <p><label for='edad'>Edad: </label>
            <input type='number' name='edad' required='required' pattern='[0-9]+'></input><span
                style='color:red;'>*</span></p>

        <p><label for='email'>Email: </label>
            <!--<input type='email' name='email' required='required'></input><span style='color:red;'>*</span></p>-->
            <input type='text' name='email' required='required'></input><span style='color:red;'>*</span></p>

        <p><label for='pass'>Contraseña: </label>
            <input type='password' name='pass'></input></p>

        <p><input type='submit' value='Enviar'></input></p>
        <br>Todos los campos con <span style='color:red;'>*</span> son requeridos.
    </form>
</body>

</html>