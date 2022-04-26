<?php

namespace App\Entity;

use App\Repository\TeacherRepositoryInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TeacherRepositoryInterface::class)]
class Teacher
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 100)]
    private $fullName;

    #[ORM\OneToMany(mappedBy: 'teacher', targetEntity: Student::class)]
    private $students;

    #[ORM\OneToOne(inversedBy: 'teacher', targetEntity: Group::class, cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private $groupClass;

    public function __construct()
    {
        $this->students = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(string $fullName): self
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * @return Collection<int, Student>
     */
    public function getGroupName(): Collection
    {
        return $this->students;
    }

    public function addGroupName(Student $student): self
    {
        if (!$this->students->contains($student)) {
            $this->students[] = $student;
            $student->setTeacher($this);
        }

        return $this;
    }

    public function removeGroupName(Student $student): self
    {
        if ($this->students->removeElement($student)) {
            // set the owning side to null (unless already changed)
            if ($student->getTeacher() === $this) {
                $student->setTeacher(null);
            }
        }

        return $this;
    }

    public function getGroupClass(): ?Group
    {
        return $this->groupClass;
    }

    public function setGroupClass(Group $groupClass): self
    {
        $this->groupClass = $groupClass;

        return $this;
    }
}
