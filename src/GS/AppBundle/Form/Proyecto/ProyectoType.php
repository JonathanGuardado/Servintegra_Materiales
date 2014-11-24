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
            ->add('nombreProyecto')
            ->add('nPersonas','text',array('label'=>"Numero de personas"))            
            ->add('fInicio', 'date', array(
                'label'=>'Fecha de Inicio',
                'input'  => 'datetime', 'widget' => 'single_text', 
                'format' => 'dd/MM/yyyy',
                'attr' => array('class' => 'date form-control')))
            ->add('presupuesto')
                ->add('responsable','text')
            ->add('unidadNegocio')
            
            ->add('Guardar', 'submit')
        ;
    }
 
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GS\AppBundle\Entity\Proyecto'
        ));
    }
 
    public function getName()
    {
        return 'proyecto_form';
    }
}

