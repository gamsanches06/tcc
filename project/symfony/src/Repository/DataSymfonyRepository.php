<?php

namespace App\Repository;

use App\Entity\DataSymfony;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DataSymfony>
 *
 * @method DataSymfony|null find($id, $lockMode = null, $lockVersion = null)
 * @method DataSymfony|null findOneBy(array $criteria, array $orderBy = null)
 * @method DataSymfony[]    findAll()
 * @method DataSymfony[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DataSymfonyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DataSymfony::class);
    }

    public function add(DataSymfony $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(DataSymfony $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
