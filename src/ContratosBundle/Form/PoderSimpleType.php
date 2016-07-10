<?php

namespace ContratosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PoderSimpleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fecha', 'collot_datetime', array('label' => 'Fecha','pickerOptions' => array(
                'format' => 'dd/mm/yyyy',
                'language' => 'es',
                'minView' => 'month',
                'autoclose' => true,
                'todayHighlight' => true
            )))
            ->add('ciudad', null, array('label' => 'Ciudad'))
            ->add('otorgante_persona', 'choice', array('label' => 'Tipo de persona', 'expanded' => true, 'choices' => array('Natural' => 'Natural', 'Jurídica' => 'Jurídica')))
            ->add('otorgante_natural_sexo', 'choice', array('label' => 'Sexo', 'expanded' => true, 'choices' => array('Hombre' => 'Hombre', 'Mujer' => 'Mujer')))
            ->add('otorgante_natural_nombres', null, array('label' => 'Nombres'))
            ->add('otorgante_natural_apellido_paterno', null, array('label' => 'Apellido Paterno'))
            ->add('otorgante_natural_apellido_materno', null, array('label' => 'Apellido Materno'))
            ->add('otorgante_natural_nacionalidad', null, array('label' => 'Nacionalidad'))
            ->add('otorgante_natural_estado_civil', 'choice', array('label' => 'Estado civil', 'required' => false, 'placeholder' => 'Seleccione una opción', 'choices' => array('Soltero' => 'Soltero', 'Casado' => 'Casado', 'Divorciado' => 'Divorciado', 'Viudo' => 'Viudo')))
            ->add('otorgante_natural_profesion', null, array('label' => 'Profesión u oficio'))
            ->add('otorgante_natural_rut', null, array('label' => 'RUT'))
            ->add('otorgante_natural_domicilio', null, array('label' => 'Domicilio'))
            ->add('otorgante_natural_region', 'choice', array('label' => 'Región', 'required' => false, 'placeholder' => 'Seleccione una opción', 'choices' => array(
                'XV de Arica y Parinacota' => 'XV de Arica y Parinacota',
                'I de Tarapacá' => 'I de Tarapacá',
                'II de Antofagasta' => 'II de Antofagasta',
                'III de Atacama' => 'III de Atacama',
                'IV de Coquimbo' => 'IV de Coquimbo',
                'V de Valparaíso' => 'V de Valparaíso',
                'VI del Libertador General Bernardo O\'Higgins' => 'VI del Libertador General Bernardo O\'Higgins',
                'VII del Maule' => 'VII del Maule',
                'VIII del Bío Bío' => 'VIII del Bío Bío',
                'IX de la Araucanía' => 'IX de la Araucanía',
                'XIV de los Ríos' => 'XIV de los Ríos',
                'X de los Lagos' => 'X de los Lagos',
                'XI Aisén del General Carlos Ibáñez del Campo' => 'XI Aisén del General Carlos Ibáñez del Campo',
                'XII de Magallanes y Antártica Chilena' => 'XII de Magallanes y Antártica Chilena',
                'Metropolitana de Santiago' => 'Metropolitana de Santiago',
            )))
            ->add('otorgante_natural_comuna', 'entity', array('required' => false, 'class' => 'ContratosBundle:Comuna', 'label' => 'Comuna', 'placeholder' => 'Seleccione una opción'))
            ->add('otorgante_juridica_razon', null, array('label' => 'Razón social'))
            ->add('otorgante_juridica_giro', null, array('label' => 'Giro'))
            ->add('otorgante_juridica_rut', null, array('label' => 'RUT'))
            ->add('otorgante_juridica_domicilio', null, array('label' => 'Domicilio'))
            ->add('otorgante_juridica_region', 'choice', array('label' => 'Región', 'required' => false, 'placeholder' => 'Seleccione una opción', 'choices' => array(
                'XV de Arica y Parinacota' => 'XV de Arica y Parinacota',
                'I de Tarapacá' => 'I de Tarapacá',
                'II de Antofagasta' => 'II de Antofagasta',
                'III de Atacama' => 'III de Atacama',
                'IV de Coquimbo' => 'IV de Coquimbo',
                'V de Valparaíso' => 'V de Valparaíso',
                'VI del Libertador General Bernardo O\'Higgins' => 'VI del Libertador General Bernardo O\'Higgins',
                'VII del Maule' => 'VII del Maule',
                'VIII del Bío Bío' => 'VIII del Bío Bío',
                'IX de la Araucanía' => 'IX de la Araucanía',
                'XIV de los Ríos' => 'XIV de los Ríos',
                'X de los Lagos' => 'X de los Lagos',
                'XI Aisén del General Carlos Ibáñez del Campo' => 'XI Aisén del General Carlos Ibáñez del Campo',
                'XII de Magallanes y Antártica Chilena' => 'XII de Magallanes y Antártica Chilena',
                'Metropolitana de Santiago' => 'Metropolitana de Santiago',
            )))
            ->add('otorgante_juridica_comuna', 'entity', array('label' => 'Comuna', 'required' => false, 'class' => 'ContratosBundle:Comuna', 'placeholder' => 'Seleccione una opción'))
            ->add('otorgante_juridica_sexo', 'choice', array('label' => 'Sexo', 'expanded' => true, 'choices' => array('Hombre' => 'Hombre', 'Mujer' => 'Mujer')))
            ->add('otorgante_juridica_nombres', null, array('label' => 'Nombres'))
            ->add('otorgante_juridica_apellido_paterno', null, array('label' => 'Apellido Paterno'))
            ->add('otorgante_juridica_apellido_materno', null, array('label' => 'Apellido Materno'))
            ->add('otorgante_juridica_nacionalidad', null, array('label' => 'Nacionalidad'))
            ->add('otorgante_juridica_cargo', null, array('label' => 'Cargo'))
            ->add('otorgante_juridica_persona_rut', null, array('label' => 'RUT'))
            ->add('recibido_natural_sexo', 'choice', array('label' => 'Sexo', 'expanded' => true, 'choices' => array('Hombre' => 'Hombre', 'Mujer' => 'Mujer')))
            ->add('recibido_natural_nombres', null, array('label' => 'Nombres'))
            ->add('recibido_natural_apellido_paterno', null, array('label' => 'Apellido Paterno'))
            ->add('recibido_natural_apellido_materno', null, array('label' => 'Apellido Materno'))
            ->add('recibido_natural_rut', null, array('label' => 'RUT'))
            ->add('motivo', null, array('label' => 'Indique el trámite o gestión para el que el otorga el poder'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ContratosBundle\Entity\PoderSimple'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'contratosbundle_podersimple';
    }
}
