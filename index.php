<?php

use Fernandez\Gs\Core\Database;
use Fernandez\Gs\Models\StudentModel;

require 'vendor/autoload.php';
 
 $student = new StudentModel;
 $student->id =69;
 $student->name = "ace DMAK";
 $student->course = "NPE";
 $student->year_level = 99;
 $student->section = "A";


//$student =new StudentModel;
//$listofstudents = $student->read();

//print_r($listofstudents);


//$student->create();
//$student->read();
$student->update(69);
//$student->delete(112);
