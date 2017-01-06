<?php
  namespace AppBundle\Entity;
  use Doctrine\ORM\Mapping as ORM;

  /**
  *@ORM\Entity(repositoryClass="AppBundle\Repository\MenusLikeRepository"))
  *@ORM\Table(name="MenuLike")
  */
  class MenuLike
  {

    /**
     * @var int $idLike
     * @ORM\Column(name="idLike", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idLike;

    /**
     * @var int $note
     * @ORM\Column(name="note", type="integer")
     */
    private $note;

    /**
     * @var int $idMenu
     * Un menu peut avoir plusieurs note utilisateur
     * @ORM\ManyToOne(targetEntity="Menus")
     * @ORM\JoinColumn(name="idMenu", referencedColumnName="id")
     */
    private $idMenu;

    /**
     * @var string $user
     * @ORM\Column(name="user", type="string")
     */
    private $user;

    public function __construct(){

    }


    /**
     * Get the value of Id Like
     *
     * @return int $idLike
     */
    public function getIdLike()
    {
        return $this->idLike;
    }

    /**
     * Set the value of Id Like
     *
     * @param int $idLike idLike
     *
     * @return self
     */
    public function setIdLike($idLike)
    {
        $this->idLike = $idLike;

        return $this;
    }

    /**
     * Get the value of Note
     *
     * @return int $note
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set the value of Note
     *
     * @param int $note note
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get the value of Id Menu
     *
     * @return int $idMenu
     */
    public function getIdMenu()
    {
        return $this->idMenu;
    }

    /**
     * Set the value of Id Menu
     *
     * @param int $idMenu idMenu
     *
     * @return self
     */
    public function setIdMenu($idMenu)
    {
        $this->idMenu = $idMenu;

        return $this;
    }

    /**
     * Get the value of User
     *
     * @return string $user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of User
     *
     * @param string $user user
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }


}


?>
