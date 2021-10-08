<?php

namespace App\Controller;

use App\Entity\PDA;
use App\Entity\SettingsRetour;
use DateTime;
use Dompdf\Dompdf;
use Dompdf\Options;
use Ijanki\Bundle\FtpBundle\Exception\FtpException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class SettingsRetourController extends AbstractController
{
    /**
     * @Route("/fiche_retour/{id}", name="ficheRetour")
     */
    public function index(Request $request, $id)
    {
        $allPDA = $this->getDoctrine()->getRepository(PDA::class);
        $pda = $allPDA->findOneBy(array('id' => $id));

        $allSettings = $this->getDoctrine()->getRepository(SettingsRetour::class);
        $setting = $allSettings->findOneBy(array('id' => 1));

        //$form = $this->createForm(SettingsFormType::class, $settings);
        //$form->handleRequest($request);


        //if ($form->isSubmitted() && $form->isValid()) {

            $time = new DateTime();
            $jour = $time->format('d');
            $mois = $time->format('m');
            $annee = $time->format('Y');

            $pdfOptions = new Options();
            $pdfOptions->set('isHtml5ParserEnabled', 'true');
            $pdfOptions->set('enable_remote', true);
            $dompdf = new Dompdf($pdfOptions);
            $html = $this->renderView('GenPDF/HODGenBR.html.twig', ['setting' => $setting, 'pda' => $pda, 'jour' => $jour, 'mois' => $mois, 'annee' => $annee]);
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();
            $output = $dompdf->output();
            $pdfFilepath =  'PDF/BR_'.$annee.'_'.$mois.'_'.$jour."_".$pda->getPNoSerial().".pdf";
            $path =  'BR_'.$annee.'_'.$mois.'_'.$jour.'_'.$pda->getPNoSerial().'.pdf';
            file_put_contents($pdfFilepath, $output);

            /*$allTypeDocuments = $this->getDoctrine()->getRepository(TypeDocuments::class);
            $code = $allTypeDocuments->findOneBy(array('code' => "BR"));

            $allSettings = $this->getDoctrine()->getRepository(Companies::class);
            $ribegroupe = $allSettings->findOneBy(array('id' => 4));
            $hubone = $allSettings->findOneBy(array('id' => 3));

            $documentsUpload = new Documents();
            $date = new DateTime();

            $documentsUpload->setDateCreated($date);
            $documentsUpload->setPath($path);
            $documentsUpload->setPda($pda);
            $documentsUpload->setType($code);
            $documentsUpload->setMontant(0);
            $documentsUpload->setPathLaPoste("/");

            $entitymanager = $this->getDoctrine()->getManager();
            $entitymanager->persist($documentsUpload);
            $entitymanager->flush();

            $transfert = new Transferts();

            $allDocuments = $this->getDoctrine()->getRepository(Documents::class);
            $documents = $allDocuments->findOneBy(array('path' => $path));

            $transfert->setPda($pda);
            $transfert->setProblem($_POST['problem']);
            $transfert->setCompanyStart($ribegroupe);
            $transfert->setCompanyEnd($hubone);
            $transfert->setDateSend($date);
            $transfert->setIsArrived(0);
            $transfert->setDocument($documents);

            $entitymanager = $this->getDoctrine()->getManager();
            $entitymanager->persist($transfert);
            $entitymanager->flush();*/

            return $this->redirect('/'.$pdfFilepath);
        //}

        //return $this->render('GenPDA/HODGenBR.html.twig', ['form' => $form->createView(), 'pda' => $pda]);
    }
}

