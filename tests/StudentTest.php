<?php

namespace tests;
require_once "code/Student.php";

use PDO;
use PDOStatement;
use Student;

class StudentTest extends \PHPUnit\Framework\TestCase
{
    private $pdo;
    private $stmnt;

    protected function setUp(): void
    {
        $this->pdo = $this->createMock(PDO::class);
        $this->stmnt = $this->createMock(PDOStatement::class);
    }

    public function testAdd(): void
    {
        $this->stmnt->expects($this->once())
            ->method('execute')
            ->with(["Ivan", "23", "math", "agree_rules", 'rega']);

        $this->pdo->expects($this->once())
            ->method('prepare')
            ->with("INSERT INTO students (name, age, faculty, agree_rules, study_form) VALUES (?, ?, ?, ?, ?)")
            ->willReturn($this->stmnt);

        $student = new Student($this->pdo);
        $student->add("Ivan", "23", "math", "agree_rules", 'rega');
    }
}
