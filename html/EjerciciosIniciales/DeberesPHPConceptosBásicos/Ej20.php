<?php
    $students = [
        ["name" => "Ana", "age" => 19, "grade" => 7.5],
        ["name" => "Luis", "age" => 21, "grade" => 6.8],
        ["name" => "Marta", "age" => 18, "grade" => 9.2],
        ["name" => "Carlos", "age" => 20, "grade" => 5.4],
    ];

    // 1. Escribe un código que muestre el nombre del alumno con la nota más alta.

    $maxGrade = -1;
    $bestStudent = "";
    foreach ($students as $student) {
        if ($student["grade"] > $maxGrade) {
            $maxGrade = $student["grade"];
            $bestStudent = $student["name"];
        }
    }
    echo "The student with the highest grade is: $bestStudent with $maxGrade<br>";

    // 2. Calcula y muestra la media de las notas.
    $sumGrades = 0;
    foreach ($students as $student) {
        $sumGrades += $student["grade"];
    }
    $average = $sumGrades / count($students);
    echo "The average grade is: $average<br>";

    // 3. Muestra un listado de los alumnos mayores de 19 años.

    echo "Students older than 19:<br>";
    foreach ($students as $student) {
        if ($student["age"] > 19) {
            echo $student["name"] . "<br>";
        }
    }
