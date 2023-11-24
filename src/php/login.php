<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recuperar los datos del formulario
        $email = $_POST["mail"];
        $password = $_POST["passwd"];

        // Validar los datos (puedes agregar más validaciones según tus necesidades)
        if (empty($email) || empty($password)) {
            echo "Todos los campos son obligatorios.";
        } else {
            // Procesar los datos, por ejemplo, guardar en una base de datos
            // (Ten en cuenta que este es solo un ejemplo básico)
            echo "Email: " . $email . "<br>";
            echo "Password: " . $password;
        }
    } else {
        // Redireccionar si el formulario no se envía por POST
        header("Location: index.html");
    }
    ?>
</body>

</html>