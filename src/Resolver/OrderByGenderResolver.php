<?php

declare(strict_types=1);

namespace App\Resolver;

use App\Repository\GroupRepositoryInterface;
use App\Repository\StudentRepositoryInterface;

final class OrderByGenderResolver implements OrderByGenderResolverInterface
{
    private StudentRepositoryInterface $studentRepository;

    private GroupRepositoryInterface $groupRepository;

    public function __construct(StudentRepositoryInterface $studentRepository, GroupRepositoryInterface $groupRepository)
    {
        $this->studentRepository = $studentRepository;
        $this->groupRepository = $groupRepository;
    }


    public function getStudentsOrderByGender($name): array
    {
        $group = $this->groupRepository->findOneBy(['name' => $name]);
        $groupId = $group->getId();
        $students = $this->studentRepository->findAllAndOrderByGender($groupId);

        return $students;
    }

}
