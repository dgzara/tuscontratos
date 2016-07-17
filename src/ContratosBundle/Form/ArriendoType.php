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
            ->add('fecha', 'collot_datetime', array('label' => 'Fecha','pickerOptions' => array(
                'format' => 'dd/mm/yyyy',
                'language' => 'es',
                'minView' => 'month',
                'autoclose' => true,
                'todayHighlight' => true
            )))
            ->add('ciudad', null, array('label' => 'Ciudad'))
            ->add('arrendador_persona', 'choice', array('label' => 'Tipo de persona', 'expanded' => true, 'choices' => array('Natural' => 'Natural', 'Jurídica' => 'Jurídica')))
            ->add('arrendador_natural_sexo', 'choice', array('label' => 'Sexo', 'expanded' => true, 'attr' => array('class' => 'options_inline'), 'choices' => array('Hombre' => 'Hombre', 'Mujer' => 'Mujer')))
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
            ->add('arrendador_juridica_representante', 'collection', array(
                'type' => new RepresentanteLegalType(),
                'allow_add'    => true,
                'allow_delete' => true,
            ))
            ->add('arrendatario_persona', 'choice', array('label' => 'Tipo de persona', 'expanded' => true, 'choices' => array('Natural' => 'Natural', 'Jurídica' => 'Jurídica')))
            ->add('arrendatario_natural_sexo', 'choice', array('label' => 'Sexo', 'expanded' => true, 'attr' => array('class' => 'options_inline'), 'choices' => array('Hombre' => 'Hombre', 'Mujer' => 'Mujer')))
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
            ->add('arrendatario_juridica_representante', 'collection', array(
                'type' => new RepresentanteLegalType(),
                'allow_add'    => true,
                'allow_delete' => true,
            ))
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
            ->add('propiedad_proposito', 'choice', array('label' => 'Fin o con que objeto se arrienda el inmueble', 'expanded' => true, 'choices' => array(
                'Casa o lugar de habitación' => 'Casa o lugar de habitación', 
                'Local comercial' => 'Local comercial',
                'Oficina' => 'Oficina',
                'Lugar para instalar una industria o faena' => 'Lugar para instalar una industria o faena',
                'Otro' => 'Otro'
            )))
            ->add('propiedad_proposito_otro', null, array('label' => ''))
            ->add('plazo_cantidad', 'choice', array('label' => 'Duración del arriendo', 'placeholder' => 'Seleccione una opción', 'choices' => array(
                "1 mes" => "1 mes",
                "6 meses" => "6 meses",
                "1 año" => "12 meses",
                "13 meses" => "13 meses",
                "18 meses" => "18 meses",
                "2 años" => "2 años",
                "3 años" => "3 años",
                "4 años" => "4 años",
                "5 años" => "5 años",
                "Indefinido" => "Indefinido"
            )))
            ->add('plazo_momento', 'choice', array('label' => '¿Desde cuándo se arrendará la propiedad?', 'expanded' => true, 'choices' => array(
                'La fecha del presente contrato' => 'La fecha del presente contrato', 
                'Otro' => 'Desde otra fecha'
            )))
            ->add('plazo_momento_fecha', 'collot_datetime', array('label' => 'Seleccione la fecha', 'pickerOptions' => array(
                'format' => 'dd/mm/yyyy',
                'language' => 'es',
                'minView' => 'month',
                'autoclose' => true,
                'todayHighlight' => true
            )))
            ->add('plazo_duracion_contrato', 'collot_datetime', array('label' => '¿Hasta cuándo durará el contrato?', 'pickerOptions' => array(
                'format' => 'dd/mm/yyyy',
                'language' => 'es',
                'minView' => 'month',
                'autoclose' => true,
                'todayHighlight' => true
            )))
            ->add('plazo_prorroga', 'choice', array('label' => '¿Se renueva automáticamente el contrato al vencerse el plazo?', 'expanded' => true, 'attr' => array('class' => 'options_inline'), 'choices' => array(1 => 'Sí', 0 => 'No')))
            ->add('plazo_prorroga_tiempo', 'choice', array('label' => '¿Por cuanto tiempo se renueva?', 'placeholder' => 'Seleccione una opción', 'choices' => array(
                "1 mes" => "1 mes",
                "6 meses" => "6 meses",
                "1 año" => "12 meses",
                "13 meses" => "13 meses",
                "18 meses" => "18 meses",
                "2 años" => "2 años",
                "3 años" => "3 años",
                "4 años" => "4 años",
                "5 años" => "5 años"
            )))
            ->add('plazo_aviso', 'choice', array('label' => '¿Con cuánto tiempo de anticipación tiene que avisar una parte a la otra que no quiere que se renueve el contrato?', 'placeholder' => 'Seleccione una opción', 'choices' => array(
                "15 días" => "15 días",
                "1 mes" => "1 mes",
                "2 meses" => "2 meses",
                "3 meses" => "3 meses",
                "3 meses" => "6 meses",
            )))
            ->add('plazo_forma', 'choice', array('label' => 'Forma de Notificación del término del contrato', 'required' => false, 'placeholder' => 'Seleccione una opción', 'choices' => array(
                'Carta Certificada enviada al domicilio del arrendador señalado en la comparecencia' => 
                'Carta Certificada enviada al domicilio del arrendador señalado en la comparecencia', 
                'Correo electrónico' => 'Correo electrónico', 
                'Otro' => 'Otro'
            )))
            ->add('plazo_carta', null, array('label' => 'Indique la forma de notificación', 'required' => false))
            ->add('renta_monto', null, array('label' => ' ¿Cuál es el monto del arriendo? ', 'required' => true, 'attr' => array('placeholder' => 'Ingrese el monto')))
            ->add('renta_unidad', 'choice', array('label' => 'El arriendo, ¿En que se paga?', 'required' => false, 'placeholder' => 'Seleccione una opción', 'choices' => array('Unidad de Fomento' => 'Unidad de Fomento', 'Pesos' => 'Pesos', 'Dólares' => 'Dólares')))
            ->add('renta_periodo', 'choice', array('label' => 'Período de pago', 'placeholder' => 'Seleccione una opción', 'choices' => array(
                'mensualmente' => 'mensualmente', 
                'bimensualmente' => 'bimensualmente',
                'trimestralmente' => 'trimestralmente', 
                'semestralmente' => 'semestralmente', 
                'anualmente' => 'anualmente'
            )))
            ->add('renta_tiempo', 'choice', array('label' => '¿El arriendo se paga antes de que empiece el mes en que se va a usar el bien, o después?', 'required' => false, 'placeholder' => 'Seleccione una opción', 'choices' => array(
                'Por anticipado' => 'Por anticipado', 
                'Por período vencido' => 'Por período vencido', 
            )))
            ->add('renta_dias_inicio', null, array('label' => 'Días del mes en que debe pagarse', 'required' => false))
            ->add('renta_dias_fin', null, array('label' => '', 'required' => false))
            ->add('renta_medio_pago', 'choice', array('label' => 'Medios de pago', 'required' => false, 'placeholder' => 'Seleccione una opción', 'choices' => array('efectivo' => 'en efectivo', 'cheque' => 'con cheque', 'deposito' => 'mediante un depósito en Cuenta Corriente')))
            ->add('renta_medio_efectivo_entrega', 'choice', array('label' => '¿Dónde se debe entregar el dinero?', 'expanded' => true, 'choices' => array(
                'domicilio' => 'Domicilio del arrendador', 
                'Otro' => 'Otro'
            )))
            ->add('renta_medio_efectivo_entrega_otro', null, array('label' => 'Indique la forma de entrega'))
            ->add('renta_medio_cheque', 'choice', array('label' => '¿Cómo debe ser el cheque?', 'expanded' => true, 'choices' => array(
                'abierto' => 'Abierto', 
                'nominativo' => 'Nominativo a nombre del arrendador',
                'otro' => 'Otro'
            )))
            ->add('renta_medio_cheque_otro', null, array('label' => 'Indique cómo debe ser el cheque'))
            ->add('renta_medio_deposito_titular', null, array('label' => 'Nombre del titular'))
            ->add('renta_medio_deposito_tipo', 'choice', array('label' => 'Tipo de cuenta', 'placeholder' => 'Seleccione una opción', 'required' => false,'choices' => array('Corriente' => 'Corriente', 'Vista' => 'Vista', 'Ahorro' => 'Ahorro')))
            ->add('renta_medio_deposito_numero', null, array('label' => 'Número'))
            ->add('renta_medio_deposito_banco', 'choice', array('label' => 'Banco', 'placeholder' => 'Seleccione una opción','required' => false))
            ->add('renta_medio_deposito_envio', 'choice', array('label' => '¿Dónde debe enviar el arrendatario el comprobante de pago?', 'expanded' => true, 'choices' => array(
                'direccion' => 'A la dirección del arrendador señalada en este contrato', 
                'email' => 'Al correo electrónico',
                'otro' => 'Otro'
            )))
            ->add('renta_medio_deposito_envio_otro', null, array('label' => 'Indique la dirección de envío'))
            ->add('renta_medio_reajuste', 'choice', array('label' => '¿El monto de arriendo, se reajustará con el paso del tiempo?', 'expanded' => true, 'choices' => array(0 => 'No se reajustará', 1 => 'Si se reajustará'), 'empty_data'  => 'No'))
            ->add('renta_reajuste_periodo', 'choice', array('label' => '¿Cada cuanto se hará el reajuste?', 'placeholder' => 'Seleccione una opción', 'choices' => array('anualmente' => 'anualmente', 'semestralmente' => 'semestralmente', 'mensualmente' => 'mensualmente')))
            ->add('renta_reajuste_forma', 'choice', array('label' => '¿Cómo se hará el reajuste?', 'required' => false, 'placeholder' => 'Seleccione una opción', 'choices' => array(
                'ipc' => 'Por la variación del Índice de Precios del Consumidor', 
                'otro' => 'Otro', 
            )))
            ->add('renta_reajuste_forma_otro', null, array('label' => 'Indique la forma de reajuste'))
            ->add('renta_mora_sancion', 'choice', array('label' => 'Si el arrendatario se atrasa en pagar la renta, ¿Habrá una multa por el retraso?', 'expanded' => true, 'choices' => array(0 => 'No habrá sanción', 1 => 'Si habrá sanción'), 'empty_data'  => 'No'))
            ->add('renta_mora_periodo', 'choice', array('label' => 'En el caso de haber sanción por atrasarse en el pago, ¿Cuánto tiempo después de que se acaba el plazo para que el arrendatario pague el arriendo (se constituya en mora), se empieza a cobrar la multa? ', 'placeholder' => 'Seleccione una opción', 'choices' => array(
                "1 mes" => "1 mes",
                "10 días" => "10 días",
                "15 días" => "15 días",
                "2 meses" => "2 meses",
            )))
            ->add('renta_mora_valor', 'choice', array('label' => '¿De cuánto será la multa?', 'placeholder' => 'Seleccione una opción', 'choices' => array(
                "1" => "1% del valor de la renta mensual por día de atraso",
                "3" => "3% del valor de la renta mensual por día de atraso",
                "5" => "5% del valor de la renta mensual por día de atraso",
                "otro" => "Otro",
            )))
            ->add('renta_mora_valor_otro', null, array('label' => 'Valor de la sanción para la mora'))
            ->add('renta_cobranza', 'choice', array('label' => 'Multa por cobranza extrajudicial', 'expanded' => true, 'attr' => array('class' => 'options_inline'), 'choices' => array(0 => 'No', 1 => 'Sí')))
            ->add('renta_cobranza_plazo', null, array('label' => 'Plazo de gracia para cobranza'))
            ->add('renta_cobranza_notificacion', 'choice', array('label' => 'Forma de notificar acciones de cobranza judicial', 'required' => false, 'placeholder' => 'Seleccione una opción'))
            ->add('renta_cobranza_avaluo', 'choice', array('label' => 'Avaluación anticipada de la cobranza judicial', 'required' => false, 'placeholder' => 'Seleccione una opción'))
            ->add('entrega_fecha', 'collot_datetime', array('label' => 'Entrega del inmueble se realiza a la fecha del presente contrato','pickerOptions' => array(
                'format' => 'dd/mm/yyyy',
                'language' => 'es',
                'minView' => 'month',
                'autoclose' => true,
                'todayHighlight' => true
            )))
            ->add('entrega_inventario', 'choice', array('label' => 'Se realizará inventario de los bienes', 'expanded' => true, 'attr' => array('class' => 'options_inline'), 'choices' => array(1 => 'Sí', 0 => 'No'), 'empty_data'  => 'No'))
            
            ->add('obligacion_arrendador_pagar', 'checkbox', array('label' => 'Pagar oportunamente la renta de arrendamiento', 'required' => false))
            ->add('obligacion_arrendador_finalidad', 'checkbox', array('label' => 'Usar el inmueble de acuerdo a la finalidad por la que fue arrendado', 'required' => false))
            ->add('obligacion_arrendador_estado', 'checkbox', array('label' => 'Mantener el inmueble en buen estado', 'required' => false))
            ->add('obligacion_arrendador_responder', 'checkbox', array('label' => 'Responder al ARRENDADOR en caso de daños', 'required' => false))
            ->add('obligacion_arrendador_agua', 'checkbox', array('label' => 'Pagar oportunamente las cuentas de agua potable, energía eléctrica, gas y telefonía', 'required' => false))
            ->add('obligacion_arrendador_gastos', 'checkbox', array('label' => 'Pagar oportunamente los gastos comunes, si corresponde', 'required' => false))
            ->add('obligacion_arrendador_subarrendar', 'checkbox', array('label' => 'No subarrendar el inmueble', 'required' => false))
            ->add('obligacion_arrendador_devolver', 'checkbox', array('label' => 'Devolver el inmueble al ARRENDADOR en la fecha que corresponda', 'required' => false))
            ->add('obligacion_arrendador_otro', 'checkbox', array('label' => 'Otro', 'required' => false))
            ->add('obligacion_arrendador_otro_texto', null, array('label' => 'Indique otras obligaciones'))
            ->add('obligacion_arrendatario_garantia', 'checkbox', array('label' => 'Garantizar al arrendatario que podrá usar el inmueble arrendado libre de toda molestia', 'required' => false))
            ->add('obligacion_arrendatario_contribuciones', 'checkbox', array('label' => 'Pagar las contribuciones ', 'required' => false))
            ->add('obligacion_arrendatario_reparacion', 'checkbox', array('label' => 'Reparar los daños que se produzcan por el paso del tiempo o fuerza mayor ', 'required' => false))
            ->add('obligacion_arrendatario_otro', 'checkbox', array('label' => 'Otro', 'required' => false))
            ->add('obligacion_arrendatario_otro_texto', null, array('label' => 'Indique otras obligaciones'))
            ->add('termino_arrendador_primero', 'checkbox', array('label' => 'Usa el inmueble para un fin ilicito.', 'required' => false))
            ->add('termino_arrendador_segundo', 'checkbox', array('label' => 'Infringe cualquiera de las obligaciones contraídas por ella en este contrato, en especial, las señaladas en la clausula sexta, a excepción de la obligación de pagar oportunamente la renta de arrendamiento.', 'required' => false))
            ->add('termino_arrendador_otro', 'checkbox', array('label' => 'Otro motivo', 'required' => false))
            ->add('termino_arrendador_otro_texto', null, array('label' => 'Indique otros motivos'))
            ->add('termino_arrendatario_primero', 'checkbox', array('label' => 'EL ARRENDATARIO fuese molestado en el goce del inmueble, como por ejemplo, cuando fuese notificado de una orden judicial que lo obliga a abandonar el inmueble arrendado', 'required' => false))
            ->add('termino_arrendatario_segundo', 'checkbox', array('label' => 'Por culpa de reparaciones que EL ARRENDADOR no ha hecho, estando obligado a hacerlas, no puede usar el BIEN RAÍZ para el propósito que lo arrendó', 'required' => false))
            ->add('termino_arrendatario_otro', 'checkbox', array('label' => 'Otro motivo', 'required' => false))
            ->add('termino_arrendatario_otro_texto', null, array('label' => 'Indique otros motivos'))
            ->add('garantia_deposito', 'choice', array('label' => '¿El arrendador deja depósito en garantía?', 'expanded' => true, 'attr' => array('class' => 'options_inline'), 'choices' => array(1 => 'Sí', 0 => 'No'), 'empty_data'  => 'No'))
            ->add('garantia_forma', 'choice', array('label' => '¿Como entrega el arrendatario el depósito en garantía?', 'placeholder' => 'Seleccione una opción', 'choices' => array(
                "En efectivo" => "En efectivo",
                "En la misma forma en que se realiza el pago de la renta" => "En la misma forma en que se realiza el pago de la renta",
                "Con una transferencia electrónica a la cuenta del arrendador" => "Con una transferencia electrónica a la cuenta del arrendador",
                "Otro" => "Otro",
            )))
            ->add('garantia_forma_otro', null, array('label' => 'Indique la forma del depósito'))
            ->add('garantia_monto', 'choice', array('label' => '¿Cuanto es el monto del depósito en garantía?', 'placeholder' => 'Seleccione una opción', 'choices' => array(
                "Equivalente a una renta de arrendamiento" => "Equivalente a una renta de arrendamiento",
                "Otro" => "Otro",
            )))
            ->add('garantia_monto_otro', null, array('label' => 'Indique el monto'))            
            ->add('garantia_dias_terminado', 'choice', array('label' => '¿Cuando el arrendador debe devolver el depósito en garantía?', 'placeholder' => 'Seleccione una opción', 'choices' => array(
                "al momento" => "al momento de terminarse el contrato de arriendo",
                "3 días" => "5 días después de que se termina el presente contrato de arriendo",
                "10 días" => "10 días después de que se termina el presente contrato de arriendo",
                "1 mes" => "1 mes después de que se termina el presente contrato de arriendo",
            )))
            ->add('aval', 'choice', array('label' => '¿Se incluye un codeudor solidario en el contrato?', 'expanded' => true, 'attr' => array('class' => 'options_inline'), 'choices' => array(1 => 'Sí', 0 => 'No')))
            ->add('aval_sexo', 'choice', array('label' => 'Sexo', 'expanded' => true, 'attr' => array('class' => 'options_inline'), 'choices' => array('Hombre' => 'Hombre', 'Mujer' => 'Mujer')))
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
            ->add('aval_duracion', 'choice', array('label' => '¿Hasta cuando garantizará el codeudor solidario las obligaciones del Arrendatario en el contrato de arriendo?', 'expanded' => true, 'choices' => array(
                'Mientras dure este contrato' => 'Mientras dure este contrato', 
                'Por la duración de este contrato y sus prórrogas' => 'Por la duración de este contrato y sus prórrogas',
                'Otro' => 'Otro'
            )))
            ->add('aval_duracion_otro', null, array('label' => 'Indique la duración'))
            ->add('jurisdiccion', 'choice', array('label' => ' ¿En caso de haber problemas jurídicos entre las partes, en los tribunales de qué lugar deberán resolver sus diferencias?', 'expanded' => true, 'choices' => array(
                0 => 'En la comuna en que se suscribe el contrato', 
                1 => 'Otra'
            )))
            ->add('jurisdiccion_comuna', 'entity', array('label' => 'Comuna', 'class' => 'ContratosBundle:Comuna', 'required' => false, 'placeholder' => 'Seleccione una opción'))
            ->add('correo', 'choice', array('label' => '¿Utilizarán las partes los correos electrónicos como forma válidad de comunicación entre las partes?', 'expanded' => true, 'attr' => array('class' => 'options_inline'), 'choices' => array(1 => 'Sí', 0 => 'No')))
            ->add('correo_arrendador', null, array('label' => 'Correo electrónico del Arrendador'))
            ->add('correo_arrendatario', null, array('label' => 'Correo electrónico del Arrendatario'))
            ->add('personeria_arrendador_fecha', 'collot_datetime', array('label' => 'Fecha', 'required' => false, 'pickerOptions' => array(
                'format' => 'dd/mm/yyyy',
                'language' => 'es',
                'minView' => 'month',
                'autoclose' => true,
                'todayHighlight' => true
            )))
            ->add('personeria_arrendador_notaria', null, array('label' => 'Notaria'))
            ->add('personeria_arrendador_lugar', null, array('label' => 'Dirección'))
            ->add('personeria_arrendatario_fecha', 'collot_datetime', array('label' => 'Fecha', 'required' => false, 'pickerOptions' => array(
                'format' => 'dd/mm/yyyy',
                'language' => 'es',
                'minView' => 'month',
                'autoclose' => true,
                'todayHighlight' => true
            )))
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
