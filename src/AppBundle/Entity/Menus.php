<?php
  namespace AppBundle\Entity;
  use Symfony\Component\validator\constraints\NotBlank;
  use Symfony\Component\validator\constraints\Length;
  use Doctrine\ORM\Mapping as ORM;
  /**
  *@ORM\Entity(repositoryClass="AppBundle\Repository\MenusRepository"))
  *@ORM\Table(name="Menus")
  */
  class Menus
  {

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $titre
     * @NotBlank(message="Le titre doit être renseigné")
     * @length(max="200")
     * @ORM\Column(name="titre", type="string")
     */
    private $titre;

    /**
     * @var text $description
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var text $ingredients
     * @NotBlank(message="Le titre doit être renseigné")
     * @length(min="50")
     * @ORM\Column(name="ingredients", type="text", nullable=true)
     */
    private $ingredients;

    /**
    * @var int
    *
    */
    private $like;

    /**
    * @var text $image
    * @ORM\Column(name="image", type="text")
    */
    private $image;


      public function __construct()
      {

      }



    /**
     * Get the value of Id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of Titre
     *
     * @return string $titre
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of Titre
     *
     * @param string $titre titre
     *
     * @return self
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of Description
     *
     * @return text $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of Description
     *
     * @param text $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of Ingredients
     *
     * @return text $ingredients
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Set the value of Ingredients
     *
     * @param text $ingredients ingredients
     *
     * @return self
     */
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    /**
     * Get the value of Like
     *
     * @return mixed
     */
    public function getLike()
    {
        return $this->like;
    }

    /**
     * Set the value of Like
     *
     * @param mixed like
     *
     * @return self
     */
    public function setLike($like)
    {
        $this->like = $like;

        return $this;
    }


    /**
     * Set the value of Id
     *
     * @param integer $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Image
     *
     * @return text $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of Image
     *
     * @param text $image image
     *
     * @return self
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

}

 ?>
