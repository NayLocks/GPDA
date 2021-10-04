<?php

namespace App\Controller;

use App\Entity\Documents;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class DocumentsController extends AbstractController
{
    /**
     * @Route("/bl", name="bl")
     */
    public function BL(Request $request)
    {
        $allDocuments = $this->getDoctrine()->getRepository(Documents::class);
        $bl = $allDocuments->findAll();

        return $this->render('PDA/documents_BL.html.twig', ['allBL' => $bl]);
    }
    /**
     * @Route("/br", name="br")
     */
    public function BR(Request $request)
    {
        $allDocuments = $this->getDoctrine()->getRepository(Documents::class);
        $br = $allDocuments->findAll();

        return $this->render('PDA/documents_BR.html.twig', ['allBR' => $br]);
    }
}

