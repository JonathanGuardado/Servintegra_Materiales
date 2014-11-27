<?php

namespace GS\AppBundle\Form\Material;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MaterialType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder                
                ->add('categoria')
                ->add('nombreMaterial','text')
                ->add('descripcionMaterial')
                ->add('costoMaterial')
                ->add('precioMaterial')
                ->add('existenciaActual')
                ->add('cantidadReorden','text',array('label'=>'Existencia Minima'))
                ->add('ubicacion')                
                ->add('unidadMedida')
                ->add('estado')                
                ->add('Guardar', 'submit', array('label' => 'Guardar', 'attr' => array('class' => 'btn btn-success')))
                ->add('cancelar', 'button', array('label' => 'Cancelar', 'attr' => array('class' => 'btn btn-danger')))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'GS\AppBundle\Entity\Material'
        ));
    }

    public function getName() {
        return 'material_form';
    }

}

