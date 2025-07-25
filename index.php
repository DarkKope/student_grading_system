<?php

use Fernandez\Gs\Core\Database;
use Fernandez\Gs\Models\StudentModel;

require 'vendor/autoload.php';
 

$student =new StudentModel;

$student->id =123456;
$student->name = "Melly";
$student->course = "BPED";
$student->year_level = 1;
$student->section = "A";


// $student->create();
// $student->read();
$student->update(1234);
// $student->delete(123);
$listofstudents = $student->read();

print_r($listofstudents);

