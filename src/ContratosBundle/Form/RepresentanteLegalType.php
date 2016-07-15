<?php

namespace ContratosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RepresentanteLegalType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sexo', 'choice', array('label' => 'Sexo', 'expanded' => true, 'choices' => array('Hombre' => 'Hombre', 'Mujer' => 'Mujer')))
            ->add('nombres', null, array('label' => 'Nombres'))
            ->add('apellido_paterno', null, array('label' => 'Apellido Paterno'))
            ->add('apellido_materno', null, array('label' => 'Apellido Materno'))
            ->add('nacionalidad', null, array('label' => 'Nacionalidad'))
            ->add('estado_civil', 'choice', array('label' => 'Estado civil', 'required' => false, 'placeholder' => 'Seleccione una opción', 'choices' => array('Soltero' => 'Soltero', 'Casado' => 'Casado', 'Divorciado' => 'Divorciado', 'Viudo' => 'Viudo')))
            ->add('rut', null, array('label' => 'RUT'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ContratosBundle\Entity\RepresentanteLegal'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'contratosbundle_representante_legal';
    }
}
