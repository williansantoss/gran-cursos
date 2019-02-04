<?php

namespace App\Repository;

use App\Entity\Contatos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Contatos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Contatos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Contatos[]    findAll()
 * @method Contatos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContatosRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Contatos::class);
    }

    //
    public function findOneByIdJoinedToEndereco($contatoId)
    {
        $query = $this->getEntityManager()
            ->createQuery(
                'SELECT p, c FROM Contato p
                JOIN p.endereco c
                WHERE p.id = :id'
            )->setParameter('id', $contatoId);

        try {
            return $query->getSingleResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }

    // /**
    //  * @return Contatos[] Returns an array of Contatos objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Contatos
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
