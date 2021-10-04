<?php

namespace App\Controller;

use App\Entity\Users;
use App\Entity\User;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class UsersController extends AbstractController
{
    /**
     * @Route("/users_web", name="usersWEB")
     */
    public function usersWEB(Request $request)
    {
        $allUsersWEB = $this->getDoctrine()->getRepository(User::class);
        $usersWEB = $allUsersWEB->findAll();

        return $this->render('PDA/users_web.html.twig', ['allUsers' => $usersWEB]);
    }

    /**
    * @Route("/users_appli", name="usersAppli")
    */
    public function usersAppli(Request $request)
    {
        $allUsersAppli = $this->getDoctrine()->getRepository(Users::class);
        $usersAppli = $allUsersAppli->findAll();

        return $this->render('PDA/users_appli.html.twig', ['allUsers' => $usersAppli]);
    }
}

