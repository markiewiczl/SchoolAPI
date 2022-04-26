<?php

declare(strict_types=1);

namespace App\Resolver;

use App\Repository\TeacherRepositoryInterface;

final class GetAllTeachersResolver implements GetAllTeachersResolverInterface
{
    private TeacherRepositoryInterface $teacherRepository;

    public function __construct(TeacherRepositoryInterface $teacherRepository)
    {
        $this->teacherRepository = $teacherRepository;
    }

    public function getAllTeacherClassNames(): array
    {
        $teachers = $this->teacherRepository->findAll();

        foreach ($teachers as $key => $teacher) {
            $group = $teacher->getGroupClass();
            $groupName = $group->getName();
            $array[$key] = [
                'name' => $teacher->getFullName(),
                'groupName' => $groupName
            ]
            ;
        }

        return $array;
    }
}
