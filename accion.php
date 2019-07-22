<?php

    //Conectamos con el servidor
    $conection = mysqli_connect('localhost', 'root', '');
    //Verificamos la conexion
    if(!$conection)
    {
        echo "No se pudo conectar con el servidor";
    }
    else
    {
        $database = mysqli_select_db($conection, 'inauguracion');
        if(!$database)
        {
            echo "No se encontro la base de datos";
        }
    }

    $name = $_POST['name'];
    $people = $_POST['people'];

    $sql = "INSERT INTO data VALUES ('$name', '$people')";

    $ejecutar = mysqli_query($conection, $sql);
    if(!$ejecutar)
    {
        echo "Tuvimos un error con la base de datos";
    }
    else
    {
        header("Location: gracias.html");
    }

?>
