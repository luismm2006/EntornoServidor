<?php

$productos = [
    [
        "id" => 101,
        "nombre" => "Teclado mecánico",
        "precio" => 59.99,
        "stock" => 10,
        "categoria" => "Periféricos"
    ],
    [
        "id" => 102,
        "nombre" => "Monitor 24 pulgadas",
        "precio" => 129.90,
        "stock" => 5,
        "categoria" => "Monitores"
    ],
    [
        "id" => 103,
        "nombre" => "Ratón inalámbrico",
        "precio" => 19.50,
        "stock" => 0,
        "categoria" => "Periféricos"
    ],
    [
        "id" => 104,
        "nombre" => "Disco SSD 1TB",
        "precio" => 89.00,
        "stock" => 2,
        "categoria" => "Almacenamiento"
    ],
    [
        "id" => 105,
        "nombre" => "Base refrigeradora",
        "precio" => 25.75,
        "stock" => 7,
        "categoria" => "Accesorios"
    ]
];

// 1️ Mostrar productos con stock = 0
    echo "Productos sin stock:";
    foreach ($productos as $p) {
        if ($p["stock"] === 0) {
            echo $p["nombre"] . "<br>";
        }
    }
    echo "<br>";
// 2️ Calcular valor total del inventario
    $totalInventario = 0;
    foreach ($productos as $p) {
        $totalInventario += $p["precio"] * $p["stock"];
    }
    echo "Valor total del inventario: $" . $totalInventario;
    echo "<br>";
    echo "<br>";

// 3️ Nuevo array con categorías como claves
    $productosPorCategoria = [];
    foreach ($productos as $p) {
        $productosPorCategoria[$p["categoria"]][] = $p;
    }

    echo "Productos agrupados por categoría:";
    print_r($productosPorCategoria);
    echo "<br>";
    echo "<br>";

// 4️ Producto más caro
    $productoCaro = $productos[0];
    foreach ($productos as $p) {
        if ($p["precio"] > $productoCaro["precio"]) {
            $productoCaro = $p;
        }
    }
    echo "Producto más caro:";
    echo $productoCaro["nombre"] . " - $" . $productoCaro["precio"] . "<br>";
    echo "<br>";

// 5 Tabla HTML con productos con stock > 0
    echo "Productos con stock disponible:";
    echo "<table border='1'>";
    echo "<tr><th>Nombre</th><th>Precio</th><th>Stock</th></tr>";
    foreach ($productos as $p) {
        if ($p["stock"] > 0) {
            echo "<tr>";
            echo "<td>" . $p["nombre"] . "</td>";
            echo "<td>$". $p["precio"] . "</td>";
            echo "<td>" . $p["stock"] . "</td>";
            echo "</tr>";
        }
    }
    echo "</table>";