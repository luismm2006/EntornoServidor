<?php

    $usuarios = [
        [
        "id" => 1,
        "nombre" => "Ana",
        "email" => "ana@example.com",
        "edad" => 28
        ],
        [
        "id" => 2,
        "nombre" => "Luis",
        "email" => "luis@example.com",
        "edad" => 34
        ],
        [
        "id" => 3,
        "nombre" => "María",
        "email" => "maria@example.com",
        "edad" => 22
        ],
        [
        "id" => 4,
        "nombre" => "Carlos",
        "email" => "carlos@example.com",
        "edad" => 40
        ]
        ];

    //1. Muestra todos los correos electrónicos

    foreach ($usuarios as $user) {
        echo $user["email"]. "<br>";
    }
    echo "<br>";
    //2. Imprime todos los correos electrónicos, uno por línea.

    foreach ($usuarios as $user) {
        echo $user["email"]. "<br>";
    }
    echo "<br>";

    //3. Escribe una función que reciba el array de usuarios y un nombre, y devuelva el array del usuario si lo encuentra, o null si no. Muestra el resultado de la función en el navegador.
    function searchUser($usuarios, $name) {
        foreach ($usuarios as $user) {
            if ($user["nombre"] === $name) {
                return $user;
            }
        }
        return null;
    }
    
    $resultado = searchUser($usuarios, "Luis");
    print_r($resultado);

    echo "<br>";
    //4. Calcula e imprime la edad media de todos los usuarios.

    $sumAges = 0;
    foreach ($usuarios as $user) {
        $sumAges += $user["edad"];
    }

    $averageAge = $sumAges / count($usuarios);
    echo "La edad media de los usuarios es: $averageAge";
    echo "<br>";

    //5. Crea un nuevo array que contenga solo los usuarios cuya edad sea mayor de 30 años. Muestra dicho array.

    $newArrayAges = [];
    foreach ($usuarios as $user) {
        if($user["edad"] >= 30){
            $newArrayAges [] = $user;
        }
    }
    echo "Usuarios mayores de 30 años:<br>";
    print_r($newArrayAges);

    //6. Genera una tabla HTML con los campos id, nombre, email y edad.
?>

     <table border='1'>
         <tr><th>ID</th><th>Nombre</th><th>Email</th><th>Edad</th></tr>
<?php
        foreach ($usuarios as $user) {
            ?>
            <tr>
                <td> <?=$user['id']?>  </td>
                <td> <?=$user['nombre']?>  </td>
                <td> <?=$user['email']?>  </td>
                <td> <?=$user['edad']?>  </td>
            
            </tr>
            <?php
        }
?>
    </table>