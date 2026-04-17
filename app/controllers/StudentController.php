<?php

    
namespace App\Controllers;
require_once '../app/core/controller.php';
require_once '../app/models/student.php';
use App\Core\Controller;
use App\Models\Student;
class StudentController extends Controller {



public function index() {
    $studentmodel = new Student();
    $students = $studentmodel->getStudents();   
$this->view('students.index' , ['students' => $students]);
}

public function create() {
   
$this->view('students.create')  ;
}

public function show($id) {
    $id = intval($id);
     $studentmodel = new Student();
    $student = $studentmodel->getStudent($id);

$this->view('students.show', ['student' => $student]);
}

public function edit(string $id) {
$this->view('students.edit');
}



}