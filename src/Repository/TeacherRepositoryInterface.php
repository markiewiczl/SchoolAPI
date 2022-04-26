<?php

namespace App\Repository;


use App\Entity\Teacher;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;

/**
 * @method Teacher|null find($id, $lockMode = null, $lockVersion = null)
 * @method Teacher|null findOneBy(array $criteria, array $orderBy = null)
 * @method Teacher[]    findAll()
 * @method Teacher[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
interface TeacherRepositoryInterface
{
    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Teacher $entity, bool $flush = true): void;

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Teacher $entity, bool $flush = true): void;
}
