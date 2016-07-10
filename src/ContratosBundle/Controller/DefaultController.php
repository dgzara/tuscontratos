<?php

namespace ContratosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Arriendo controller.
 *
 * @Route("/")
 */
class DefaultController extends Controller
{
    /**
     * Lists all Arriendo entities.
     *
     * @Route("/", name="contratos_homepage")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        return $this->render('ContratosBundle:Default:index.html.twig', array());
    }
}
