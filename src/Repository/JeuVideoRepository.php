<?php

namespace App\Repository;

use App\Entity\JeuVideo;
use App\Entity\JeuVideoRecherche;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<JeuVideo>
 */
class JeuVideoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, JeuVideo::class);
    }

    /**
* @return JeuVideo[]
*/
public function findAllByCriteria(JeuVideoRecherche $jeuvideoRecherche): array
{
    // le "j" est un alias utilisé dans la requête
    $qb = $this->createQueryBuilder('j')
            ->orderBy('j.nom', 'ASC');

if ($jeuvideoRecherche->getLibelle()) {
        $qb->andWhere('j.nom LIKE :libelle')
            ->setParameter('libelle', $jeuvideoRecherche->getLibelle() . '%');
}
if ($jeuvideoRecherche->getPrixMini()) {
        $qb->andWhere('j.prix >= :prixMini')
            ->setParameter('prixMini', $jeuvideoRecherche->getPrixMini());
}
if ($jeuvideoRecherche->getPrixMaxi()) {
        $qb->andWhere('j.prix < :prixMaxi')
            ->setParameter('prixMaxi', $jeuvideoRecherche->getPrixMaxi());
}
$query = $qb->getQuery();
return $query->execute();
}

/**
* @return Jeuvideo[]
*/
public function findAllOrderByLibelle(): array
{
    $entityManager = $this->getEntityManager();
    $query = $entityManager->createQuery(
        'SELECT j
        FROM App\Entity\JeuVideo j
        ORDER BY j.nom ASC'
    );

    // retourne un tableau d'objets de type Produit
    return $query->getResult();
}


    //    /**
    //     * @return JeuVideo[] Returns an array of JeuVideo objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('j')
    //            ->andWhere('j.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('j.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?JeuVideo
    //    {
    //        return $this->createQueryBuilder('j')
    //            ->andWhere('j.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
