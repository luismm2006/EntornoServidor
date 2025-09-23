<?php

$pedidos = [
    [
        "id" => 1,
        "cliente" => "Ana",
        "fecha" => "2025-07-01",
        "total" => 120.50
    ],
    [
        "id" => 2,
        "cliente" => "Luis",
        "fecha" => "2025-07-25",
        "total" => 75.00
    ],
    [
        "id" => 3,
        "cliente" => "Carlos",
        "fecha" => "2025-06-15",
        "total" => 89.99
    ],
    [
        "id" => 4,
        "cliente" => "María",
        "fecha" => "2025-07-10",
        "total" => 45.30
    ],
    [
        "id" => 5,
        "cliente" => "Lucía",
        "fecha" => "2025-07-28",
        "total" => 150.00
    ]
];

$hoy = new DateTime(); 

// 1️ Pedidos en el mismo mes y año que hoy
    echo "Pedidos en el mismo mes y año:";
    echo "<br>";

    foreach ($pedidos as $p) {
        $fechaPedido = new DateTime($p["fecha"]);
        if ($fechaPedido->format("Y-m") === $hoy->format("Y-m")) {
            echo "ID " . $p['id'] . "-" . "Cliente: " . $p['cliente'] . "-" . "Fecha: " . $p['fecha'] . "<br>";
        }
    }
    echo "<br>";

// 2️ Días transcurridos desde la fecha del pedido
    echo "Días desde cada pedido:";
    echo "<br>";
    foreach ($pedidos as $p) {
        $fechaPedido = new DateTime($p["fecha"]);
        $dias = $fechaPedido->diff($hoy)->days;
        echo "Pedido ID " . $p['id'] . " de " . $p['cliente'] . " fue hace " . $dias . " días" . "<br>";
    }
    echo "<br>";

// 3️ Ordenar por fecha descendente
    usort($pedidos, function($a, $b) {
        return strtotime($b["fecha"]) - strtotime($a["fecha"]);
    });
    echo "Pedidos ordenados por fecha descendente:";
    echo "<br>";
    foreach ($pedidos as $p) {
        echo $p['fecha'] . "-" . $p['cliente'] . "-" . "Total:" . $p['total'] . "<br>";
    }
    echo "<br>";

// 4️ Función pedidos entre dos fechas
    function pedidosEntreFechas($pedidos, $inicio, $fin) {
        $resultado = [];
        $fechaInicio = new DateTime($inicio);
        $fechaFin = new DateTime($fin);
        
        foreach ($pedidos as $p) {
            $fechaPedido = new DateTime($p["fecha"]);
            if ($fechaPedido >= $fechaInicio && $fechaPedido <= $fechaFin) {
                $resultado[] = $p;
            }
        }
        return $resultado;
    }

    echo "Pedidos entre 2025-07-01 y 2025-07-20:";
    echo "<br>";

    $filtrados = pedidosEntreFechas($pedidos, "2025-07-01", "2025-07-20");
    foreach ($filtrados as $p) {
        echo $p['fecha'] . "-" . $p['cliente'] . "-" . "Total:". $p['total'] . "<br>";
    }
    echo "<br>";
// 5️ Pedidos en los últimos 7 días
    echo "Pedidos en los últimos 7 días:";
    foreach ($pedidos as $p) {
        $fechaPedido = new DateTime($p["fecha"]);
        $diff = $fechaPedido->diff($hoy)->days;
        if ($fechaPedido <= $hoy && $diff <= 7) {
            echo "Pedido ID {$p['id']} - {$p['cliente']} - Fecha: {$p['fecha']}<br>";
        }
    }
