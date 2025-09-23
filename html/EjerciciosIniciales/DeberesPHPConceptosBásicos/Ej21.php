<?php

    $products = [
        ["nombre" => "Camiseta", "precio" => 15.99, "stock" => 10],
        ["nombre" => "Pantalón", "precio" => 35.5, "stock" => 0],
        ["nombre" => "Zapatos", "precio" => 55.0, "stock" => 5],
        ["nombre" => "Gorra", "precio" => 12.0, "stock" => 20],
    ];
    //1. Muestra solo los productos que tienen stock disponible (>0).

    foreach ($products as $product) {
        if($product["stock"]>0){
            echo "Products whit stock available: ". $product["nombre"] . " - $" . $product["precio"] . " - Stock: " . $product["stock"] . "<br>" ;
        }
    }
        echo "<br>";

    //2. Calcula el valor total de inventario (precio * stock sumados).
    $totalInventoryValue = 0;

    foreach ($products as $product) {
        $totalInventoryValue += $product["precio"] * $product["stock"];
    }

    echo "The total value of the inventory is: $" . $totalInventoryValue . "<br>" . "<br>";

    //3. Ordena el array por precio de mayor a menor y muéstralo.

    usort($products, function($a, $b) {
    return $b['precio'] <=> $a['precio']; 
    });

    foreach ($products as $product) {
        echo "Nombre: " . $product["nombre"] . ", Precio: $" . $product["precio"] . ", Stock: " . $product["stock"] . "<br>";
    }