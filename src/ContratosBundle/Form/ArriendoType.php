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
            ->add('arrendador_persona', null, array('label' => '¿Persona natural o juridica?'))
            ->add('arrendador_natural_sexo', 'choice', array('label' => 'Sexo', 'placeholder' => 'Seleccione una opción', 'choices' => array('Hombre' => 'Hombre', 'Mujer' => 'Mujer')))
            ->add('arrendador_natural_nombres', null, array('label' => 'Nombres'))
            ->add('arrendador_natural_apellido_paterno', null, array('label' => 'Apellido Paterno'))
            ->add('arrendador_natural_apellido_materno', null, array('label' => 'Apellido Materno'))
            ->add('arrendador_natural_nacionalidad', null, array('label' => 'Nacionalidad'))
            ->add('arrendador_natural_estado_civil', null, array('label' => 'Estado civil'))
            ->add('arrendador_natural_profesion', null, array('label' => 'Profesión u oficio'))
            ->add('arrendador_natural_rut', null, array('label' => 'RUT'))
            ->add('arrendador_natural_domicilio', null, array('label' => 'Domicilio'))
            ->add('arrendador_natural_region', null, array('label' => 'Región'))
            ->add('arrendador_natural_comuna', null, array('label' => 'Comuna'))
            ->add('arrendador_juridica_razon', null, array('label' => 'Razón social'))
            ->add('arrendador_juridica_giro', null, array('label' => 'Giro'))
            ->add('arrendador_juridica_rut', null, array('label' => 'RUT'))
            ->add('arrendador_juridica_domicilio', null, array('label' => 'Domicilio'))
            ->add('arrendador_juridica_region', null, array('label' => 'Región'))
            ->add('arrendador_juridica_comuna', null, array('label' => 'Comuna'))
            ->add('arrendatario_persona', null, array('label' => '¿Persona natural o juridica?'))
            ->add('arrendatario_natural_sexo', 'choice', array('label' => 'Sexo', 'placeholder' => 'Seleccione una opción', 'choices' => array('Hombre' => 'Hombre', 'Mujer' => 'Mujer')))
            ->add('arrendatario_natural_nombres', null, array('label' => '¿Persona natural o juridica?'))
            ->add('arrendatario_natural_apellido_paterno', null, array('label' => 'Apellido Paterno'))
            ->add('arrendatario_natural_apellido_materno', null, array('label' => 'Apellido Materno'))
            ->add('arrendatario_natural_nacionalidad', null, array('label' => 'Nacionalidad'))
            ->add('arrendatario_natural_estado_civil', null, array('label' => 'Estado civil'))
            ->add('arrendatario_natural_profesion', null, array('label' => 'Profesión u oficio'))
            ->add('arrendatario_natural_rut', null, array('label' => 'RUT'))
            ->add('arrendatario_natural_domicilio', null, array('label' => 'Domicilio'))
            ->add('arrendatario_natural_region', null, array('label' => 'Región'))
            ->add('arrendatario_natural_comuna', null, array('label' => 'Comuna'))
            ->add('arrendatario_juridica_razon', null, array('label' => 'Razón social'))
            ->add('arrendatario_juridica_giro', null, array('label' => 'Giro'))
            ->add('arrendatario_juridica_rut', null, array('label' => 'RUT'))
            ->add('arrendatario_juridica_domicilio', null, array('label' => 'Domicilio'))
            ->add('arrendatario_juridica_region', null, array('label' => 'Región'))
            ->add('arrendatario_juridica_comuna', null, array('label' => 'Comuna'))
            ->add('propiedad_calle', null, array('label' => 'Calle'))
            ->add('propiedad_numero', null, array('label' => 'Número'))
            ->add('propiedad_departamento', null, array('label' => 'Departamento o número de casa'))
            ->add('propiedad_villa', null, array('label' => 'Villa o población'))
            ->add('propiedad_region', null, array('label' => 'Región'))
            ->add('propiedad_comuna', null, array('label' => 'Comuna'))
            ->add('plazo_unidad', null, array('label' => 'Unidad de tiempo'))
            ->add('plazo_momento', null, array('label' => 'Momento en el que entra en vigencia el contrato'))
            ->add('plazo_prorroga', null, array('label' => 'Se prorroga tacitamente'))
            ->add('plazo_prorroga_tiempo', null, array('label' => 'Plazo de prorroga'))
            ->add('plazo_aviso', null, array('label' => 'Plazo de avisar el término del contrato'))
            ->add('plazo_forma', null, array('label' => 'Forma de Notificación del término del contrato'))
            ->add('plazo_carta', null, array('label' => 'Carta Certificada enviada al domicilio del arrendador señalado en la comparecencia u otro'))
            ->add('renta_monto', null, array('label' => 'Renta de arrendamiento'))
            ->add('renta_unidad', null, array('label' => 'Unidad de pago'))
            ->add('renta_periodo', null, array('label' => 'Período de pago'))
            ->add('renta_tiempo', null, array('label' => 'Tiempo en que se debe pagar'))
            ->add('renta_dias', null, array('label' => 'Días del mes en que debe pagarse'))
            ->add('renta_medio_pago', null, array('label' => 'Medios de pago'))
            ->add('renta_medio_efectivo', null, array('label' => 'en efectivo'))
            ->add('renta_medio_cheque', null, array('label' => 'Depósito con cheque'))
            ->add('renta_medio_deposito_titular', null, array('label' => 'Nombre del titular'))
            ->add('renta_medio_deposito_tipo', null, array('label' => 'Tipo de cuenta'))
            ->add('renta_medio_deposito_numero', null, array('label' => 'Número'))
            ->add('renta_medio_deposito_banco', null, array('label' => 'Banco'))
            ->add('renta_medio_deposito_envio', null, array('label' => 'Forma de envío de comprobante de pago'))
            ->add('renta_medio_reajuste', null, array('label' => 'Forma de reajuste'))
            ->add('renta_reajuste_periodo', null, array('label' => 'Periodo de reajuste'))
            ->add('renta_reajuste_forma', null, array('label' => 'Forma de reajuste'))
            ->add('renta_mora_sancion', null, array('label' => 'Sanción para la mora'))
            ->add('renta_mora_periodo', null, array('label' => 'Período de gracia'))
            ->add('renta_mora_valor', null, array('label' => 'Valor de la sanción para la mora'))
            ->add('renta_cobranza', null, array('label' => 'Multa por cobranza extrajudicial'))
            ->add('renta_cobranza_plazo', null, array('label' => 'Plazo de gracia para cobranza'))
            ->add('renta_cobranza_notificacion', null, array('label' => 'Forma de notificar acciones de cobranza judicial'))
            ->add('renta_cobranza_avaluo', null, array('label' => 'Avaluación anticipada de la cobranza judicial'))
            ->add('entrega_fecha', null, array('label' => 'Entrega del inmueble se realiza a la fecha del presente contrato'))
            ->add('entrega_inventario', null, array('label' => 'Se realizará inventario de los bienes'))
            ->add('restitucion_forma', null, array('label' => 'Forma de restitución del inmueble'))
            ->add('restitucion_acreditacion', null, array('label' => 'Acreditación del pago del servicios básicos'))
            ->add('restitucion_visita_plazo', null, array('label' => 'Plazo de visita habitantes del inmueble'))
            ->add('restitucion_visita_unidad', null, array('label' => 'Unidad de tiempo'))
            ->add('restitucion_inicio_plazo', null, array('label' => 'Plazo para iniciar reparaciones'))
            ->add('restitucion_inicio_unidad', null, array('label' => 'Unidad de tiempo'))
            ->add('prohibicion_subarriendo', null, array('label' => 'Subarrendar o transferir cualquier título el inmueble arrendado'))
            ->add('prohibicion_variaciones', null, array('label' => 'Hacer variaciones o transformaciones que afecten la estructura interna o externa del inmueble arrendado sin autorización por escrito del ARRENDADOR'))
            ->add('prohibicion_utilizacion', null, array('label' => 'Utilizar el inmueble con un fin distinto al que fue establecido en la cláusura primera del presente contrato'))
            ->add('prohibicion_retraso', null, array('label' => 'Retrasarse en el pago de las cuentas de servicios básicos (luz, agua potable, gas), o en los gastos comunes'))
            ->add('prohibicion_perturbacion', null, array('label' => 'Realizar cualquier acción que perturbe a los vecinos del inmueble, tales como ruidos molestos, u obras en el inmueble a horas inadecuadas, entre otras'))
            ->add('prohibicion_agujeros', null, array('label' => 'Hacer agujeros en las paredes o puertas'))
            ->add('prohibicion_normativa', null, array('label' => 'No cumplir con la normativa interna del condominio o edificio si corresponde'))
            ->add('prohibicion_accion_ilegal', null, array('label' => 'Ejecutar cualquier acción ilegal, o contraria al orden público, en el interior del inmueble'))
            ->add('recision_pago', null, array('label' => 'Retraso en el pago de la renta'))
            ->add('recision_unidad', null, array('label' => 'Unidad de tiempo'))
            ->add('recision_causal', null, array('label' => 'Agregar nueva causal de recisión del arrendador'))
            ->add('recision_causal_descripcion', null, array('label' => 'Cuál'))
            ->add('recision_unilateral', null, array('label' => '¿Puede terminarse el contrato unilateralmente sin expresión de causa?'))
            ->add('recision_unilateral_anticipacion', null, array('label' => 'Anticipación con que debe darse aviso en caso de recisión unilateral del contrato'))
            ->add('recision_unilateral_unidad', null, array('label' => 'Unidad de tiempo'))
            ->add('recision_unilateral_forma', null, array('label' => 'Forma de notificar la recisión del contrato. Carta Certificada enviada al domicilio del arrendador señalado en la comparecencia.'))
            ->add('garantia_deposito', null, array('label' => '¿Se deja depósito en garantía?'))
            ->add('garantia_forma', null, array('label' => 'Forma de hacer el depósito en garantía en la misma forma en que se realiza el pago de la renta, señalada en la clásura cuarta'))
            ->add('garantia_monto', null, array('label' => 'Monto del depósito en garantía'))
            ->add('garantia_dias_terminado', null, array('label' => 'Días después de terminado el contrato en que se debe restituir la garantía'))
            ->add('garantia_dias_pagado', null, array('label' => 'Días dentro de los cuales el arrendatario debe pagar el monto que corresponda pagar por reparaciones'))
            ->add('garantia_unidad', null, array('label' => 'Unidad de tiempo'))
            ->add('aval', null, array('label' => 'Se incluye aval'))
            ->add('aval_sexo', 'choice', array('label' => 'Sexo', 'placeholder' => 'Seleccione una opción', 'choices' => array('Hombre' => 'Hombre', 'Mujer' => 'Mujer')))
            ->add('aval_nombres', null, array('label' => 'Nombres'))
            ->add('aval_apellido_paterno', null, array('label' => 'Apellido paterno'))
            ->add('aval_apellido_materno', null, array('label' => 'Apellido materno'))
            ->add('aval_nacionalidad', null, array('label' => 'Nacionalidad'))
            ->add('aval_estado_civil', null, array('label' => 'Estado civil'))
            ->add('aval_profesion', null, array('label' => 'Profesión u oficio'))
            ->add('aval_rut', null, array('label' => 'RUT'))
            ->add('aval_domicilio', null, array('label' => 'Domicilio'))
            ->add('aval_region', null, array('label' => 'Región'))
            ->add('aval_comuna', null, array('label' => 'Comuna'))
            ->add('correo', null, array('label' => '¿Se incluye correo electrónico?'))
            ->add('correo_arrendador', null, array('label' => 'Correo electrónico del Arrendador'))
            ->add('correo_arrendatario', null, array('label' => 'Correo electrónico del Arrendatario'))
            ->add('personeria_arrendador_fecha', null, array('label' => 'Fecha'))
            ->add('personeria_arrendador_notaria', null, array('label' => 'Notaria'))
            ->add('personeria_arrendador_lugar', null, array('label' => 'Dirección'))
            ->add('personeria_arrendatario_fecha', null, array('label' => 'Fecha'))
            ->add('personeria_arrendatario_notaria', null, array('label' => 'Notaria'))
            ->add('personeria_arrendatario_lugar', null, array('label' => 'Dirección'))
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
