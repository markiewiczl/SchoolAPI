<?php

declare(strict_types=1);

namespace App\Resolver;

use App\Repository\GroupRepositoryInterface;
use App\Repository\StudentRepositoryInterface;

final class GetAllStudentsFromClass implements GetAllStudentsFromClassInterface
{
    private GroupRepositoryInterface $groupRepository;

    public function __construct(GroupRepositoryInterface $groupRepository)
    {
        $this->groupRepository = $groupRepository;
    }


    public function getAllStudensFromClass(string $name): array
    {
        $group = $this->groupRepository->findOneBy(['name' => $name]);
        $students = $group->getStudents()->toArray();

        return $students;
    }
}
