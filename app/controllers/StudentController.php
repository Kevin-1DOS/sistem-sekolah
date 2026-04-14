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
    print_r($students);
$this->view('students.index')  ;
}

public function create() {
$this->view('students.create')  ;
}

public function show($id) {
$this->view('students.show', ['id' => $id]);
}

public function edit(string $id) {
$this->view('students.edit', ['id' => $id]);
}



}