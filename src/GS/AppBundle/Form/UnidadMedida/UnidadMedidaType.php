<?php

namespace GS\AppBundle\Form\UnidadMedida;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UnidadMedidaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombreUnidad',"text")
            ->add('descripcionUnidad')                 
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GS\AppBundle\Entity\UnidadMedida'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gs_appbundle_unidadmedida';
    }
}
