<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\validator\constraints\NotBlank;

class MenuLikeType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('note',ChoiceType::class,[
            'choices' => [
            '0 étoiles'=>0,
            '1 étoiles'=>1,
            '2 étoiles'=>2,
            '3 étoiles'=>3,
            '4 étoiles'=>4,
            '5 étoiles'=>5,
        ],
        'expanded' => false
        ]) //radio bouton au lieu de checkbox
        ->add('user', TextType::class)

        ;
    }


/*    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => '\Entity\validationFormMenu'
        ));
    }*/
}

?>
