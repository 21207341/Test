<?php

namespace Nlc\InformationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * @Route("/login")
     * @Template("NlcInformationBundle:Information:login.html.twig")
     */
    public function LoginAction()
    {
        return array();
    }
    /**
     * @Route("/admin")
     * @Template("NlcInformationBundle:Information:admin.html.twig")
     */
    public function AdminAction()
    {
        return array();
    }
}
