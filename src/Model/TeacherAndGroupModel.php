<?php

declare(strict_types=1);

namespace App\Model;

final class TeacherAndGroupModel
{
    private string $teacherFullName;

    private string $groupName;

    public function getTeacherFullName(): string
    {
        return $this->teacherFullName;
    }

    public function getGroupName(): string
    {
        return $this->groupName;
    }

    public function __construct(string $teacherFullName, string $groupName)
    {
        $this->teacherFullName = $teacherFullName;
        $this->groupName = $groupName;
    }
}
