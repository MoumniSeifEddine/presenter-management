<?php
    namespace App\Controller;
    use App\Entity;
    use App\Controller;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    /**
     * @Route("/gestionPresentateur2/login")
    */
    class loginController extends AbstractController
    {
        /**
            * @Route("/", name="app_login_index")
        */
        public function index(): Response
        {
            return $this->render('login/index.html.twig', [
                'controller_name' => 'loginController',
            ]);
        }

        
        
    }
?>