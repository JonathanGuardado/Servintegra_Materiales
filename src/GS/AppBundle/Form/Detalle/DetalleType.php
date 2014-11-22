<?php

namespace GS\AppBundle\Form\Detalle;

use GS\AppBundle\Form\Ordenes\OrdenesType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
 
class DetalleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('proyecto')
            ->add('periodo', 'date', array(
                'input'  => 'datetime', 'widget' => 'single_text', 
                'format' => 'dd/MM/yyyy'))
            ->add('observacion')
            ->add('ordenes', 'collection', array(
                'type' => new OrdenesType(), 
                'allow_add'    => true,
                'allow_delete' => true,
                'by_reference' => false,
                ))
            ->add('crear', 'submit')
        ;
    }
 
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GS\AppBundle\Entity\Detalles'
        ));
    }
 
    public function getName()
    {
        return 'detalle_form';
    }
}

