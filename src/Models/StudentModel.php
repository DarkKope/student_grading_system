<?php

namespace Fernandez\Gs\Models;

use Fernandez\Gs\Core\Crud;
use Fernandez\Gs\Core\Database;

class StudentModel extends Database implements Crud{
   

    public int $id;
    public string $name;
    public string $course;
    public int $year_level;
    public string $section;

    public function __construct()
    {
        parent::__construct();
        $this->id=0;
        $this->name="";
        $this->course="";
        $this->year_level=0;
        $this->section="";
    }
    public function create(){
        //CREATE DATA
        $query = $this->conn->prepare("INSERT INTO `students` (`ID`, `Name`, `Course`, `year_level`, `section`) 
        VALUES ('$this->id','$this->name','$this->course','$this->year_level','$this->section')");
        if ($query->execute()){
            echo "Student Created Successfully!";
        }
    }
    public function read(){
        try{
            $sql ="SELECT * FROM students";
            $results=$this->conn->query($sql);
            return $results->fetch_all(MYSQLI_ASSOC);
        }catch (\Throwable $th) {
                echo $th->getMessage();
            }
        }

    
    public function update($id){ 
        $this->id=$id;
        $query = $this->conn->prepare("UPDATE `students` SET ID='$this->id',Name='$this->name',Course='$this->course',
        year_level='$this->year_level',section='$this->section' WHERE id = $this->id");
        if ($query->execute()){
            echo "Student Updated Successfully!";
        }
    }

    public function delete($id){
        $this->id=$id;
        $query = $this->conn->prepare("DELETE FROM `students` WHERE $this->id");
        if ($query->execute()){
            echo "Student Deleted Successfully!";
        }

    }
}
?>

