<?php

    $peliculas = [
        ["titulo" => "Inception", "director" => "Nolan", "anio" => 2010,
        "duracion" => 148],
        ["titulo" => "Interstellar", "director" => "Nolan", "anio" => 2014,
        "duracion" => 169],
        ["titulo" => "Memento", "director" => "Nolan", "anio" => 2000,
        "duracion" => 113],
        ["titulo" => "Titanic", "director" => "Cameron", "anio" => 1997,
        "duracion" => 195],
        ];

    //1. Muestra todas las películas dirigidas por Nolan.
    echo "The movies what director is Nolan is :" . "<br>";
    foreach ($peliculas as $movie) {
        if($movie["director"] === "Nolan"){
            echo $movie["titulo"] . "<br>";
        }
    }

    //2. Calcula la duración media de las películas.

    $sumDuration = 0;
    foreach ($peliculas as $movie) {
        $sumDuration += $movie["duracion"];
    }
    $average = $sumDuration / count($peliculas);
    echo "The duration average of movies is: " . $average;

    //3. Ordena las películas por año de estreno ascendente.

    usort($peliculas, function($a,$b){
        return $a["anio"] <=> $b["anio"];
    });
    echo "<br>" . "Movies in ascending order: ";
    foreach ($peliculas as $movie) {
        echo "<br>" . "Titulo: " . $movie["titulo"] . " director: " . $movie["director"] . " anio: " . $movie["anio"] . " duracion: " . $movie["duracion"];
    }