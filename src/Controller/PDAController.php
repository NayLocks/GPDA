<?php

namespace App\Controller;

use App\Entity\PDA;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class PDAController extends AbstractController
{
    /**
     * @Route("/pda", name="pda")
     */
    public function index(Request $request)
    {
        $allPDA = $this->getDoctrine()->getRepository(PDA::class);
        $pda = $allPDA->findAll();

        return $this->render('PDA/pda.html.twig', ['allPDA' => $pda]);
    }
}

