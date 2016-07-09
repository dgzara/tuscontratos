<?php

namespace ContratosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use ContratosBundle\Entity\PoderSimple;
use ContratosBundle\Form\PoderSimpleType;

/**
 * PoderSimple controller.
 *
 * @Route("/podersimple")
 */
class PoderSimpleController extends Controller
{

    /**
     * Lists all PoderSimple entities.
     *
     * @Route("/", name="podersimple")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManagecr();

        $entities = $em->getRepository('ContratosBundle:PoderSimple')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new PoderSimple entity.
     *
     * @Route("/create", name="podersimple_create")
     * @Method("POST")
     * @Template("ContratosBundle:PoderSimple:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new PoderSimple();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('podersimple_doc', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a PoderSimple entity.
     *
     * @param PoderSimple $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(PoderSimple $entity)
    {
        $form = $this->createForm(new PoderSimpleType(), $entity, array(
            'action' => $this->generateUrl('podersimple_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new PoderSimple entity.
     *
     * @Route("/new", name="podersimple_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new PoderSimple();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a PoderSimple entity.
     *
     * @Route("/{id}", name="podersimple_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ContratosBundle:PoderSimple')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PoderSimple entity.');
        }

        return array(
            'entity'      => $entity,
        );
    }
    
    /**
     * Finds and displays a Arriendo entity.
     *
     * @Route("/doc/{id}", name="podersimple_doc")
     * @Method("GET")
     * @Template()
     */
    public function docAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ContratosBundle:PoderSimple')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PoderSimple entity.');
        }
        
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $phpWord->setDefaultFontName('Times New Roman');
        $phpWord->setDefaultFontSize(12);
        $phpWord->addTitleStyle(1, array(
            'name' => 'Times New Roman', 
            'size' => 18, 
            'bold' => true,
        ), array(
            'align' => 'center'
        ));
        $phpWord->addTitleStyle(2, array(
            'name' => 'Times New Roman', 
            'size' => 12, 
            'bold' => false,
        ), array(
            'align' => 'center',
            'spaceAfter' => \PhpOffice\PhpWord\Shared\Converter::pointToTwip(3),
        ));
        $phpWord->setDefaultParagraphStyle(array(
            'align'      => 'both',
            'spaceAfter' => \PhpOffice\PhpWord\Shared\Converter::pointToTwip(12),
            'spacing'    => 120,
        ));
        
        // Adding an empty Section to the document...
        $section = $phpWord->addSection();
        $section->addTitle('Poder Simple', 1);
        
        
        // Obtenemos el documento hecho html
        $html = $this->renderView('ContratosBundle:PoderSimple:show.html.twig', array(
	        'entity' => $entity,
	    ));
	    
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
