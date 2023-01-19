<?php
    $aa_students = [
        [
            "name" => 'Shaun',
            "age" => 44,
            "dob" => "1978-12-22"
        ],

        [
            "name" => 'Amrit',
            "age" => 40,
            "dob" => "1982-12-22"
        ]
    ];

    foreach ($aa_students as $student) {
        echo $student["age"];
    }

    // all arrays are technically associative arrays
    // implicitly keyed arrays = starts at 0 and goes
    // explicitly keyed arrays are defined by the user


?>