<?php

    $usuarios = [
        ["usuario" => "juan", "rol" => "admin", "activo" => true],
        ["usuario" => "maria", "rol" => "editor", "activo" => false],
        ["usuario" => "pablo", "rol" => "admin", "activo" => true],
        ["usuario" => "laura", "rol" => "suscriptor", "activo" => true],
        ];

    //1. Cuenta cuántos usuarios activos hay.
    $amountActive = 0;
    foreach ($usuarios as $user) {
        if ($user["activo"] === true) {
            $amountActive++;
        }
    }
    echo $amountActive;

    //2. Muestra los nombres de usuarios que tienen rol "admin".
    $usersAdmins = [];
    foreach ($usuarios as $user) {
        if ($user["rol"] === "admin") {
            $usersAdmins[] = $user["usuario"];
        }
    }
    echo "<br>";
    foreach ($usersAdmins as $admins) {
        echo $admins . "<br>";
    }
 
    //3. Cambia el estado a inactivo (activo = false) para todos los usuarios con rol "editor".

    for ($i = 0; $i < count($usuarios); $i++) {
        if ($usuarios[$i]["rol"] === "editor") {
            $usuarios[$i]["activo"] = false;
        }
    }

    // Mostrar resultado
    echo "Usuarios después de actualizar:<br>";
    foreach ($usuarios as $user) {
        echo "Usuario: " . $user["usuario"] . " Rol: " . $user["rol"] . " Activo: " . ($user["activo"] ? "true" : "false") . "<br>";
    }
