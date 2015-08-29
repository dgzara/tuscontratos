<?php

namespace ContratosBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\File\File;
use ContratosBundle\Entity\Comuna;

class LoadComunaData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
    
    public function load(ObjectManager $manager)
    {

$comunas = array('Arica', 'Aisén', 'Algarrobo', 'Alhué', 'Alto Biobío', 'Alto del Carmen', 'Alto Hospicio', 'Ancud', 'Andacollo', 'Angol', 'Antártica', 'Antofagasta', 'Antuco', 'Arauco', 'Buin', 'Bulnes', 'Cabildo', 'Cabo de Hornos (Ex Navarino)', 'Cabrero', 'Calama', 'Calbuco', 'Caldera', 'Calera', 'Calera de Tango', 'Calle Larga', 'Camarones', 'Camiña', 'Canela', 'Cañete', 'Carahue', 'Cartagena', 'Casablanca', 'Castro', 'Catemu', 'Cauquenes', 'Cerrillos', 'Cerro Navia', 'Chaitén', 'Chañaral', 'Chanco', 'Chépica', 'Chiguayante', 'Chile Chico', 'Chillán', 'Chillán Viejo', 'Chimbarongo', 'Cholchol', 'Chonchi', 'Cisnes', 'Cobquecura', 'Cochamó', 'Cochrane', 'Codegua', 'Coelemu', 'Coihaique', 'Coihueco', 'Coinco', 'Colbún', 'Colchane', 'Colina', 'Collipulli', 'Coltauco', 'Combarbalá', 'Concepción', 'Conchalí', 'Concón', 'Constitución', 'Contulmo', 'Copiapó', 'Coquimbo', 'Coronel', 'Corral', 'Cunco', 'Curacautín', 'Curacaví', 'Curaco de Vélez', 'Curanilahue', 'Curarrehue', 'Curepto', 'Curicó', 'Dalcahue', 'Diego de Almagro', 'Doñihue', 'El Bosque', 'El Carmen', 'El Monte', 'El Quisco', 'El Tabo', 'Empedrado', 'Ercilla', 'Estación Central', 'Florida', 'Freire', 'Freirina', 'Fresia', 'Frutillar', 'Futaleufú', 'Futrono', 'Galvarino', 'General Lagos', 'Gorbea', 'Graneros', 'Guaitecas', 'Hijuelas', 'Hualaihué', 'Hualañé', 'Hualpén', 'Hualqui', 'Huara', 'Huasco', 'Huechuraba', 'Illapel', 'Independencia', 'Iquique', 'Isla de Maipo', 'Isla de Pascua', 'Juan Fernández', 'La Cisterna', 'La Cruz', 'La Estrella', 'La Florida', 'La Granja', 'La Higuera', 'La Ligua', 'La Pintana', 'La Reina', 'La Serena', 'La Unión', 'Lago Ranco', 'Lago Verde', 'Laguna Blanca', 'Laja', 'Lampa', 'Lanco', 'Las Cabras', 'Las Condes', 'Lautaro', 'Lebu', 'Licantén', 'Limache', 'Linares', 'Litueche', 'Llaillay', 'Llanquihue', 'Lo Barnechea', 'Lo Espejo', 'Lo Prado', 'Lolol', 'Loncoche', 'Longaví', 'Lonquimay', 'Los Álamos', 'Los Andes', 'Los Ángeles', 'Los Lagos', 'Los Muermos', 'Los Sauces', 'Los Vilos', 'Lota', 'Lumaco', 'Machalí', 'Macul', 'Máfil', 'Maipú', 'Malloa', 'Marchihue', 'María Elena', 'María Pinto', 'Mariquina', 'Maule', 'Maullín', 'Mejillones', 'Melipeuco', 'Melipilla', 'Molina', 'Monte Patria', 'Mostazal', 'Mulchén', 'Nacimiento', 'Nancagua', 'Natales', 'Navidad', 'Negrete', 'Ninhue', 'Ñiquén', 'Nogales', 'Nueva Imperial', 'Ñuñoa', 'O’Higgins', 'Olivar', 'Ollagüe', 'Olmué', 'Osorno', 'Ovalle', 'Padre Hurtado', 'Padre las Casas', 'Paiguano', 'Paillaco', 'Paine', 'Palena', 'Palmilla', 'Panguipulli', 'Panquehue', 'Papudo', 'Paredones', 'Parral', 'Pedro Aguirre Cerda', 'Pelarco', 'Pelluhue', 'Pemuco', 'Peñaflor', 'Peñalolén', 'Pencahue', 'Penco', 'Peralillo', 'Perquenco', 'Petorca', 'Peumo', 'Pica', 'Pichidegua', 'Pichilemu', 'Pinto', 'Pirque', 'Pitrufquén', 'Placilla', 'Portezuelo', 'Porvenir', 'Pozo Almonte', 'Primavera', 'Providencia', 'Puchuncaví', 'Pucón', 'Pudahuel', 'Puente Alto', 'Puerto Montt', 'Puerto Octay', 'Puerto Varas', 'Pumanque', 'Punitaqui', 'Punta Arenas', 'Puqueldón', 'Purén', 'Purranque', 'Putaendo', 'Putre', 'Puyehue', 'Queilén', 'Quellón', 'Quemchi', 'Quilaco', 'Quilicura', 'Quilleco', 'Quillón', 'Quillota', 'Quilpué', 'Quinchao', 'Quinta de Tilcoco', 'Quinta Normal', 'Quintero', 'Quirihue', 'Rancagua', 'Ránquil', 'Rauco', 'Recoleta', 'Renaico', 'Renca', 'Rengo', 'Requínoa', 'Retiro', 'Rinconada', 'Río Bueno', 'Río Claro', 'Río Hurtado', 'Río Ibáñez', 'Río Negro', 'Río Verde', 'Romeral', 'Saavedra', 'Sagrada Familia', 'Salamanca', 'San Antonio', 'San Bernardo', 'San Carlos', 'San Clemente', 'San Esteban', 'San Fabián', 'San Felipe', 'San Fernando', 'San Gregorio', 'San Ignacio', 'San Javier', 'San Joaquín', 'San José de Maipo', 'San Juan de la Costa', 'San Miguel', 'San Nicolás', 'San Pablo', 'San Pedro', 'San Pedro de Atacama', 'San Pedro de la Paz', 'San Rafael', 'San Ramón', 'San Rosendo', 'San Vicente', 'Santa Bárbara', 'Santa Cruz', 'Santa Juana', 'Santa María', 'Santiago', 'Santo Domingo', 'Sierra Gorda', 'Talagante', 'Talca', 'Talcahuano', 'Taltal', 'Temuco', 'Teno', 'Teodoro Schmidt', 'Tierra Amarilla', 'Tiltil', 'Timaukel', 'Tirúa', 'Tocopilla', 'Toltén', 'Tomé', 'Torres del Paine', 'Tortel', 'Traiguén', 'Treguaco', 'Tucapel', 'Valdivia', 'Vallenar', 'Valparaíso', 'Vichuquén', 'Victoria', 'Vicuña', 'Vilcún', 'Villa Alegre', 'Villa Alemana', 'Villarrica', 'Viña del Mar', 'Vitacura', 'Yerbas Buenas', 'Yumbel', 'Yungay', 'Zapallar');
        
        foreach($comunas as $comuna)
        {
            $entity = new Comuna();
            $entity->setNombre($comuna);
            $manager->persist($entity);
        }        
        
        $manager->flush();
    }
    
    
    public function getOrder()
    {
        return 2;
    }
}
