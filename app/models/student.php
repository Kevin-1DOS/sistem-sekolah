<?php

namespace App\models;
require_once '../app/core/DataBase.php';

use App\Core\DataBase;

class Student extends DataBase {
protected $table = 'students';

public function getStudents() {
    $students = [];
    $query = "SELECT * FROM {$this->table}";
    $stmt = $this->connection->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($student = $result->fetch_assoc()) {
        $students[] = $student;
    }
    return $students;
}

//Menampilkan detail siswa
public function getStudent(int $id) {
    $query = "SELECT * FROM {$this->table} WHERE id = ?";
    $stmt = $this->connection->prepare($query);
    $stmt ->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $student = $result->fetch_assoc();
    return $student;
}
}
?>