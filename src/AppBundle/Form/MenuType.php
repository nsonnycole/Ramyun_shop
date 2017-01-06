<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\validator\constraints\NotBlank;

class MenuType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('titre', TextType::class, array('required' => false))
        ->add('description', TextareaType::class, array('required' => false))
        ->add('ingredients', TextareaType::class, array('required' => false))
        ->add('image', TextType::class, array('required' => false))


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
