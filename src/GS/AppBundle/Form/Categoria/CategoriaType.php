<?php

namespace GS\AppBundle\Form\Categoria;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CategoriaType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nombreCategoria','text')
                ->add('descripcionCategoria')
                ->add('Guardar', 'submit', array('label' => 'Guardar', 'attr' => array('class' => 'btn btn-success')))
                ->add('cancelar', 'button', array('label' => 'Cancelar', 'attr' => array('class' => 'btn btn-danger')))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'GS\AppBundle\Entity\Categoria'
        ));
    }

    public function getName() {
        return 'categoria_form';
    }

}

