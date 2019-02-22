<?php

namespace MissionBundle\Controller;



use MissionBundle\Entity\Mission;
use MissionBundle\Form\MissionType;
use Proxies\__CG__\MissionBundle\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


/**
 * Mission controller.
 *
 */
class MissionController extends Controller
{
    /**
     * Lists all mission entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $missions = $em->getRepository('MissionBundle:Mission')->findAll();

        return $this->render('@Mission/mission/index.html.twig', array(
            'missions' => $missions,
        ));
    }

    /**
     * Finds and displays a mission entity.
     *
     */
    public function showAction(Mission $mission)
    {

        return $this->render('@Mission/mission/show.html.twig', array(
            'mission' => $mission,
        ));
    }
    public function createAction(Request $request)
    {
        $mission= new Mission();
        $form=$this->createForm(MissionType::class,$mission);
        $form=$form->handleRequest($request);
        if($form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($mission);
            $em->flush();
            return $this->redirectToRoute('mission_index');
        }
        return $this->render('@Mission/mission/create.html.twig', array(
        'form'=>$form->createView()
    ));
    }
    public function updateAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $mission=$em->getRepository(Mission::class)->find($id);
        $form=$this->createForm(MissionType::class,$mission);

        $form=$form->handleRequest($request);
        if ($form->isValid())
        {
            $em->flush();
            return $this->redirectToRoute('mission_index');
        }

        return $this->render('@Mission/mission/update.html.twig', array(
            'form'=>$form->createView(),
            'mission' => $mission

        ));
    }
    public function deleteAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $mission=$em->getRepository(Mission::class)->find($id);
        $em->remove($mission);
        $em->flush();
        return $this->redirectToRoute('mission_index');

    }
    public function rechercheParNomAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $nom = $request->get('nom');
            $missions = $this->getDoctrine()
                ->getRepository(Mission::class)->findByNom($nom);
            $se = new Serializer(array(new ObjectNormalizer()));

            $data = $se->normalize($missions);
            return new JsonResponse($data);
        }
        return $this->render('@Mission/mission/rechercheMission.html.twig', array(// ...
        ));
    }
    public function pdf2Action (Request $request)
    {
        return $this->render('@Mission/mission/plz.html.twig', array(

        ));
    }
    public function pdfAction ()
    {

        $em = $this->getDoctrine()->getManager();
       // $util = $em->getRepository('MissionBundle:Mission')->findAll();


//        $ab = $em->getRepository('DemandeBundle:Demande')->findAll();

    //    $b=$em->getRepository('MissionBundle:Categorie')->findAll();


        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';

        // use absolute path !
        $pageUrl = $this->generateUrl('plz2', array(), UrlGeneratorInterface::ABSOLUTE_URL);

        return new Response(
            $snappy->getOutput($pageUrl),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
        );
    }

}
