<?php

namespace VM\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class ClientController extends Controller
{
	public function indexAction(Request $request)
	{
		$salaries = $this->listeSalariesAction();
		$services = $this->listeServicesSalariesAction();
		$bouquets = $this->listeBouquetsAction();
		$abonnements = $this->listeAbonnementsAction();
		$etatsService = $this->listeEtatsServiceAction();
		return $this->render('VMClientBundle:Default:client.html.twig', array('lesSalaries' => $salaries, 'lesServices' => $services, 'lesBouquets' => $bouquets, 'lesAbonnements' => $abonnements,'lesEtatsService' => $etatsService));
	}

	public function listeSalariesAction()
	{  
		$user = $this->get('security.token_storage')->getToken()->getUser();
		$idUtilisateur = $user->getIdutilisateur();
		
		$em = $this->getDoctrine()->getManager();
		$serviceRepository = $em->getRepository('VMCoreBundle:Service');
		$lesSalaries = $serviceRepository->findAllSalariesByClient($idUtilisateur);
		return $lesSalaries;
	}

	public function listeServicesSalariesAction()
	{  
		$user = $this->get('security.token_storage')->getToken()->getUser();
		$idUtilisateur = $user->getIdutilisateur();
		
		$em = $this->getDoctrine()->getManager();
		$serviceRepository = $em->getRepository('VMCoreBundle:Service');
		$lesServices = $serviceRepository->findAllServiceByClient($idUtilisateur);
		return $lesServices;
	}

	public function listeBouquetsAction()
	{  
		$user = $this->get('security.token_storage')->getToken()->getUser();
		$idUtilisateur = $user->getIdutilisateur();
		
		$em = $this->getDoctrine()->getManager();
		$serviceRepository = $em->getRepository('VMCoreBundle:Service');
		$lesBouquets = $serviceRepository->findAllBouquetsByClient($idUtilisateur);
		return $lesBouquets;
	}

	public function listeAbonnementsAction()
	{  
		$user = $this->get('security.token_storage')->getToken()->getUser();
		$idUtilisateur = $user->getIdutilisateur();
		
		$em = $this->getDoctrine()->getManager();
		$serviceRepository = $em->getRepository('VMCoreBundle:Service');
		$lesAbonnements = $serviceRepository->findAllAbonnementBouquetsByClient($idUtilisateur);
		return $lesAbonnements;
	}

	public function listeEtatsServiceAction()
	{  
		$user = $this->get('security.token_storage')->getToken()->getUser();
		$idUtilisateur = $user->getIdutilisateur();
		
		$em = $this->getDoctrine()->getManager();
		$serviceRepository = $em->getRepository('VMCoreBundle:Service');
		$lesEtatsService = $serviceRepository->findAllEtatServiceByClient($idUtilisateur);
		return $lesEtatsService;
	}

	public function addBouquetAction(Request $request)
	{  
		$user = $this->get('security.token_storage')->getToken()->getUser();
		$idUtilisateur = $user->getIdutilisateur();
		if ($request->isMethod('POST')) {
			$libelleBouquet = $_POST['libelleBouquet'];
			$descriptionBouquet=$_POST['descriptionBouquet'];
			$idService = $_POST['idService'];
			$em = $this->getDoctrine()->getManager();
			$serviceRepository = $em->getRepository('VMCoreBundle:Service');
			$servicesComm = $serviceRepository->addBouquetByClient($idUtilisateur, $libelleBouquet, $descriptionBouquet, $idService);
			$request->getSession()->getFlashBag()->add('notice', 'Bouquet bien enregistré.');
			return $this->redirectToRoute('vm_client_homepage');
		}
		else{
			return $this->redirectToRoute('vm_client_homepage');
		}
	}

	public function deleteSalarieAction($id, Request $request)
	{  
		$user = $this->get('security.token_storage')->getToken()->getUser();
		$idUtilisateur = $user->getIdutilisateur();
		$em = $this->getDoctrine()->getManager();
		$serviceRepository = $em->getRepository('VMCoreBundle:Service');
		$deleteSalarie = $serviceRepository->deleteSalarie($id);
		$request->getSession()->getFlashBag()->add('notice', 'Salarie bien supprimé.');

		return $this->redirectToRoute('vm_client_homepage');		
	}

	public function modifierAbonnementAction($id, Request $request)
	{  
		$user = $this->get('security.token_storage')->getToken()->getUser();
		$idUtilisateur = $user->getIdutilisateur();
		$em = $this->getDoctrine()->getManager();
		$serviceRepository = $em->getRepository('VMCoreBundle:Service');
		$updateAbonnement = $serviceRepository->updateAbonnement($idUtilisateur, $id);
		$request->getSession()->getFlashBag()->add('notice', 'Abonnement bien modifié.');
		return $this->redirectToRoute('vm_client_homepage');		
	}

	public function modifierEtatServiceAction($id, Request $request)
	{  
		$user = $this->get('security.token_storage')->getToken()->getUser();
		$idUtilisateur = $user->getIdutilisateur();
		$em = $this->getDoctrine()->getManager();
		$serviceRepository = $em->getRepository('VMCoreBundle:Service');
		$updateService = $serviceRepository->updateServiceByClient($idUtilisateur, $id);
		$request->getSession()->getFlashBag()->add('notice', 'Etat de service bien modifié.');
		return $this->redirectToRoute('vm_client_homepage');		
	}
}
