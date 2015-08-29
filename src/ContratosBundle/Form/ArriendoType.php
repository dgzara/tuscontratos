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
            ->add('arrendador_persona', 'choice', array('label' => 'Tipo de persona', 'expanded' => true, 'choices' => array('Natural' => 'Natural', 'Jurídica' => 'Jurídica')))
            ->add('arrendador_natural_sexo', 'choice', array('label' => 'Sexo', 'expanded' => true, 'choices' => array('Hombre' => 'Hombre', 'Mujer' => 'Mujer')))
            ->add('arrendador_natural_nombres', null, array('label' => 'Nombres'))
            ->add('arrendador_natural_apellido_paterno', null, array('label' => 'Apellido Paterno'))
            ->add('arrendador_natural_apellido_materno', null, array('label' => 'Apellido Materno'))
            ->add('arrendador_natural_nacionalidad', null, array('label' => 'Nacionalidad'))
            ->add('arrendador_natural_estado_civil', 'choice', array('label' => 'Estado civil', 'required' => false, 'placeholder' => 'Seleccione una opción', 'choices' => array('Soltero' => 'Soltero', 'Casado' => 'Casado', 'Divorciado' => 'Divorciado', 'Viudo' => 'Viudo')))
            ->add('arrendador_natural_profesion', null, array('label' => 'Profesión u oficio'))
            ->add('arrendador_natural_rut', null, array('label' => 'RUT'))
            ->add('arrendador_natural_domicilio', null, array('label' => 'Domicilio'))
            ->add('arrendador_natural_region', 'choice', array('label' => 'Región', 'required' => false, 'placeholder' => 'Seleccione una opción', 'choices' => array(
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
            ->add('arrendador_natural_comuna', 'entity', array('required' => false, 'class' => 'ContratosBundle:Comuna', 'label' => 'Comuna', 'placeholder' => 'Seleccione una opción'))
            ->add('arrendador_juridica_razon', null, array('label' => 'Razón social'))
            ->add('arrendador_juridica_giro', null, array('label' => 'Giro'))
            ->add('arrendador_juridica_rut', null, array('label' => 'RUT'))
            ->add('arrendador_juridica_domicilio', null, array('label' => 'Domicilio'))
            ->add('arrendador_juridica_region', 'choice', array('label' => 'Región', 'required' => false, 'placeholder' => 'Seleccione una opción', 'choices' => array(
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
            ->add('arrendador_juridica_comuna', 'entity', array('label' => 'Comuna', 'required' => false, 'class' => 'ContratosBundle:Comuna', 'placeholder' => 'Seleccione una opción'))
            ->add('arrendatario_persona', 'choice', array('label' => 'Tipo de persona', 'expanded' => true, 'choices' => array('Natural' => 'Natural', 'Jurídica' => 'Jurídica')))
            ->add('arrendatario_natural_sexo', 'choice', array('label' => 'Sexo', 'expanded' => true, 'choices' => array('Hombre' => 'Hombre', 'Mujer' => 'Mujer')))
            ->add('arrendatario_natural_nombres', null, array('label' => 'Nombres'))
            ->add('arrendatario_natural_apellido_paterno', null, array('label' => 'Apellido Paterno'))
            ->add('arrendatario_natural_apellido_materno', null, array('label' => 'Apellido Materno'))
            ->add('arrendatario_natural_nacionalidad', null, array('label' => 'Nacionalidad'))
            ->add('arrendatario_natural_estado_civil', 'choice', array('label' => 'Estado civil', 'placeholder' => 'Seleccione una opción', 'required' => false, 'choices' => array('Soltero' => 'Soltero', 'Casado' => 'Casado', 'Divorciado' => 'Divorciado', 'Viudo' => 'Viudo')))
            ->add('arrendatario_natural_profesion', null, array('label' => 'Profesión u oficio'))
            ->add('arrendatario_natural_rut', null, array('label' => 'RUT'))
            ->add('arrendatario_natural_domicilio', null, array('label' => 'Domicilio'))
            ->add('arrendatario_natural_region', 'choice', array('label' => 'Región', 'required' => false, 'placeholder' => 'Seleccione una opción', 'choices' => array(
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
            ->add('arrendatario_natural_comuna', 'entity', array('label' => 'Comuna', 'class' => 'ContratosBundle:Comuna', 'required' => false, 'placeholder' => 'Seleccione una opción'))
            ->add('arrendatario_juridica_razon', null, array('label' => 'Razón social'))
            ->add('arrendatario_juridica_giro', null, array('label' => 'Giro'))
            ->add('arrendatario_juridica_rut', null, array('label' => 'RUT'))
            ->add('arrendatario_juridica_domicilio', null, array('label' => 'Domicilio'))
            ->add('arrendatario_juridica_region', 'choice', array('label' => 'Región', 'required' => false, 'placeholder' => 'Seleccione una opción', 'choices' => array(
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
            ->add('arrendatario_juridica_comuna', 'entity', array('label' => 'Comuna', 'class' => 'ContratosBundle:Comuna', 'required' => false, 'placeholder' => 'Seleccione una opción'))
            ->add('propiedad_calle', null, array('label' => 'Calle'))
            ->add('propiedad_numero', null, array('label' => 'Número'))
            ->add('propiedad_departamento', null, array('label' => 'Departamento o número de casa'))
            ->add('propiedad_villa', null, array('label' => 'Villa o población'))
            ->add('propiedad_region', 'choice', array('label' => 'Región', 'required' => false, 'placeholder' => 'Seleccione una opción', 'choices' => array(
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
            ->add('propiedad_comuna', 'entity', array('label' => 'Comuna', 'class' => 'ContratosBundle:Comuna', 'required' => false, 'placeholder' => 'Seleccione una opción'))
            ->add('plazo_unidad', 'choice', array('label' => 'Unidad de tiempo', 'required' => false, 'placeholder' => 'Seleccione una opción', 'choices' => array('Dias' => 'Días', 'Semanas' => 'Semanas', 'Meses' => 'Meses')))
            ->add('plazo_momento', null, array('label' => 'Momento en el que entra en vigencia el contrato'))
            ->add('plazo_prorroga', 'choice', array('label' => 'Se prorroga tacitamente', 'expanded' => true, 'choices' => array('Sí' => 'Sí', 'No' => 'No')))
            ->add('plazo_prorroga_tiempo', null, array('label' => 'Plazo de prorroga'))
            ->add('plazo_aviso', null, array('label' => 'Plazo de avisar el término del contrato'))
            ->add('plazo_forma', null, array('label' => 'Forma de Notificación del término del contrato'))
            ->add('plazo_carta', null, array('label' => 'Carta Certificada enviada al domicilio del arrendador señalado en la comparecencia u otro'))
            ->add('renta_monto', null, array('label' => 'Renta de arrendamiento', 'required' => true))
            ->add('renta_unidad', 'choice', array('label' => 'Unidad de pago', 'expanded' => true, 'choices' => array('Unidad de Fomento' => 'Unidad de Fomento', 'Pesos' => 'Pesos', 'Dólares' => 'Dólares')))
            ->add('renta_periodo', null, array('label' => 'Período de pago'))
            ->add('renta_tiempo', null, array('label' => 'Tiempo en que se debe pagar'))
            ->add('renta_dias', null, array('label' => 'Días del mes en que debe pagarse'))
            ->add('renta_medio_pago', 'choice', array('label' => 'Medios de pago', 'expanded' => true, 'choices' => array('efectivo' => 'en efectivo', 'cheque' => 'con cheque', 'deposito' => 'mediante un depósito en Cuenta Corriente')))
            ->add('renta_medio_efectivo', null, array('label' => 'Monto'))
            ->add('renta_medio_cheque', null, array('label' => 'Depósito con cheque'))
            ->add('renta_medio_deposito_titular', null, array('label' => 'Nombre del titular'))
            ->add('renta_medio_deposito_tipo', 'choice', array('label' => 'Tipo de cuenta', 'placeholder' => 'Seleccione una opción', 'required' => false,'choices' => array('Corriente' => 'Corriente', 'Vista' => 'Vista', 'Ahorro' => 'Ahorro')))
            ->add('renta_medio_deposito_numero', null, array('label' => 'Número'))
            ->add('renta_medio_deposito_banco', 'choice', array('label' => 'Banco', 'placeholder' => 'Seleccione una opción','required' => false))
            ->add('renta_medio_deposito_envio', null, array('label' => 'Forma de envío de comprobante de pago'))
            ->add('renta_medio_reajuste', 'choice', array('label' => 'Forma de reajuste', 'expanded' => true, 'choices' => array('No' => 'No se reajustará', 'Si' => 'Si se reajustará'), 'empty_data'  => 'No'))
            ->add('renta_reajuste_periodo', null, array('label' => 'Periodo de reajuste'))
            ->add('renta_reajuste_forma', null, array('label' => 'Forma de reajuste'))
            ->add('renta_mora_sancion', 'choice', array('label' => 'Sanción para la mora', 'expanded' => true, 'choices' => array('No' => 'No habrá sanción', 'Si' => 'Si habrá sanción'), 'empty_data'  => 'No'))
            ->add('renta_mora_periodo', null, array('label' => 'Período de gracia'))
            ->add('renta_mora_valor', null, array('label' => 'Valor de la sanción para la mora'))
            ->add('renta_cobranza', 'choice', array('label' => 'Multa por cobranza extrajudicial', 'expanded' => true, 'choices' => array('No' => 'No', 'Sí' => 'Sí')))
            ->add('renta_cobranza_plazo', null, array('label' => 'Plazo de gracia para cobranza'))
            ->add('renta_cobranza_notificacion', 'choice', array('label' => 'Forma de notificar acciones de cobranza judicial', 'required' => false, 'placeholder' => 'Seleccione una opción'))
            ->add('renta_cobranza_avaluo', 'choice', array('label' => 'Avaluación anticipada de la cobranza judicial', 'required' => false, 'placeholder' => 'Seleccione una opción'))
            ->add('entrega_fecha', null, array('label' => 'Entrega del inmueble se realiza a la fecha del presente contrato'))
            ->add('entrega_inventario', 'choice', array('label' => 'Se realizará inventario de los bienes', 'expanded' => true, 'choices' => array('Sí' => 'Sí', 'No' => 'No'), 'empty_data'  => 'No'))
            ->add('restitucion_forma', null, array('label' => 'Forma de restitución del inmueble'))
            ->add('restitucion_acreditacion', 'choice', array('label' => 'Acreditación del pago del servicios básicos', 'choices' => array('No' => 'No', 'Sí' => 'Sí')))
            ->add('restitucion_visita_plazo', null, array('label' => 'Plazo de visita habitantes del inmueble'))
            ->add('restitucion_visita_unidad', 'choice', array('label' => 'Unidad de tiempo', 'placeholder' => 'Seleccione una opción', 'required' => false, 'choices' => array('Dias' => 'Días', 'Semanas' => 'Semanas', 'Meses' => 'Meses')))
            ->add('restitucion_inicio_plazo', null, array('label' => 'Plazo para iniciar reparaciones'))
            ->add('restitucion_inicio_unidad', 'choice', array('label' => 'Unidad de tiempo', 'placeholder' => 'Seleccione una opción', 'required' => false, 'choices' => array('Dias' => 'Días', 'Semanas' => 'Semanas', 'Meses' => 'Meses')))
            ->add('prohibicion_subarriendo', null, array('label' => 'Subarrendar o transferir cualquier título el inmueble arrendado', 'required' => false))
            ->add('prohibicion_variaciones', null, array('label' => 'Hacer variaciones o transformaciones que afecten la estructura interna o externa del inmueble arrendado sin autorización por escrito del ARRENDADOR', 'required' => false))
            ->add('prohibicion_utilizacion', null, array('label' => 'Utilizar el inmueble con un fin distinto al que fue establecido en la cláusura primera del presente contrato', 'required' => false))
            ->add('prohibicion_retraso', null, array('label' => 'Retrasarse en el pago de las cuentas de servicios básicos (luz, agua potable, gas), o en los gastos comunes', 'required' => false))
            ->add('prohibicion_perturbacion', null, array('label' => 'Realizar cualquier acción que perturbe a los vecinos del inmueble, tales como ruidos molestos, u obras en el inmueble a horas inadecuadas, entre otras', 'required' => false))
            ->add('prohibicion_agujeros', null, array('label' => 'Hacer agujeros en las paredes o puertas', 'required' => false))
            ->add('prohibicion_normativa', null, array('label' => 'No cumplir con la normativa interna del condominio o edificio si corresponde', 'required' => false))
            ->add('prohibicion_accion_ilegal', null, array('label' => 'Ejecutar cualquier acción ilegal, o contraria al orden público, en el interior del inmueble', 'required' => false))
            ->add('recision_pago', null, array('label' => 'Retraso en el pago de la renta'))
            ->add('recision_unidad', 'choice', array('label' => 'Unidad de tiempo', 'placeholder' => 'Seleccione una opción', 'required' => false, 'choices' => array('Dias' => 'Días', 'Semanas' => 'Semanas', 'Meses' => 'Meses')))
            ->add('recision_causal', 'choice', array('label' => 'Agregar nueva causal de recisión del arrendador', 'choices' => array('No' => 'No', 'Sí' => 'Sí')))
            ->add('recision_causal_descripcion', null, array('label' => 'Cuál'))
            ->add('recision_unilateral', 'choice', array('label' => '¿Puede terminarse el contrato unilateralmente sin expresión de causa?', 'expanded' => true, 'choices' => array('Sí' => 'Sí', 'No' => 'No'), 'empty_data'  => 'No'))
            ->add('recision_unilateral_anticipacion', null, array('label' => 'Anticipación con que debe darse aviso en caso de recisión unilateral del contrato'))
            ->add('recision_unilateral_unidad', 'choice', array('label' => 'Unidad de tiempo', 'required' => false, 'choices' => array('Dias' => 'Días', 'Semanas' => 'Semanas', 'Meses' => 'Meses')))
            ->add('recision_unilateral_forma', null, array('label' => 'Forma de notificar la recisión del contrato. Carta Certificada enviada al domicilio del arrendador señalado en la comparecencia.'))
            ->add('garantia_deposito', 'choice', array('label' => '¿Se deja depósito en garantía?', 'expanded' => true, 'choices' => array('Sí' => 'Sí', 'No' => 'No'), 'empty_data'  => 'No'))
            ->add('garantia_forma', null, array('label' => 'Forma de hacer el depósito en garantía en la misma forma en que se realiza el pago de la renta, señalada en la clásura cuarta'))
            ->add('garantia_monto', null, array('label' => 'Monto del depósito en garantía'))
            ->add('garantia_dias_terminado', null, array('label' => 'Días después de terminado el contrato en que se debe restituir la garantía'))
            ->add('garantia_dias_pagado', null, array('label' => 'Días dentro de los cuales el arrendatario debe pagar el monto que corresponda pagar por reparaciones'))
            ->add('garantia_unidad', 'choice', array('label' => 'Unidad de tiempo', 'required' => false, 'placeholder' => 'Seleccione una opción', 'choices' => array('Dias' => 'Días', 'Semanas' => 'Semanas', 'Meses' => 'Meses')))
            ->add('aval', 'choice', array('label' => 'Se incluye aval', 'expanded' => true, 'choices' => array('Sí' => 'Sí', 'No' => 'No'), 'empty_data'  => 'No'))
            ->add('aval_sexo', 'choice', array('label' => 'Sexo', 'expanded' => true, 'choices' => array('Hombre' => 'Hombre', 'Mujer' => 'Mujer')))
            ->add('aval_nombres', null, array('label' => 'Nombres'))
            ->add('aval_apellido_paterno', null, array('label' => 'Apellido paterno'))
            ->add('aval_apellido_materno', null, array('label' => 'Apellido materno'))
            ->add('aval_nacionalidad', null, array('label' => 'Nacionalidad'))
            ->add('aval_estado_civil', 'choice', array('label' => 'Estado civil', 'required' => false, 'placeholder' => 'Seleccione una opción', 'choices' => array('Soltero' => 'Soltero', 'Casado' => 'Casado', 'Divorciado' => 'Divorciado', 'Viudo' => 'Viudo')))
            ->add('aval_profesion', null, array('label' => 'Profesión u oficio'))
            ->add('aval_rut', null, array('label' => 'RUT'))
            ->add('aval_domicilio', null, array('label' => 'Domicilio'))
            ->add('aval_region', 'choice', array('label' => 'Región', 'required' => false, 'placeholder' => 'Seleccione una opción', 'choices' => array(
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
            ->add('aval_comuna', 'entity', array('label' => 'Comuna', 'class' => 'ContratosBundle:Comuna', 'required' => false, 'placeholder' => 'Seleccione una opción'))
            ->add('correo', 'choice', array('label' => '¿Se incluye correo electrónico?', 'expanded' => true, 'choices' => array('Sí' => 'Sí', 'No' => 'No'), 'empty_data'  => 'No'))
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
