<?php

namespace ContratosBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RegionType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'choices' => array(
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
            )
        ));
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
