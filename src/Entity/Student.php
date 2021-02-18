<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StudentRepository::class)
 */
class Student
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $student_number;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $course;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $year_level;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStudentNumber(): ?string
    {
        return $this->student_number;
    }

    public function setStudentNumber(string $student_number): self
    {
        $this->student_number = $student_number;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCourse(): ?string
    {
        return $this->course;
    }

    public function setCourse(string $course): self
    {
        $this->course = $course;

        return $this;
    }

    public function getYearLevel(): ?string
    {
        return $this->year_level;
    }

    public function setYearLevel(string $year_level): self
    {
        $this->year_level = $year_level;

        return $this;
    }
}
