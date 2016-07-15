<?php

namespace ContratosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use ContratosBundle\Entity\Arriendo;
use ContratosBundle\Entity\RepresentanteLegal;
use ContratosBundle\Form\ArriendoType;

/**
 * Arriendo controller.
 *
 * @Route("/arriendo")
 */
class ArriendoController extends Controller
{

    /**
     * Lists all Arriendo entities.
     *
     * @Route("/", name="arriendo")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ContratosBundle:Arriendo')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    
    /**
     * Creates a new Arriendo entity.
     *
     * @Route("/create", name="arriendo_create")
     * @Method("POST")
     * @Template("ContratosBundle:Arriendo:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Arriendo();
        
        $arrendadorRepresentanteLegal = new RepresentanteLegal();
        $arrendatarioRepresentanteLegal = new RepresentanteLegal();
        
        $entity->addArrendadorJuridicaRepresentante($arrendadorRepresentanteLegal);
        $entity->addArrendatarioJuridicaRepresentante($arrendatarioRepresentanteLegal);
        
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('arriendo_doc', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Arriendo entity.
     *
     * @param Arriendo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Arriendo $entity)
    {
        $form = $this->createForm(new ArriendoType(), $entity, array(
            'action' => $this->generateUrl('arriendo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Arriendo entity.
     *
     * @Route("/new", name="arriendo_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Arriendo();
        
        $arrendadorRepresentanteLegal = new RepresentanteLegal();
        $arrendatarioRepresentanteLegal = new RepresentanteLegal();
        
        $entity->addArrendadorJuridicaRepresentante($arrendadorRepresentanteLegal);
        $entity->addArrendatarioJuridicaRepresentante($arrendatarioRepresentanteLegal);
        
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Arriendo entity.
     *
     * @Route("/{id}", name="arriendo_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ContratosBundle:Arriendo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Arriendo entity.');
        }

        return array(
            'entity'      => $entity,
        );
    }
    
    /**
     * Finds and displays a Arriendo entity.
     *
     * @Route("/doc/{id}", name="arriendo_doc")
     * @Method("GET")
     * @Template()
     */
    public function docAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ContratosBundle:Arriendo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Arriendo entity.');
        }
        
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $phpWord->setDefaultFontName('Verdana');
        $phpWord->setDefaultFontSize(12);
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
            'spaceAfter' => \PhpOffice\PhpWord\Shared\Converter::pointToTwip(3),
        ));
        $phpWord->setDefaultParagraphStyle(array(
            'align'      => 'both',
            'spacing'    => 120,
            'spaceAfter' => \PhpOffice\PhpWord\Shared\Converter::pointToTwip(12),
            'lineHeight'     => 1
        ));
        
        // Adding an empty Section to the document...
        $section = $phpWord->addSection();
        
        // Obtenemos el documento hecho html
        $html = $this->renderView('ContratosBundle:Arriendo:show.html.twig', array(
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

    /**
     * Displays a form to edit an existing Arriendo entity.
     *
     * @Route("/{id}/edit", name="arriendo_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ContratosBundle:Arriendo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Arriendo entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Arriendo entity.
    *
    * @param Arriendo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Arriendo $entity)
    {
        $form = $this->createForm(new ArriendoType(), $entity, array(
            'action' => $this->generateUrl('arriendo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Arriendo entity.
     *
     * @Route("/{id}", name="arriendo_update")
     * @Method("PUT")
     * @Template("ContratosBundle:Arriendo:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ContratosBundle:Arriendo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Arriendo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('arriendo_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Arriendo entity.
     *
     * @Route("/{id}", name="arriendo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ContratosBundle:Arriendo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Arriendo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('arriendo'));
    }

    /**
     * Creates a form to delete a Arriendo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('arriendo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
