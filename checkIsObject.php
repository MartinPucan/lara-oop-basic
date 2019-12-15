<?php

function get_students($obj)
{
    if (!is_object($obj)) {
        return false;
    }

    return $obj->students;
}

// Declare a new class instance and fill up
// some values
$obj = new stdClass();
$obj->students = ['Kalle', 'Ross', 'Felipe'];

echo '<pre>';
var_dump(get_students(null));
var_dump(get_students($obj));
echo '<pre>';
