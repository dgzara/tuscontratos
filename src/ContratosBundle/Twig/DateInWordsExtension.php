<?php

namespace ContratosBundle\Twig;

use Twig_Extension;
use Twig_Filter_Method;
use Twig_Function_Method;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateTimeToStringTransformer;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateTimeToTimestampTransformer;
use Symfony\Component\Translation\Translator;
use Symfony\Component\Validator\Constraints\DateTime;

class DateInWordsExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('date_in_words', array($this, 'dateInWords')),
        );
    }
    
    /**
     * Devuelve la fecha expresada en el calendario gregoriano y como un string
     *
     * @param $datetime String or DateTime
     *
     * @return string
     */
    function dateInWords($datetime)
    {
        if(!$datetime){
            return "-";
        }
        
        // Obtenemos la fecha
        $dia = date_format($datetime, 'l');
        $diaNumero = date_format($datetime, 'd');
        $mes = date_format($datetime, 'F');
        $agno = date_format($datetime, 'Y');
        
        // Formamos los strings
        $mesEscrito = '';
        
        // Revisamos el mes
        if($mes == "January"){
            $mesEscrito = "Enero";
        }
        else if($mes == "February"){
            $mesEscrito = "Febrero";
        }
        else if($mes == "March"){
            $mesEscrito = "Marzo";
        }
        else if($mes == "April"){
            $mesEscrito = "Abril";
        }
        else if($mes == "May"){
            $mesEscrito = "Mayo";
        }
        else if($mes == "June"){
            $mesEscrito = "Junio";
        }
        else if($mes == "July"){
            $mesEscrito = "Julio";
        }
        else if($mes == "August"){
            $mesEscrito = "Agosto";
        }
        else if($mes == "September"){
            $mesEscrito = "Septiembre";
        }
        else if($mes == "October"){
            $mesEscrito = "Octubre";
        }
        else if($mes == "November"){
            $mesEscrito = "Noviembre";
        }
        else if($mes == "December"){
            $mesEscrito = "Diciembre";
        }
        
        // Armamos la frase
        return $diaNumero.' de '.$mesEscrito.' de '.$agno;
    }
    
    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'date_in_words';
    }
}
