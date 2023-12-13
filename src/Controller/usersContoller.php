<?php
    namespace App\Controller;
    use App\Entity\Numero;
    use App\Controller;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    /**
     * @Route("/gestionPresentateur/users")
    */
    class usersController extends AbstractController
    {
        /**
            * @Route("/", name="app_users_index", methods={"GET"})
        */
        public function index(): Response
        {
            return $this->render('users/index.html.twig', [
                'controller_name' => 'usersController',
            ]);
        }
        
    }
?>