<?php

namespace AppBundle\Controller;

use AppBundle\Entity\classList;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(classList::class);
        $classList = $repository->findAll();



        // replace this example code with whatever you need
        return $this->render('home/index.html.twig',[
            'classList'=>$classList,
        ]);
    }
}
