<?php

namespace ContratosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CasaParticularType extends AbstractType
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
            ->add('empleador_sexo', 'choice', array('label' => 'Sexo', 'expanded' => true, 'choices' => array('Hombre' => 'Hombre', 'Mujer' => 'Mujer')))
            ->add('empleador_nombres', null, array('label' => 'Nombres'))
            ->add('empleador_apellido_paterno', null, array('label' => 'Apellido Paterno'))
            ->add('empleador_apellido_materno', null, array('label' => 'Apellido Materno'))
            ->add('empleador_nacionalidad', null, array('label' => 'Nacionalidad'))
            ->add('empleador_estado_civil', 'choice', array('label' => 'Estado civil', 'required' => false, 'placeholder' => 'Seleccione una opción', 'choices' => array('Soltero' => 'Soltero', 'Casado' => 'Casado', 'Divorciado' => 'Divorciado', 'Viudo' => 'Viudo')))
            ->add('empleador_profesion', null, array('label' => 'Profesión u oficio'))
            ->add('empleador_rut', null, array('label' => 'RUT'))
            ->add('empleador_domicilio', null, array('label' => 'Domicilio'))
            ->add('empleador_region', 'choice', array('label' => 'Región', 'required' => false, 'placeholder' => 'Seleccione una opción', 'choices' => array(
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
            ->add('trabajador_sexo', 'choice', array('label' => 'Sexo', 'expanded' => true, 'choices' => array('Hombre' => 'Hombre', 'Mujer' => 'Mujer')))
            ->add('trabajador_nombres', null, array('label' => 'Nombres'))
            ->add('trabajador_apellido_paterno', null, array('label' => 'Apellido Paterno'))
            ->add('trabajador_apellido_materno', null, array('label' => 'Apellido Materno'))
            ->add('trabajador_nacimiento', 'collot_datetime', array('label' => 'Fecha de nacimiento', 'required' => false, 'pickerOptions' => array(
                'format' => 'dd/mm/yyyy',
                'language' => 'es',
                'minView' => 'month',
                'autoclose' => true,
                'todayHighlight' => true
            )))
            ->add('trabajador_extranjero', 'choice', array('label' => 'Nacionalidad', 'expanded' => true, 'choices' => array(0 => 'Chilena', 1 => 'Extranjera')))
            ->add('trabajador_nacionalidad', null, array('label' => 'Nacionalidad'))
            ->add('trabajador_procedencia', null, array('label' => 'Procedencia'))
            ->add('trabajador_estado_civil', 'choice', array('label' => 'Estado civil', 'required' => false, 'placeholder' => 'Seleccione una opción', 'choices' => array('Soltero' => 'Soltero', 'Casado' => 'Casado', 'Divorciado' => 'Divorciado', 'Viudo' => 'Viudo')))
            ->add('trabajador_profesion', null, array('label' => 'Profesión u oficio'))
            ->add('trabajador_rut', null, array('label' => 'RUT'))
            ->add('trabajador_domicilio', null, array('label' => 'Domicilio'))
            ->add('trabajador_region', 'choice', array('label' => 'Región', 'required' => false, 'placeholder' => 'Seleccione una opción', 'choices' => array(
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
            ->add('obligacion_funcion', 'choice', array('label' => 'Indique la función que desempeñará el TRABAJADOR', 'required' => true, 'placeholder' => 'Seleccione una opción', 'choices' => array(
                'asesora' => 'Asesora de hogar',
                'jardin' => 'Jardinero',
                'chofer' => 'Chofer',
            )))
            ->add('obligacion_puertas_adentro', 'choice', array('label' => 'EL TRABAJADOR, ¿Trabajará en régimen puertas adentro?', 'expanded' => true, 'choices' => array(1 => 'Sí', 0 => 'No')))
            ->add('obligacion_puertas_adentro_horas', null, array('label' => 'Duración de la Jornada Laboral'))
            ->add('obligacion_puertas_adentro_colacion', null, array('label' => 'Duración  de la colación del TRABAJADOR'))
            ->add('obligacion_puertas_adentro_horario_lunes_inicio', 'collot_datetime', array('label' => ' ', 'required' => false,'pickerOptions' => array(
                'format' => 'hh:ii',
                'language' => 'es',
                'minView' => 0,
                'maxView' => 0,
                'autoclose' => true,
                'startView' => 0,
                'initialDate' => '09:00'
            )))
            ->add('obligacion_puertas_adentro_horario_lunes_fin', 'collot_datetime', array('label' => ' ', 'required' => false,'pickerOptions' => array(
                'format' => 'hh:ii',
                'language' => 'es',
                'minView' => 0,
                'maxView' => 0,
                'autoclose' => true,
                'startView' => 0,
                'initialDate' => '19:00'
            )))
            ->add('obligacion_puertas_adentro_horario_martes_inicio', 'collot_datetime', array('label' => ' ', 'required' => false,'pickerOptions' => array(
                'format' => 'hh:ii',
                'language' => 'es',
                'minView' => 0,
                'maxView' => 0,
                'autoclose' => true,
                'startView' => 0,
                'initialDate' => '09:00'
            )))
            ->add('obligacion_puertas_adentro_horario_martes_fin', 'collot_datetime', array('label' => ' ', 'required' => false,'pickerOptions' => array(
                'format' => 'hh:ii',
                'language' => 'es',
                'minView' => 0,
                'maxView' => 0,
                'autoclose' => true,
                'startView' => 0,
                'initialDate' => '19:00'
            )))
            ->add('obligacion_puertas_adentro_horario_miercoles_inicio', 'collot_datetime', array('label' => ' ', 'required' => false,'pickerOptions' => array(
                'format' => 'hh:ii',
                'language' => 'es',
                'minView' => 0,
                'maxView' => 0,
                'autoclose' => true,
                'startView' => 0,
                'initialDate' => '09:00'
            )))
            ->add('obligacion_puertas_adentro_horario_miercoles_fin', 'collot_datetime', array('label' => ' ', 'required' => false,'pickerOptions' => array(
                'format' => 'hh:ii',
                'language' => 'es',
                'minView' => 0,
                'maxView' => 0,
                'autoclose' => true,
                'startView' => 0,
                'initialDate' => '19:00'
            )))
            ->add('obligacion_puertas_adentro_horario_jueves_inicio', 'collot_datetime', array('label' => ' ', 'required' => false,'pickerOptions' => array(
                'format' => 'hh:ii',
                'language' => 'es',
                'minView' => 0,
                'maxView' => 0,
                'autoclose' => true,
                'startView' => 0,
                'initialDate' => '09:00'
            )))
            ->add('obligacion_puertas_adentro_horario_jueves_fin', 'collot_datetime', array('label' => ' ', 'required' => false,'pickerOptions' => array(
                'format' => 'hh:ii',
                'language' => 'es',
                'minView' => 0,
                'maxView' => 0,
                'autoclose' => true,
                'startView' => 0,
                'initialDate' => '19:00'
            )))
            ->add('obligacion_puertas_adentro_horario_viernes_inicio', 'collot_datetime', array('label' => ' ', 'required' => false,'pickerOptions' => array(
                'format' => 'hh:ii',
                'language' => 'es',
                'minView' => 0,
                'maxView' => 0,
                'autoclose' => true,
                'startView' => 0,
                'initialDate' => '09:00'
            )))
            ->add('obligacion_puertas_adentro_horario_viernes_fin', 'collot_datetime', array('label' => ' ', 'required' => false,'pickerOptions' => array(
                'format' => 'hh:ii',
                'language' => 'es',
                'minView' => 0,
                'maxView' => 0,
                'autoclose' => true,
                'startView' => 0,
                'initialDate' => '19:00'
            )))
            ->add('obligacion_puertas_adentro_horario_sabado_inicio', 'collot_datetime', array('label' => ' ', 'required' => false,'pickerOptions' => array(
                'format' => 'hh:ii',
                'language' => 'es',
                'minView' => 0,
                'maxView' => 0,
                'autoclose' => true,
                'startView' => 0,
                'initialDate' => '09:00'
            )))
            ->add('obligacion_puertas_adentro_horario_sabado_fin', 'collot_datetime', array('label' => ' ', 'required' => false,'pickerOptions' => array(
                'format' => 'hh:ii',
                'language' => 'es',
                'minView' => 0,
                'maxView' => 0,
                'autoclose' => true,
                'startView' => 0,
                'initialDate' => '19:00'
            )))
            ->add('obligacion_puertas_adentro_horario_domingo_inicio', 'collot_datetime', array('label' => ' ', 'required' => false, 'pickerOptions' => array(
                'format' => 'hh:ii',
                'language' => 'es',
                'minView' => 0,
                'maxView' => 0,
                'autoclose' => true,
                'startView' => 0,
                'initialDate' => '09:00'
            )))
            ->add('obligacion_puertas_adentro_horario_domingo_fin', 'collot_datetime', array('label' => ' ', 'required' => false, 'pickerOptions' => array(
                'format' => 'hh:ii',
                'language' => 'es',
                'minView' => 0,
                'maxView' => 0,
                'autoclose' => true,
                'startView' => 0,
                'initialDate' => '19:00'
            )))
            ->add('obligacion_condicion_cumplir', 'checkbox', array('label' => 'Cumplir con las instrucciones que sean impartidas por su EMPLEADOR.', 'required' => false))
            ->add('obligacion_condicion_lealtad', 'checkbox', array('label' => 'Desarrollar de forma leal y correcta el trabajo que se le encomienda, con la mayor diligencia y dedicación, respetando siempre el presente contrato y las demás normas que rigen esta materia.', 'required' => false))
            ->add('obligacion_condicion_aseo', 'checkbox', array('label' => 'Realizar labores propias del mantenimiento del hogar, tales como limpieza de habitaciones, baños, y espacios comunes, así como también preparar alimentos, y lavar y planchar ropa."', 'required' => false))
            ->add('obligacion_condicion_jardin', 'checkbox', array('label' => 'Mantener limpios y en perfecto estado el cesped, y las plantas, flores, árboles y arbustos, y dem ás áreas verdes y espacios comunes del exterior del domicilio del EMPLEADOR, así como también instalar y mantener en funcionamiento los sistemas de riego, y cualquier otra herramienta o mecanismo destinada a este propósito.', 'required' => false))
            ->add('obligacion_condicion_chofer', 'checkbox', array('label' => 'Transportar al EMPLEADOR o a las personas u bienes que el o sus jefes dispongan, en el vehículo que le fuese facilitado, a los lugares que le sea requerido, y mantener este vehículo limpio, y en perfecto estado de funcionamiento".', 'required' => false))
            ->add('obligacion_condicion_otro', 'choice', array('label' => '¿Habrán otras obligaciones y responsabilidades?', 'expanded' => true, 'choices' => array(1 => 'Sí', 0 => 'No')))
            ->add('obligacion_condicion_otro_descripcion', null, array('label' => 'Describir obligaciones y/o responsabilidades'))
            ->add('obligacion_requerimientos_especiales', 'choice', array('label' => '¿Tendrá EL TRABAJADOR a su cuidado a personas con requerimientos especiales?', 'expanded' => true, 'choices' => array(1 => 'Sí', 0 => 'No')))
            ->add('obligacion_requerimientos_especiales_nombre', null, array('label' => 'Indique el nombre de la o las personas que requieran cuidados especiales'))
            ->add('obligacion_requerimientos_especiales_motivo', 'choice', array('label' => 'Indique el motivo por el que esta persona requiere de atención especial', 'required' => false, 'placeholder' => 'Seleccione una opción', 'choices' => array(
                'mayor' => 'Por ser mayor de edad',
                'menor' => 'Por ser menor de edad',
                'salud' => 'Por tener condiciones fisiológicas o de salud que exigen cuidados especiales',
            )))
            ->add('sueldo_monto', null, array('label' => 'El sueldo bruto del TRABAJADOR', 'required' => true))
            ->add('sueldo_unidad', 'choice', array('label' => 'Unidad de pago', 'required' => false, 'placeholder' => 'Seleccione una opción', 'choices' => array('Unidad de Fomento' => 'Unidad de Fomento', 'Pesos' => 'Pesos', 'Dólares' => 'Dólares')))
            ->add('sueldo_frecuencia', 'choice', array('label' => 'Período de pago', 'placeholder' => 'Seleccione una opción', 'choices' => array('diariamente' => 'diariamente', 'semanalmente' => 'semanalmente', 'mensualmente' => 'mensualmente')))
            ->add('sueldo_periodo', null, array('label' => '¿Cuando se paga la remuneración?'))
            ->add('sueldo_afp', null, array('label' => 'Indique cual es la AFP del trabajador'))
            ->add('sueldo_salud', null, array('label' => 'Indique cual es el Sistema Previsional de Salud (ISAPRE/FONASA) del trabajador'))
            ->add('sueldo_otra_remuneracion', 'choice', array('label' => 'Además del sueldo, ¿Tendrá derecho el trabajador a otro tipo de remuneración?', 'expanded' => true, 'choices' => array(1 => 'Sí', 0 => 'No')))
            ->add('sueldo_otra_remuneracion_descripcion', null, array('label' => 'Mencione las otras remuneraciones', 'required' => false))
            ->add('sueldo_otra_beneficios', 'choice', array('label' => '¿Tendrá derecho el trabajador a beneficios adicionales, como viáticos, bonos de transporte, bono de colación u otros?', 'expanded' => true, 'choices' => array(1 => 'Sí', 0 => 'No')))
            ->add('sueldo_otra_beneficios_descripcion', null, array('label' => 'EL EMPLEADOR se compromete a:', 'required' => false))
            ->add('prestacion_fecha', 'collot_datetime', array('label' => 'Fecha', 'required' => false,'pickerOptions' => array(
                'format' => 'dd/mm/yyyy',
                'language' => 'es',
                'minView' => 'month',
                'autoclose' => true,
                'todayHighlight' => true
            )))
            ->add('empleador_comuna', 'entity', array('label' => 'Comuna', 'class' => 'ContratosBundle:Comuna', 'required' => false, 'placeholder' => 'Seleccione una opción'))
            ->add('trabajador_comuna', 'entity', array('label' => 'Comuna', 'class' => 'ContratosBundle:Comuna', 'required' => false, 'placeholder' => 'Seleccione una opción'))
            ->add('jurisdiccion_comuna', 'entity', array('label' => 'Comuna', 'class' => 'ContratosBundle:Comuna', 'required' => false, 'placeholder' => 'Seleccione una opción'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ContratosBundle\Entity\CasaParticular'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'contratosbundle_casaparticular';
    }
}
