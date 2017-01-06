<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class MenusRepository extends EntityRepository
{
  public function getPlatById($id){


    /*->createQuery(
    *  'SELECT plat FROM AppBundle:Menus plat WHERE plat.id = :id'
    *)->setParameter('id', $id)
    *->getSingleResult();*/
    $query = $this->createQueryBuilder('plat')
    ->where('plat.id = :id')
    ->setParameter('id', $id)
    ->getQuery();
    return $query -> getSingleResult();
  }




}
?>
