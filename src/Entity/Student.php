<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Ignore;

#[ORM\Entity(repositoryClass: StudentRepository::class)]
class Student
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 64)]
    private $name;

    #[ORM\Column(type: 'string', length: 64)]
    private $lastName;

    #[ORM\Column(type: 'string', length: 10)]
    private $gender;

    #[ORM\ManyToOne(targetEntity: Group::class, inversedBy: 'students')]
    #[ORM\JoinColumn(nullable: false)]
    /** @Ignore  */
    private $groupClass;

    #[ORM\ManyToOne(targetEntity: Teacher::class, inversedBy: 'students')]
    #[ORM\JoinColumn(nullable: false)]
    /** @Ignore  */
    private $teacher;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getGroupClass(): ?Group
    {
        return $this->groupClass;
    }

    public function setGroupClass(?Group $groupClass): self
    {
        $this->groupClass = $groupClass;

        return $this;
    }

    public function getTeacher(): ?Teacher
    {
        return $this->teacher;
    }

    public function setTeacher(?Teacher $teacher): self
    {
        $this->teacher = $teacher;

        return $this;
    }
}
