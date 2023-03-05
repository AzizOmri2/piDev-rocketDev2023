<?php

namespace App\Repository;

use App\Entity\CircularReferenceHandler;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CircularReferenceHandler>
 *
 * @method CircularReferenceHandler|null find($id, $lockMode = null, $lockVersion = null)
 * @method CircularReferenceHandler|null findOneBy(array $criteria, array $orderBy = null)
 * @method CircularReferenceHandler[]    findAll()
 * @method CircularReferenceHandler[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CircularReferenceHandlerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CircularReferenceHandler::class);
    }

    public function save(CircularReferenceHandler $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CircularReferenceHandler $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return CircularReferenceHandler[] Returns an array of CircularReferenceHandler objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CircularReferenceHandler
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
