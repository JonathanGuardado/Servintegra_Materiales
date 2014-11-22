<?php

namespace GS\AppBundle\Form\Ordenes;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
 
class OrdenesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('material')
            ->add('cantidad')
            ->add('valor')
        ;
    }
 
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GS\AppBundle\Entity\Ordenes'
        ));
    }
 
    public function getName()
    {
        return 'ordenes_form';
    }
}

