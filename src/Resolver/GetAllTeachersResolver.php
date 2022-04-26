<?php

declare(strict_types=1);

namespace App\Resolver;

use App\Model\TeacherAndGroupModel;
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

        foreach ($teachers as $teacher) {
            $teacherName = $teacher->getFullName();
            $groupName = $teacher->getGroupClass()->getName();
            $teacherAndGroup = new TeacherAndGroupModel($teacherName, $groupName);

            $array[] = $teacherAndGroup;
        }

        return $array;
    }
}
