<?php
/**
 * Created by PhpStorm.
 * User: guydev
 * Date: 23/01/2017
 * Time: 09:13
 */

namespace OC\PlatformBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')->render('OCPlatformBundle:Advert:index.html.twig', array('nom' => "Guy UMFUNDI"));

        return new Response($content);
    }
}