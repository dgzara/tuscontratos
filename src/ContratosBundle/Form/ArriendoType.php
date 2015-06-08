<?php

namespace ContratosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArriendoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('arrendador_persona')
            ->add('arrendador_natural_sexo')
            ->add('arrendador_natural_nombres')
            ->add('arrendador_natural_apellido_paterno')
            ->add('arrendador_natural_apellido_materno')
            ->add('arrendador_natural_nacionalidad')
            ->add('arrendador_natural_estado_civil')
            ->add('arrendador_natural_profesion')
            ->add('arrendador_natural_rut')
            ->add('arrendador_natural_domicilio')
            ->add('arrendador_natural_comuna')
            ->add('arrendador_natural_region')
            ->add('arrendador_juridica_razon')
            ->add('arrendador_juridica_giro')
            ->add('arrendador_juridica_rut')
            ->add('arrendador_juridica_domicilio')
            ->add('arrendador_juridica_comuna')
            ->add('arrendador_juridica_region')
            ->add('arrendatario_persona')
            ->add('arrendatario_natural_sexo')
            ->add('arrendatario_natural_nombres')
            ->add('arrendatario_natural_apellido_paterno')
            ->add('arrendatario_natural_apellido_materno')
            ->add('arrendatario_natural_nacionalidad')
            ->add('arrendatario_natural_estado_civil')
            ->add('arrendatario_natural_profesion')
            ->add('arrendatario_natural_rut')
            ->add('arrendatario_natural_domicilio')
            ->add('arrendatario_natural_comuna')
            ->add('arrendatario_natural_region')
            ->add('arrendatario_juridica_razon')
            ->add('arrendatario_juridica_giro')
            ->add('arrendatario_juridica_rut')
            ->add('arrendatario_juridica_domicilio')
            ->add('arrendatario_juridica_comuna')
            ->add('arrendatario_juridica_region')
            ->add('propiedad_calle')
            ->add('propiedad_numero')
            ->add('propiedad_departamento')
            ->add('propiedad_villa')
            ->add('propiedad_region')
            ->add('propiedad_comuna')
            ->add('plazo_unidad')
            ->add('plazo_momento')
            ->add('plazo_prorroga')
            ->add('plazo_prorroga_tiempo')
            ->add('plazo_aviso')
            ->add('plazo_forma')
            ->add('plazo_carta')
            ->add('renta_monto')
            ->add('renta_unidad')
            ->add('renta_periodo')
            ->add('renta_tiempo')
            ->add('renta_dias')
            ->add('renta_medio_pago')
            ->add('renta_medio_efectivo')
            ->add('renta_medio_cheque')
            ->add('renta_medio_deposito_titular')
            ->add('renta_medio_deposito_tipo')
            ->add('renta_medio_deposito_numero')
            ->add('renta_medio_deposito_banco')
            ->add('renta_medio_deposito_envio')
            ->add('renta_medio_reajuste')
            ->add('renta_reajuste_periodo')
            ->add('renta_reajuste_forma')
            ->add('renta_mora_sancion')
            ->add('renta_mora_periodo')
            ->add('renta_mora_valor')
            ->add('renta_cobranza')
            ->add('renta_cobranza_plazo')
            ->add('renta_cobranza_notificacion')
            ->add('renta_cobranza_avaluo')
            ->add('entrega_fecha')
            ->add('entrega_inventario')
            ->add('restitucion_forma')
            ->add('restitucion_acreditacion')
            ->add('restitucion_visita_plazo')
            ->add('restitucion_visita_unidad')
            ->add('restitucion_inicio_plazo')
            ->add('restitucion_inicio_unidad')
            ->add('prohibicion_subarriendo')
            ->add('prohibicion_variaciones')
            ->add('prohibicion_utilizacion')
            ->add('prohibicion_retraso')
            ->add('prohibicion_perturbacion')
            ->add('prohibicion_agujeros')
            ->add('prohibicion_normativa')
            ->add('prohibicion_accion_ilegal')
            ->add('recision_pago')
            ->add('recision_unidad')
            ->add('recision_causal')
            ->add('recision_causal_descripcion')
            ->add('recision_unilateral')
            ->add('recision_unilateral_anticipacion')
            ->add('recision_unilateral_unidad')
            ->add('recision_unilateral_forma')
            ->add('garantia_deposito')
            ->add('garantia_forma')
            ->add('garantia_monto')
            ->add('garantia_dias_terminado')
            ->add('garantia_dias_pagado')
            ->add('garantia_unidad')
            ->add('aval')
            ->add('aval_sexo')
            ->add('aval_nombres')
            ->add('aval_apellido_paterno')
            ->add('aval_apellido_materno')
            ->add('aval_nacionalidad')
            ->add('aval_estado_civil')
            ->add('aval_profesion')
            ->add('aval_rut')
            ->add('aval_domicilio')
            ->add('aval_comuna')
            ->add('aval_region')
            ->add('correo')
            ->add('correo_arrendador')
            ->add('correo_arrendatario')
            ->add('personeria_arrendador_fecha')
            ->add('personeria_arrendador_notaria')
            ->add('personeria_arrendador_lugar')
            ->add('personeria_arrendatario_fecha')
            ->add('personeria_arrendatario_notaria')
            ->add('personeria_arrendatario_lugar')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ContratosBundle\Entity\Arriendo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'contratosbundle_arriendo';
    }
}
