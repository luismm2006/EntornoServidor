<?php

    $empleados = [
        ["nombre" => "Laura", "departamento" => "Ventas", "salario" =>
        1200],
        ["nombre" => "Pedro", "departamento" => "Marketing", "salario" =>
        1500],
        ["nombre" => "Sofía", "departamento" => "Ventas", "salario" =>
        1300],
        ["nombre" => "Javier", "departamento" => "IT", "salario" => 1800],
        ["nombre" => "Marta", "departamento" => "Marketing", "salario" =>
        1600],
        ];

    //1.Calcula el salario medio por departamento.

    $totalSalary = [];
    $countEmploye = [];

    foreach ($empleados as $empleado) {
        $department = $empleado['departamento'];
        $salary = $empleado['salario'];
        
        if(!isset($totalSalary[$department]) || !isset ($countEmploye[$department])){
            $totalSalary[$department] = 0;
            $countEmploye[$department] = 0;
        }

        $totalSalary[$department] += $salary;
        $countEmploye[$department]++;
    }

    $salaryAvg = [];
    foreach ($totalSalary as $department => $total) {
        $salaryAvg[$department] = $total / $countEmploye[$department];
    }

    foreach ($salaryAvg as $department => $avg) {
        echo "Salario medio en $department: " . $avg . "€\n";
    }

    //2. Muestra el empleado con el salario más alto.

    $maxSalary = -1;
    $EmployeMaxSalary = "";
    foreach ($empleados as $employe) {
        if ($employe["salario"] > $maxSalary) {
            $maxSalary = $employe["salario"];
            $EmployeMaxSalary = $employe["nombre"];
        }
    }
    echo "<br>"."The employe with the highest salary is: $EmployeMaxSalary with $maxSalary<br>";

    //3. Crea una función que reciba el departamento y devuelva un array con los nombres de los empleados que trabajan ahí.

    function employeInDepartament($department){
        global $empleados; 
        $employeDepartment = [];
        foreach ($empleados as $employe){
            if ($employe["departamento"] === $department) {
                $employeDepartment[] = $employe["nombre"];
            }
        }
        return $employeDepartment;
    }
    $department = "Ventas";

    echo "In department " . $department . " are: " . "<br>";

    foreach (employeInDepartament($department) as $nombre) {
        echo $nombre . "<br>";
    }