<?php
    namespace App\Controller;
    use App\Entity\Numero;
    use App\Controller;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    /**
     * @Route("/gestionPresentateur2")
    */
    class logoutController extends AbstractController
    {
        /**
            * @Route("/", name="app_logout_index", methods={"GET"})
        */
        public function index(): Response
        {
            return $this->render('gestionPresentateur2/index2.html.twig', [
                'controller_name' => 'logoutController',
            ]);
        }

        
        
    }
?>