<?php

namespace App\Controller;

use App\Entity\Agenda;
use App\Entity\Activite;
use App\Form\AgendaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class AdminAgendaController extends AbstractController
{
    /**
     * @Route("/{dep}/admin/agenda", name="admin_agenda", requirements={"dep"="\d+"})
     */
    public function index(int $dep)
	{
		$entityManager=$this->getDoctrine()->getManager();

		$form = $this->createForm(AgendaType::class, new Agenda());
//print_r($form->createView());exit;

        return $this->render('admin/agenda/index.html.twig', [
			'dep' => $dep,
			'form' => $form->createView()
        ]);
    }
}
