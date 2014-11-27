<?php

namespace GS\AppBundle\Form\PresupuestoMensual;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PresupuestoMensualType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('mesPresupuesto','integer',array('label' => 'Mes'))
            ->add('anioPresupuesto','text',array('label' => 'Año'))
            ->add('presupuesto')                             
            ->add('proyecto')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GS\AppBundle\Entity\PresupuestoMensual'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gs_appbundle_presupuestomensual';
    }
}
