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
            //->add('mesPresupuesto','choice',array('label' => 'Mes','choices'=>array('1' => 'Enero','2' => 'Febrero','3' => 'Marzo','4' => 'Abril','5' => 'Mayo','6' => 'Junio','7' => 'Julio','8' => 'Agosto','9' => 'Septiembre','10' => 'Octubre','11' => 'Noviembre','12' => 'Diciembre')))
            //->add('anioPresupuesto','text',array('label' => 'Año'))
            ->add('presupuesto','text',array('label' => 'Presupuesto Mensual'))                             
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
