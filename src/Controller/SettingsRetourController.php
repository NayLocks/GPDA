<?php

namespace App\Controller;

use App\Entity\Companies;
use App\Entity\PDA;
use App\Entity\SettingsRetour;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class SettingsRetourController extends AbstractController
{
    /**
     * @Route("/settings/retour", name="settingsRetour")
     */
    public function index(Request $request)
    {
        $allSettings = $this->getDoctrine()->getRepository(SettingsRetour::class);
        $settings = $allSettings->findOneBy(array('id' => 1));

        return $this->render('Settings/settingsRetour.html.twig', ['settings' => $settings]);
    }
}

