<?php

namespace GS\AppBundle\Form\OrdenPresupuestada;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OrdenPresupuestadaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('precioPresupuesto')
            ->add('cantidadPresupuesto')
            ->add('usuarioCreacion')
            ->add('fechaCreacion')
            ->add('usuarioModificacion')
            ->add('fechaModificacion')
            ->add('presupuestoMensual')
            ->add('material')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GS\AppBundle\Entity\OrdenPresupuestada'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gs_appbundle_ordenpresupuestada';
    }
}
