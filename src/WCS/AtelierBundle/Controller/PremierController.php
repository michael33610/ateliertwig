<?php

namespace WCS\AtelierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PremierController extends Controller
{
    public function affAction(Request $request)
    {
        $form = $this->createFormBuilder()
            //->setAction($this->generateUrl('aff_res'))  
            ->add('chaine1', TextType::class)
            ->add('chaine2', TextType::class)
            ->add('traite', SubmitType::class)
            ->getform();

    $form->handleRequest($request);

   if ($form->isSubmitted() && $form->isValid()) {
        $data = $form->getData();

        return $this->redirectToRoute('aff_res', array(
            'chaine1' =>$data['chaine1'] ,
            'chaine2' =>$data['chaine2'] ,
            'data' => $data,
        ));

    } 

        return $this->render('WCSAtelierBundle:Premier:aff.html.twig', array(
            // ...
            'aff_form' => $form->createView(),
        ));
    }

    public function affResAction($chaine1,$chaine2)
    {
        return $this->render('WCSAtelierBundle:Premier:aff_res.html.twig', array(
            // ...
            'chaine1' => $chaine1,
            'chaine2' => $chaine2,
        ));
    }

}
