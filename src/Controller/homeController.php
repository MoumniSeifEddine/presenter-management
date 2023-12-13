<?php
    namespace App\Controller;
    use App\Entity\Numero;
    use App\Controller;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    /**
     * @Route("/gestionPresentateur")
    */
    class homeController extends AbstractController
    {
        /**
            * @Route("/", name="app_gestionPresentateur_index", methods={"GET"})
        */
        public function index(): Response
        {
            return $this->render('gestionPresentateur/index.html.twig', [
                'controller_name' => 'gestionPresentateurController',
            ]);
        }

        
        
    }
?>