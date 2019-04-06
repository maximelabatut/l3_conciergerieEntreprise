<?php

namespace VM\PrestataireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class PrestataireController extends Controller
{
    public function indexAction(Request $request)
    {
		$typeService = $this->listeTypeServiceAction();
		$servicesPrestataire = $this->servicePrestataireAction();
        return $this->render('VMPrestataireBundle:Default:prestataire.html.twig', array('lesServicesPrestataire' => $servicesPrestataire, 'lesTypesService' => $typeService));
    }
	
	public function servicePrestataireAction()
	{  
		$user = $this->get('security.token_storage')->getToken()->getUser();
		$idUtilisateur = $user->getIdutilisateur();
		
		$em = $this->getDoctrine()->getManager();
		$serviceRepository = $em->getRepository('VMCoreBundle:Service');
		$servicesPrestataire = $serviceRepository->findAllServicesPrestataire($idUtilisateur);
     
		return $servicesPrestataire;
     
	}
	
	public function viewCommentaireAction(Request $request)
	{  
		$user = $this->get('security.token_storage')->getToken()->getUser();
		$idUtilisateur = $user->getIdutilisateur();
		if ($request->isMethod('POST')) {
			$servicesPrestataire = $this->servicePrestataireAction();
			$id = $_POST['servicePrestataireCommentaire'];
			$em = $this->getDoctrine()->getManager();
			$commentaires = $em->getRepository('VMCoreBundle:Service')->findCommentaireById($id, $idUtilisateur);
			return $this->render('VMPrestataireBundle:Default:view.html.twig', array('lesCommentaires' => $commentaires));
		}
		else{
			return $this->redirectToRoute('vm_prestataire_homepage');  
		}		 
	}
	
	public function deleteServiceAction($id, Request $request)
	{  
		$user = $this->get('security.token_storage')->getToken()->getUser();
		$idUtilisateur = $user->getIdutilisateur();
		$em = $this->getDoctrine()->getManager();
		$service = $em->getRepository('VMCoreBundle:Service')->findServiceByNumberUser($id, $idUtilisateur);
			if (!$service) {
				$request->getSession()->getFlashBag()->add('notice', 'Le service '.$id.' n\'existe pas.');
				return $this->redirectToRoute('vm_prestataire_homepage');
			}
		$serviceRepository = $em->getRepository('VMCoreBundle:Service');
		$deleteService = $serviceRepository->deleteService($id, $idUtilisateur);
		$request->getSession()->getFlashBag()->add('notice', 'Service bien supprimé.');
				
		return $this->redirectToRoute('vm_prestataire_homepage');		
	}
	
	public function listeTypeServiceAction()
	{  
		$user = $this->get('security.token_storage')->getToken()->getUser();
		$idUtilisateur = $user->getIdutilisateur();
		$em = $this->getDoctrine()->getManager();
		$typeService = $em->getRepository('VMCoreBundle:Service')->findTypeService();		
		return $typeService;		
	}
	
	public function addServiceAction(Request $request)
	{  
		$user = $this->get('security.token_storage')->getToken()->getUser();
		$idUtilisateur = $user->getIdutilisateur();
		if ($request->isMethod('POST')) {
			$libelleService = $_POST['service'];
			$prixService = $_POST['prix'];
			$descriptionService = $_POST['description'];
			$typeService = $_POST['typeService'];
			$em = $this->getDoctrine()->getManager();
			$serviceRepository = $em->getRepository('VMCoreBundle:Service');
			$services = $serviceRepository->addService($libelleService, $prixService, $descriptionService, $typeService, $idUtilisateur);
			$request->getSession()->getFlashBag()->add('notice', 'Service bien enregistré.');
			return $this->redirectToRoute('vm_prestataire_homepage');
		}
		else{
			return $this->redirectToRoute('vm_prestataire_homepage');
		}
	}
}
