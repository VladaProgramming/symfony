<?php 

    namespace AppBundle\Controller;

    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Response;


    class GenusController extends Controller
    {
        /**
         * @Route("/genus/{genusName}")
         */

         public function showAction($genusName)
         {
             $notes = [
                 'Lorem Ipsum is simply dummy text of the printing'
             ];

         return $this->render('genus/show.html.twig', [
                'name' => $genusName,
                'notes' => $notes
                ]);

         }
    }