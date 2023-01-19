<?php
    $my_arr_constructor = array();
    $my_arr_literal = [];
    $my_arr_init_vals = ['a', 'b', 'c', 1, true, 5.6]; // Arrays can be mixed in PHP
    $mixed_arr = [
        "Jacob",
        true,
        44,
        30.62
    ];

    array_push($mixed_arr, 'I like Cats'); // Add item to array
    $mixed_arr[] = 'I dont like Dogs'; // Add item to array
    array_unshift($mixed_arr, false); // Add item to the beginning of the array
    array_pop($mixed_arr); // Removes the last item in the array
    array_shift($mixed_arr); // Removes the first item in the array
    array_splice($mixed_arr, 3, 1); // Removes index 3, removes 1 item at index 3

    $mixed_arr[] = [ // Nested Array
        'Hello',
        'World'
    ];

    $mixed_arr[0] = 'Jacob Nordstrom' // Changing specific index of array


?>