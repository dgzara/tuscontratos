<?php

namespace ContratosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use ContratosBundle\Entity\Trabajo;
use ContratosBundle\Entity\Jornada;
use ContratosBundle\Form\TrabajoType;

/**
 * Trabajo controller.
 *
 * @Route("/trabajo")
 */
class TrabajoController extends Controller
{

    /**
     * Lists all Trabajo entities.
     *
     * @Route("/", name="trabajo")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ContratosBundle:Trabajo')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Trabajo entity.
     *
     * @Route("/", name="trabajo_create")
     * @Method("POST")
     * @Template("ContratosBundle:Trabajo:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Trabajo();

        $jornada = new Jornada();
        $jornada->setDia(1);
        $entity->addTrabajoOficialJornada($jornada);
        
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('trabajo_doc', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Trabajo entity.
     *
     * @param Trabajo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Trabajo $entity)
    {
        $form = $this->createForm(new TrabajoType(), $entity, array(
            'action' => $this->generateUrl('trabajo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Trabajo entity.
     *
     * @Route("/new", name="trabajo_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Trabajo();
        
        $jornada = new Jornada();
        $jornada->setDia(1);
        $entity->addTrabajoOficialJornada($jornada);
        
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Trabajo entity.
     *
     * @Route("/{id}", name="trabajo_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ContratosBundle:Trabajo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Trabajo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }
    
    /**
     * Finds and displays a Arriendo entity.
     *
     * @Route("/doc/{id}", name="trabajo_doc")
     * @Method("GET")
     * @Template()
     */
    public function docAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ContratosBundle:Trabajo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Trabajo entity.');
        }
        
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $phpWord->setDefaultFontName('Verdana');
        $phpWord->setDefaultFontSize(11);
        $phpWord->addTitleStyle(1, array(
            'name' => 'Verdana', 
            'size' => 18, 
            'bold' => true,
        ), array(
            'align' => 'center',
            'spaceAfter' => \PhpOffice\PhpWord\Shared\Converter::pointToTwip(0),
        ));
        $phpWord->addTitleStyle(2, array(
            'name' => 'Verdana', 
            'size' => 11, 
            'bold' => false,
        ), array(
            'align' => 'center',
            'spaceAfter' => \PhpOffice\PhpWord\Shared\Converter::pointToTwip(3),
        ));
        $phpWord->addTitleStyle(3, array(
            'name' => 'Verdana', 
            'size' => 11, 
            'bold' => false,
        ), array(
            'indent' => 0.8,
            'spaceAfter' => \PhpOffice\PhpWord\Shared\Converter::pointToTwip(12),
            'lineHeight'     => 1
        ));
        $phpWord->setDefaultParagraphStyle(array(
            'align'      => 'both',
            'spaceAfter' => \PhpOffice\PhpWord\Shared\Converter::pointToTwip(12),
            'lineHeight'     => 1
        ));
        
        // Adding an empty Section to the document...
        $section = $phpWord->addSection();
        
        // Obtenemos el documento hecho html
        $html = $this->renderView('ContratosBundle:Trabajo:show.html.twig', array(
	        'entity' => $entity,
	    ));
	    $html = preg_replace('/\s+/', ' ', $html);
	    
        // Agregamos el HTML
        \PhpOffice\PhpWord\Shared\Html::addHtml($section, $html);
        
        $filename = sprintf(
            '%s%s%s.%s',
            sys_get_temp_dir(),
            DIRECTORY_SEPARATOR,
            uniqid(),
            'docx'
        );

        // Saving the document as OOXML file...
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save($filename);
        
        // Carpeta
        $content = file_get_contents($filename);
    
        // Respuesta
        $response = new Response();
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        $response->headers->set('Content-Disposition', 'attachment;filename="document.docx"');
        $response->setContent($content);
        return $response;
    }
}
