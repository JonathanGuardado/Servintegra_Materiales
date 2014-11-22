<?php

namespace GS\AppBundle\Form\Proyecto;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
 
class ProyectoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('personas')            
            ->add('fechaInicio', 'date', array(
                'input'  => 'datetime', 'widget' => 'single_text', 
                'format' => 'dd/MM/yyyy',
                'attr' => array('class' => 'date form-control')))
            ->add('presupuesto')
            ->add('unidadNegocio')
            ->add('fase')
            ->add('crear', 'submit')
        ;
    }
 
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GS\AppBundle\Entity\Proyectos'
        ));
    }
 
    public function getName()
    {
        return 'proyecto_form';
    }
}

