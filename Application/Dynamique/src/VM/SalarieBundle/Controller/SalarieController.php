<?php

namespace VM\SalarieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class SalarieController extends Controller
{
    public function indexAction(Request $request)
    {
		/* // On vérifie que l'utilisateur dispose bien du rôle ROLE_SALARIE
		if (!$this->get('security.authorization_checker')->isGranted('ROLE_SALARIE')) {
			// Sinon on déclenche une exception « Accès interdit »
			throw new AccessDeniedException('Accès limité aux salariés.');
		}*/
		$services = $this->serviceAction();
		$commandes = $this->commandeAction();
		$servicesCommande = $this->listeServiceCommentaireAction();

		return $this->render("VMSalarieBundle:Default:salarie.html.twig", array('lesServices' => $services, 'lesCommandes' => $commandes
		, 'lesServicesCommandes' => $servicesCommande ));
    }
	
	public function serviceAction()
	{  
		$user = $this->get('security.token_storage')->getToken()->getUser();
		$idUtilisateur = $user->getIdutilisateur();
		
		$em = $this->getDoctrine()->getManager();
		$serviceRepository = $em->getRepository('VMCoreBundle:Service');
		$services = $serviceRepository->findAllServiceByEntrepriseEtat($idUtilisateur);
     
		return $services;     
	}
	
	public function CommandeAction()
	{  
		$user = $this->get('security.token_storage')->getToken()->getUser();
		$idUtilisateur = $user->getIdutilisateur();
		
		$em = $this->getDoctrine()->getManager();
		$serviceRepository = $em->getRepository('VMCoreBundle:Service');
		$commandes = $serviceRepository->findAllCommande($idUtilisateur);
     
		return $commandes;
     
	}
	
	public function listeServiceCommentaireAction()
	{  
		$user = $this->get('security.token_storage')->getToken()->getUser();
		$idUtilisateur = $user->getIdutilisateur();
		
		$em = $this->getDoctrine()->getManager();
		$serviceRepository = $em->getRepository('VMCoreBundle:Service');
		$servicesComm = $serviceRepository->findAllServicesCommande($idUtilisateur);
     
		return $servicesComm;
     
	}
	
	public function addCommentaireAction(Request $request)
	{  
		$user = $this->get('security.token_storage')->getToken()->getUser();
		$idUtilisateur = $user->getIdutilisateur();
		if ($request->isMethod('POST')) {
			$description = $_POST['description'];
			$idService = $_POST['serviceCommentaire'];
			$em = $this->getDoctrine()->getManager();
			$serviceRepository = $em->getRepository('VMCoreBundle:Service');
			$servicesComm = $serviceRepository->addCommentaire($idUtilisateur, $description, $idService);
			$request->getSession()->getFlashBag()->add('notice', 'Commentaire bien enregistré.');
			return $this->redirectToRoute('vm_salarie_homepage');
		}
		else{
			return $this->redirectToRoute('vm_salarie_homepage');
		}
	}
	
	public function deleteCommandeAction($id, Request $request)
	{  
		$user = $this->get('security.token_storage')->getToken()->getUser();
		$idUtilisateur = $user->getIdutilisateur();
		$em = $this->getDoctrine()->getManager();
		$commande = $em->getRepository('VMCoreBundle:Service')->findCommandeByNumberUser($id, $idUtilisateur);
			if (!$commande) {
				$request->getSession()->getFlashBag()->add('notice', 'La commande '.$id.' n\'existe pas.');
				return $this->redirectToRoute('vm_salarie_homepage');
			}
		$serviceRepository = $em->getRepository('VMCoreBundle:Service');
		$deleteCommande = $serviceRepository->deleteCommande($id, $idUtilisateur);
		$request->getSession()->getFlashBag()->add('notice', 'Commande bien supprimée.');
				
		return $this->redirectToRoute('vm_salarie_homepage');		
	}
	
	public function addCommandeAction(Request $request)
	{  
		$user = $this->get('security.token_storage')->getToken()->getUser();
		$idUtilisateur = $user->getIdutilisateur();
		if ($request->isMethod('POST')) {
			$idService = $_POST['serviceACommander'];
			$em = $this->getDoctrine()->getManager();
			$serviceRepository = $em->getRepository('VMCoreBundle:Service');
			$servicesComm = $serviceRepository->addCommande($idUtilisateur, $idService);
			$request->getSession()->getFlashBag()->add('notice', 'Commande bien enregistrée.');
			return $this->redirectToRoute('vm_salarie_homepage');
		}
		else{
			return $this->redirectToRoute('vm_salarie_homepage');
		}
	}
	
	public function viewUpdateCommandeAction($id, Request $request)
	{  	$user = $this->get('security.token_storage')->getToken()->getUser();
		$idUtilisateur = $user->getIdutilisateur();
		$em = $this->getDoctrine()->getManager();
		$commande = $em->getRepository('VMCoreBundle:Service')->findCommandeByNumberUser($id, $idUtilisateur);
		if (!$commande) {
				$request->getSession()->getFlashBag()->add('notice', 'La commande '.$id.' n\'existe pas.');
				return $this->redirectToRoute('vm_salarie_homepage');
			}		
		$services = $this->serviceAction();
		return $this->render("VMSalarieBundle:Default:update.html.twig", array('idCommande' => $id, 'lesServices' => $services));
	}
	
	public function updateCommandeAction(Request $request)
	{  
		$user = $this->get('security.token_storage')->getToken()->getUser();
		$idUtilisateur = $user->getIdutilisateur();
		if ($request->isMethod('POST')) {
			$idCommande = $_POST['idCommande'];
			$idService = $_POST['serviceCommandeModifier'];
			$em = $this->getDoctrine()->getManager();
			$serviceRepository = $em->getRepository('VMCoreBundle:Service');
			$updateCommande = $serviceRepository->updateCommande($idCommande, $idService);
			$request->getSession()->getFlashBag()->add('notice', 'Commande bien modifiée.');
			return $this->redirectToRoute('vm_salarie_homepage');
		}
		else{
			return $this->redirectToRoute('vm_salarie_homepage');
		}		
	}
}
