<?php

namespace App\Controller;

use App\Entity\Companies;
use App\Entity\PDA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class DashboardController extends AbstractController
{
    /**
     * @Route("/", name="dashboard")
     */
    public function index(Request $request)
    {
        $allCompanies = $this->getDoctrine()->getRepository(Companies::class);
        $companies = $allCompanies->findAll();

        $allPDA = $this->getDoctrine()->getRepository(PDA::class);
        $pda = $allPDA->totalCompany();

        $total = 0;

        for ($i = 0; $i < sizeof($pda); $i++){
            $total = $total + $pda[$i]['nb'];
        }

        for ($i = 0; $i < sizeof($pda); $i++){
            $percent[$i] = $pda[$i]['nb']*100/$total;
            $percent[$i] = round($percent[$i]);
        }

        return $this->render('dashboard.html.twig', ['companies' => $companies, 'pda' => $pda, 'total' => $total, 'percent' => $percent]);
    }
}

