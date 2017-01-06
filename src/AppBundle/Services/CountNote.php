<?php
namespace AppBundle\Services;


class CountNote
{
  /**
  * Retourne le total des note d'un menu
  * @var Entitymanager
  *
  **/
   private $doctrine;

   public function __construct($doctrine)
   {
     $this->doctrine = $doctrine;

   }
   /**
   * Retourne le total des note d'un menu
   * @param idMenu identifiant du menu
   * @return int
   **/
   public function getTotalMenuLike($id){
     return $this
     ->doctrine
     ->getRepository('AppBundle:MenuLike')
     ->NbTotalNote($id);
   }

   /**
   * Retourne la moyenne des note d'un menu
   * @param idMenu identifiant du menu
   * @return int
   **/
   public function getMoyenneMenuLike($id){
     return $this
     ->doctrine
     ->getRepository('AppBundle:MenuLike')
     ->MoyenneNote($id);
   }


}
