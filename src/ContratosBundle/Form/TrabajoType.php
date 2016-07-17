<?php

namespace ContratosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use ContratosBundle\Form\Type\RegionType;

class TrabajoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $parcial = array();
        $completa = array();
        for($i=1; $i < 45; $i++){
            if($i < 31) { $parcial[] = $i; }
            else { $completa[] = $i; }
        }
        
        $builder
            ->add('fecha', 'collot_datetime', array('label' => 'Fecha', 'pickerOptions' => array(
                'format' => 'dd/mm/yyyy',
                'language' => 'es',
                'minView' => 'month',
                'autoclose' => true,
                'todayHighlight' => true
            )))
            ->add('ciudad', null, array('label' => 'Ciudad'))
            ->add('empleador_persona', 'choice', array('label' => 'Tipo de persona', 'expanded' => true, 'choices' => array('Natural' => 'Natural', 'Jurídica' => 'Jurídica')))
            ->add('empleador_natural_sexo', 'choice', array('label' => 'Sexo', 'expanded' => true, 'attr' => array('class' => 'options_inline'), 'choices' => array('Hombre' => 'Hombre', 'Mujer' => 'Mujer')))
            ->add('empleador_natural_nombres', null, array('label' => 'Nombres'))
            ->add('empleador_natural_apellido_paterno', null, array('label' => 'Apellido Paterno'))
            ->add('empleador_natural_apellido_materno', null, array('label' => 'Apellido Materno'))
            ->add('empleador_natural_nacionalidad', null, array('label' => 'Nacionalidad'))
            ->add('empleador_natural_estado_civil', 'choice', array('label' => 'Estado civil', 'required' => false, 'placeholder' => 'Seleccione una opción', 'choices' => array('Soltero' => 'Soltero', 'Casado' => 'Casado', 'Divorciado' => 'Divorciado', 'Viudo' => 'Viudo')))
            ->add('empleador_natural_profesion', null, array('label' => 'Profesión u oficio'))
            ->add('empleador_natural_rut', null, array('label' => 'RUT'))
            ->add('empleador_natural_domicilio', null, array('label' => 'Domicilio'))
            ->add('empleador_natural_region', RegionType::class, array('label' => 'Región', 'required' => false, 'placeholder' => 'Seleccione una opción'))
            ->add('empleador_natural_comuna', 'entity', array('label' => 'Comuna', 'class' => 'ContratosBundle:Comuna', 'required' => false, 'placeholder' => 'Seleccione una opción'))
            ->add('empleador_juridica_razon', null, array('label' => 'Razón social'))
            ->add('empleador_juridica_giro', null, array('label' => 'Giro'))
            ->add('empleador_juridica_rut', null, array('label' => 'RUT'))
            ->add('empleador_juridica_domicilio', null, array('label' => 'Domicilio'))
            ->add('empleador_juridica_region', RegionType::class, array('label' => 'Región', 'required' => false, 'placeholder' => 'Seleccione una opción'))
            ->add('empleador_juridica_representantes', 'collection', array(
                'type' => new RepresentanteLegalType(),
                'allow_add'    => true,
                'allow_delete' => true,
            ))
            ->add('empleador_juridica_personeria_fecha', 'collot_datetime', array('label' => 'Fecha', 'required' => false, 'pickerOptions' => array(
                'format' => 'dd/mm/yyyy',
                'language' => 'es',
                'minView' => 'month',
                'autoclose' => true,
                'todayHighlight' => true
            )))
            ->add('empleador_juridica_personeria_notaria', null, array('label' => 'Notaria'))
            ->add('empleador_juridica_personeria_lugar', null, array('label' => 'Dirección'))
            ->add('empleador_juridica_comuna', 'entity', array('label' => 'Comuna', 'class' => 'ContratosBundle:Comuna', 'required' => false, 'placeholder' => 'Seleccione una opción'))
            ->add('trabajador_sexo', 'choice', array('label' => 'Sexo', 'expanded' => true, 'attr' => array('class' => 'options_inline'), 'choices' => array('Hombre' => 'Hombre', 'Mujer' => 'Mujer')))
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
            ->add('trabajador_extranjero', 'choice', array('label' => 'Nacionalidad', 'attr' => array('class' => 'options_inline'), 'expanded' => true, 'choices' => array(0 => 'Chilena', 1 => 'Extranjera')))
            ->add('trabajador_nacionalidad', null, array('label' => 'Nacionalidad'))
            ->add('trabajador_procedencia', null, array('label' => 'Procedencia'))
            ->add('trabajador_visa', 'choice', array('label' => '¿Qué tipo de autorización tien el trabajador extranjero para residir en Chile?', 'placeholder' => 'Seleccione una opción', 'required' => false, 'choices' => array(
                "turismo" => "Visa de Turismo",
                "residencia" => "Visa de Residencia",
                "temporaria" => "Visa Temporaria",
                "contrato" => "Visa Sujeta a Contrato",
                "estudiante" => "Visa de Estudiante",
                "permiso" => "Permiso para trabajar con Visa de Turista",
                "empleador" => "Visa Sujeta a Contrato con otro empleador",
                "otro" => "Otro (Ej: Trabajador no tiene Visa, o tiene otro tipo de Visa)",
            )))
            ->add('trabajador_estado_civil', 'choice', array('label' => 'Estado civil', 'required' => false, 'placeholder' => 'Seleccione una opción', 'choices' => array('Soltero' => 'Soltero', 'Casado' => 'Casado', 'Divorciado' => 'Divorciado', 'Viudo' => 'Viudo')))
            ->add('trabajador_profesion', null, array('label' => 'Profesión u oficio'))
            ->add('trabajador_rut', null, array('label' => 'RUT'))
            ->add('trabajador_domicilio', null, array('label' => 'Domicilio'))
            ->add('trabajador_region', RegionType::class, array('label' => 'Región', 'required' => false, 'placeholder' => 'Seleccione una opción'))
            ->add('trabajador_comuna', 'entity', array('label' => 'Comuna', 'class' => 'ContratosBundle:Comuna', 'required' => false, 'placeholder' => 'Seleccione una opción'))
            ->add('actividad_empresa', null, array('label'=> 'Indique actividad principal de la empresa o persona que contrata'))
            ->add('actividad_empleado_funciones', null, array('label'=> 'Indique la función que desempeñará el trabajador'))
            ->add('actividad_empleado_responsabilidades', null, array('label'=> 'Indique otras obligaciones o responsabilidades que asumirá el trabajador'))
            ->add('lugar_trabajo', 'choice', array('label' => '¿Dónde desempeñará sus funciones el trabajador?', 'placeholder' => 'Seleccione una opción', 'required' => false, 'choices' => array(
                "direccion" => "Dirección",
                "ciudad" => "Ciudad",
                "otro" => "Otro",
            )))
            ->add('lugar_direccion', null, array('label'=> 'Indique la dirección donde el trabajador realizará sus funciones'))
            ->add('lugar_ciudad', null, array('label'=> 'Indique la ciudad donde el trabajador realizará sus funciones'))
            ->add('lugar_otro', null, array('label'=> 'Indique el lugar donde el trabajador realizará sus funciones'))
            ->add('duracion_jornada_tipo', 'choice', array('label' => 'De acuerdo al número de horas semanales trabajadas, ¿Será un contrato de jornada parcial o de jornada completa?', 'placeholder' => 'Seleccione una opción', 'required' => false, 'choices' => array(
                "completa" => "Jornada completa",
                "parcial" => "Jornada parcial",
            )))
            ->add('duracion_jornada_cantidad_completa', 'choice', array('label' => 'Horas de duración', 'placeholder' => 'Seleccione una opción', 'required' => false, 'choices' => $completa))
            ->add('duracion_jornada_cantidad_parcial', 'choice', array('label' => 'Horas de duración', 'placeholder' => 'Seleccione una opción', 'required' => false, 'choices' => $parcial))
            ->add('duracion_jornada_colacion', 'choice', array('label' => '¿Cuánto durará el tiempo diario de colación del TRABAJADOR?', 'placeholder' => 'Seleccione una opción', 'required' => false, 'choices' => array(
                "30 minutos" => "30 minutos",
                "1 hora" => "1 hora",
            )))
            ->add('trabajo_oficial_jornadas', 'collection', array(
                'type' => new JornadaType(),
                'allow_add'    => true,
                'allow_delete' => true,
            ))
            ->add('duracion_jornada_alternativa', 'choice', array('label' => '¿Quiere agregar una distribución de jornada alternativa?', 'expanded' => true, 'attr' => array('class' => 'options_inline'), 'choices' => array(0 => 'No', 1 => 'Sí')))
            ->add('trabajo_alternativa_jornadas', 'collection', array(
                'type' => new JornadaType(),
                'allow_add'    => true,
                'allow_delete' => true,
            ))
            ->add('sueldo_monto', null, array('label' => 'El sueldo bruto del TRABAJADOR', 'required' => false))
            ->add('sueldo_unidad', 'choice', array('label' => 'Unidad de pago', 'required' => false, 'placeholder' => 'Seleccione una opción', 'choices' => array('Unidades de Fomento' => 'Unidades de Fomento', 'Pesos' => 'Pesos', 'Dólares' => 'Dólares')))
            ->add('sueldo_frecuencia', 'choice', array('label' => 'Período de pago', 'placeholder' => 'Seleccione una opción', 'required' => false, 'choices' => array('diariamente' => 'diariamente', 'semanalmente' => 'semanalmente', 'mensualmente' => 'mensualmente')))
            ->add('sueldo_periodo', null, array('label' => '¿Cuando se paga la remuneración?'))
            ->add('sueldo_afp', null, array('label' => 'Indique cual es la AFP del trabajador'))
            ->add('sueldo_salud', null, array('label' => 'Indique cual es el Sistema Previsional de Salud (ISAPRE/FONASA) del trabajador'))
            ->add('sueldo_otra_remuneracion', 'choice', array('label' => 'Además del sueldo, ¿Tendrá derecho el trabajador a otro tipo de remuneración?', 'expanded' => true, 'choices' => array(1 => 'Sí', 0 => 'No'), 'empty_data'  => 'No'))
            ->add('sueldo_otra_remuneracion_comision', 'checkbox', array('label' => 'Comisión', 'required' => false))
            ->add('sueldo_otra_remuneracion_comision_texto', null, array('label'=> '  ', 'attr' => array('placeholder'=> 'Agregue porcentaje de la comisión, y la operación de la que se obtiene. Ej: 15% de las ventas en ropa deportiva.')))
            ->add('sueldo_otra_remuneracion_participacion', 'checkbox', array('label' => 'Participación', 'required' => false))
            ->add('sueldo_otra_remuneracion_participacion_texto', null, array('label'=> '  ', 'attr' => array('placeholder'=> 'Agregue porcentaje de la participación, y el negocio o empresa de la que se obtiene. Ej: 5% de las utilidades de la empresa Ripcola')))
            ->add('sueldo_otra_remuneracion_otro', 'checkbox', array('label' => 'Otro ', 'required' => false))
            ->add('sueldo_otra_remuneracion_otro_texto', null, array('label'=> '  ', 'attr' => array('placeholder'=> 'Agregue porcentaje o monto de la remuneración adicional, y la condición para que se obtenga')))
            ->add('sueldo_otra_beneficios', 'choice', array('label' => '¿Tendrá derecho el trabajador a beneficios adicionales, como viáticos, bonos de transporte, bono de colación u otros?', 'expanded' => true, 'choices' => array(1 => 'Sí', 0 => 'No'), 'empty_data'  => 'No'))
            ->add('sueldo_otra_beneficios_descripcion', null, array('label' => 'EL EMPLEADOR se compromete a:', 'required' => false))
            ->add('duracion_contrato_tipo', 'choice', array('label' => '¿Cuál es el tipo de contrato?', 'required' => true, 'placeholder' => 'Seleccione una opción', 'choices' => array(
                'indefinido' => 'Indefinido',
                'fijo' => 'Plazo fijo',
                'obra' => 'Por obra/faena',
            )))
            ->add('duracion_contrato_cantidad', null, array('label'=> 'Cantidad'))
            ->add('duracion_contrato_unidad', 'choice', array('label' => ' ', 'placeholder' => 'Seleccione una opción', 'required' => false, 'choices' => array(
                "días" => "días",
                "semanas" => "semanas",
                "meses" => "meses",
                "años" => "años",
            )))
            ->add('duracion_contrato_obra', null, array('label'=> 'Describa la obra/faena que realizará el TRABAJADOR'))
            ->add('duracion_contrato_periodo', null, array('label'=> 'Período de pago'))
            ->add('duracion_contrato_fecha', 'collot_datetime', array('label' => 'Fecha de inicio del trabajo', 'required' => false, 'pickerOptions' => array(
                'format' => 'dd/mm/yyyy',
                'language' => 'es',
                'minView' => 'month',
                'autoclose' => true,
                'todayHighlight' => true
            )))
            ->add('prestacion_fecha', 'collot_datetime', array('label' => 'Fecha', 'required' => false, 'pickerOptions' => array(
                'format' => 'dd/mm/yyyy',
                'language' => 'es',
                'minView' => 'month',
                'autoclose' => true,
                'todayHighlight' => true
            )))
            ->add('jurisdiccion_comuna', 'entity', array('label' => 'Comuna', 'class' => 'ContratosBundle:Comuna', 'required' => false, 'placeholder' => 'Seleccione una opción'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ContratosBundle\Entity\Trabajo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'contratosbundle_trabajo';
    }
}
