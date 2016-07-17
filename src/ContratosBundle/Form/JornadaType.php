<?php

namespace ContratosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class JornadaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dia', 'choice', array('label' => 'Día de la semana', 'placeholder' => 'Seleccione una opción', 'required' => false, 'choices' => array(
                1 => "Lunes",
                2 => "Martes",
                3 => "Miércoles",
                4 => "Jueves",
                5 => "Viernes",
                6 => "Sábado",
                7 => "Domingo",
            )))
            ->add('inicio', 'collot_datetime', array('label' => ' ', 'required' => false,'pickerOptions' => array(
                'format' => 'hh:ii',
                'language' => 'es',
                'minView' => 0,
                'maxView' => 0,
                'autoclose' => true,
                'startView' => 0,
                'initialDate' => '09:00'
            )))
            ->add('fin', 'collot_datetime', array('label' => ' ', 'required' => false, 'pickerOptions' => array(
                'format' => 'hh:ii',
                'language' => 'es',
                'minView' => 0,
                'maxView' => 0,
                'autoclose' => true,
                'startView' => 0,
                'initialDate' => '19:00'
            )));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ContratosBundle\Entity\Jornada'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'contratosbundle_jornada';
    }
}
