<?php

namespace App\Repository;


use App\Entity\Group;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;

/**
 * @method Group|null find($id, $lockMode = null, $lockVersion = null)
 * @method Group|null findOneBy(array $criteria, array $orderBy = null)
 * @method Group[]    findAll()
 * @method Group[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
interface GroupRepositoryInterface
{
    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Group $entity, bool $flush = true): void;

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Group $entity, bool $flush = true): void;
}
