<?php

namespace MissionBundle\Controller;

use MissionBundle\Entity\Categorie;
use MissionBundle\Form\CategorieType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CategorieController extends Controller
{
    public function ajoutAction(Request $request)
    {$categorie= new Categorie();
        $form=$this->createForm(CategorieType::class,$categorie);
        $form=$form->handleRequest($request);
        if($form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($categorie);
            $em->flush();
            return $this->redirectToRoute('show');
        }
        return $this->render('@Mission/Categorie/ajout.html.twig', array(
            'form'=>$form->createView()
        ));
    }

    public function deleteAction()
    {
        return $this->render('MissionBundle:Categorie:delete.html.twig', array(
            // ...
        ));
    }

    public function updateAction()
    {
        return $this->render('MissionBundle:Categorie:update.html.twig', array(
            // ...
        ));
    }

    public function showAction()
    {
        return $this->render('@Mission/Categorie/show.html.twig', array(
            // ...
        ));
    }

}
