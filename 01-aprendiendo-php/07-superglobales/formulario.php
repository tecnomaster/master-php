<DOCTYPE! HTML>
<html lang='es'>
<head>
    <meta charset='utf-8'>
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario en PHP</h1>
    <form action='recibir.php' method='POST'>
        <p>
            <label>Nombre</label>
            <input type='text' name='nombre'>
            <label>Apellidos</label>
            <input type='text' name='apellidos'>
            <input type='submit' name='boton' value='Enviar'>
        </p>
    </form>
</body>
</html>
