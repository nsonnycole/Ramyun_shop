<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class MenusLikeRepository extends EntityRepository
{

  /**
  * Retourne le total des note d'un menu
  * @param idMenu identifiant du menu
  * @return int
  **/

  public function NbTotalNote($id)
  {

    return $this
    ->createQueryBuilder('ml')
    ->select('count(ml)')
    ->where('ml.idMenu=:id')
    ->setParameter('id',$id)
    ->getQuery()
    ->getSingleScalarResult()
    ;

    }

    /**
    * Retourne la moyenne des note d'un menu
    * @param idMenu identifiant du menu
    * @return int
    **/

  public function MoyenneNote($id)
  {
    return $this
    ->createQueryBuilder('ml')
    ->select('avg(ml)')
    ->where('ml.idMenu=:id')
    ->setParameter('id',$id)
    ->getQuery()
    ->getSingleScalarResult()
    ;

    }


}
?>
