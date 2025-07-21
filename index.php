<?php

use Fernandez\Gs\Core\Database;
use Fernandez\Gs\Models\StudentModel;

require 'vendor/autoload.php';

$student = new StudentModel();
$listofstudents = $student->read();
print_r($listofstudents);
