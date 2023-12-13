<?php
    namespace App\Controller;
    use App\Entity\Numero;
    use App\Controller;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    /**
     * @Route("/gestionPresentateur/signup")
    */
    class signupController extends AbstractController
    {
        /**
            * @Route("/", name="app_signup_index", methods={"GET"})
        */
        public function index(): Response
        {
            return $this->render('signup/index.html.twig', [
                'controller_name' => 'signupController',
            ]);
        }

        
        
    }
?>