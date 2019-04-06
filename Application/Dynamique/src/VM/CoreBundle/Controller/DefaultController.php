<?php

namespace VM\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
      // Si le visiteur est déjà identifié, on le redirige vers sa section
		if ($this->get('security.authorization_checker')->isGranted('ROLE_SALARIE')) {
			return $this->redirectToRoute('vm_salarie_homepage');
		}
		if ($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
			return $this->redirectToRoute('vm_administrateur_homepage');
		}
		if ($this->get('security.authorization_checker')->isGranted('ROLE_PRESTATAIRE')) {
			return $this->redirectToRoute('vm_prestataire_homepage');
		}
		if ($this->get('security.authorization_checker')->isGranted('ROLE_CLIENT')) {
			return $this->redirectToRoute('vm_client_homepage');
		}
		/*if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_ANONYMOUSLY')) {
			$messageConnexion = 'Vous n\'êtes pas connecté..';
		}*/
		

		// Le service authentication_utils permet de récupérer le nom d'utilisateur
		// et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
		// (mauvais mot de passe par exemple)
		$authenticationUtils = $this->get('security.authentication_utils');

		return $this->render('VMCoreBundle:Default:index.html.twig', array(
		'last_username' => $authenticationUtils->getLastUsername(),
		'error'         => $authenticationUtils->getLastAuthenticationError(),
		));
    }
}
