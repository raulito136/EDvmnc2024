<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Examen ED</title>
    <link rel="stylesheet" href="css/estilo.css">
    <style>
        #principal{
            width: 800px;
            margin: auto;
            background-color: #cccccc;
        }
        h1{
            color: red;
            text-align: center;
        }
        h2{
            color: blue;
            text-align: center;
        }
        div img{
            display: flex;
            margin: 0 auto;
        }

    </style>

</head>
<body>
    <div id="principal">
        <h1>NOMBRE COMPLETO DEL ALUMNO</h1>
        <div>
            <img src="img/nieve.jpg" alt="Foto de la nieve">
        </div>
        <br>

        <?php
            echo "<h2>Examen Entorno de Desarrollo. Suerte!</h2>";
        ?>
    </div>
</body>
</html>