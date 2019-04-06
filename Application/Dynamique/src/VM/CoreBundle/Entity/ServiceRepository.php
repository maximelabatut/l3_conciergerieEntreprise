<?php
namespace VM\CoreBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\HttpFoundation\Request;

class ServiceRepository extends EntityRepository
{
    public function findAllServiceByEntrepriseEtat($idUtilisateur)
    {		
		$rawSql = "SELECT idUtilisateurEntrepriseCliente FROM Salarie WHERE idUtilisateur=".$idUtilisateur."";
		$stmt = $this->getEntityManager()->getConnection()->prepare($rawSql);
		$stmt->execute([]);
		$idEntrepriseCliente = $stmt->fetch();
		
        
		$rawSql2 = "SELECT idService, libelleService, descriptionService, libelleTypeService, prixService FROM Service NATURAL JOIN Type_service NATURAL JOIN EtatService WHERE idUtilisateur=".$idEntrepriseCliente['idUtilisateurEntrepriseCliente']." AND Etat=1";
		$stmt2 = $this->getEntityManager()->getConnection()->prepare($rawSql2);
		$stmt2->execute([]);

		return $stmt2->fetchAll();
    }
	public function findAllCommande($idUtilisateur)
    {		
		$rawSql2 = "SELECT idCommande, libelleService, datePriseCommande, IFNULL(dateLivraisonCommande,'Pas encore livrée') as datecommande, prixService, libelleTypeEtat FROM type_etat_commande NATURAL JOIN Commande NATURAL JOIN contenuCommande NATURAL JOIN Service WHERE idUtilisateur=".$idUtilisateur."";
		$stmt2 = $this->getEntityManager()->getConnection()->prepare($rawSql2);
		$stmt2->execute([]);
		return $stmt2->fetchAll();
    }
	
	public function findAllServicesCommande($idUtilisateur)
    {		
		$rawSql2 = "SELECT idService, libelleService FROM Service NATURAL JOIN contenuCommande NATURAL JOIN Commande WHERE idUtilisateur=".$idUtilisateur."";
		$stmt2 = $this->getEntityManager()->getConnection()->prepare($rawSql2);
		$stmt2->execute([]);
		return $stmt2->fetchAll();
    }
	
	public function addCommentaire($idUtilisateur, $description, $idService) 
    {		
		$descriptionMySql = "'".$description."'";
		$dateMySql = "'".date("Y-m-d")."'";
		$rawSql2 = "INSERT INTO Commentaire (idService, idUtilisateurAdministrateur, idUtilisateurSalarie, commentaire, dateCommentaire) VALUES (".$idService.", 1, ".$idUtilisateur.",".$descriptionMySql.",".$dateMySql.")";
		$stmt2 = $this->getEntityManager()->getConnection()->prepare($rawSql2);
		return $stmt2->execute([]);
    }
	
	public function findCommandeByNumberUser($id, $idUtilisateur) 
    {
		$rawSql2 = "Select * FROM Commande WHERE idCommande =".$id." AND idUtilisateur =".$idUtilisateur."";
		$stmt2 = $this->getEntityManager()->getConnection()->prepare($rawSql2);
		$stmt2->execute([]);
		return $stmt2->fetchAll();
    }
	
	public function deleteCommande($id, $idUtilisateur) 
    {	
		$rawSql2 = "DELETE FROM ContenuCommande WHERE idCommande=".$id."";
		$stmt2 = $this->getEntityManager()->getConnection()->prepare($rawSql2);
		$stmt2->execute([]);
		$rawSql3 = "DELETE FROM Commande WHERE idCommande=".$id." AND idUtilisateur=".$idUtilisateur."";
		$stmt3 = $this->getEntityManager()->getConnection()->prepare($rawSql3);
		return $stmt3->execute([]);
    }
	
	public function addCommande($idUtilisateur, $idService) 
    {		
		$dateMySql = "'".date("Y-m-d")."'";
		$date_debut     =   date('Y-m-d');
		list($annee, $mois, $jour) = split('[-]', $date_debut);
		$jour_supp      =   '7';
		$date_fin  =   date("Y-m-d", mktime(0, 0, 0, $mois, $jour+$jour_supp, $annee));
		$datefinMySql = "'".$date_fin."'";
		$rawSql2 = "INSERT INTO Commande (idTypeEtat, idUtilisateur,datePriseCommande, dateLivraisonCommande) VALUES (2, ".$idUtilisateur.",".$dateMySql.",".$datefinMySql.")";
		$stmt2 = $this->getEntityManager()->getConnection()->prepare($rawSql2);
		$stmt2->execute([]);
		$rawSql3 = "SELECT MAX(idCommande) as test FROM Commande WHERE idUtilisateur=".$idUtilisateur."";
		$stmt3 = $this->getEntityManager()->getConnection()->prepare($rawSql3);
		$stmt3->execute([]);
		$idMaxCommande = $stmt3->fetch();
		$rawSql = "INSERT INTO contenuCommande (idCommande, idService) VALUES (".$idMaxCommande['test'].",".$idService.")";
		$stmt = $this->getEntityManager()->getConnection()->prepare($rawSql);
		$stmt->execute([]);
    }
	
	public function updateCommande($idCommande, $idService) 
    {	
		$rawSql3 = "UPDATE contenuCommande SET idService =".$idService." WHERE idCommande=".$idCommande."";
		$stmt3 = $this->getEntityManager()->getConnection()->prepare($rawSql3);
		return $stmt3->execute([]);
    }
	
	public function findAllServicesPrestataire($idUtilisateur)
    {		
		$rawSql2 = "SELECT idService, libelleService, descriptionService, prixService, libelleTypeService FROM type_service NATURAL JOIN Service s INNER JOIN prestataire p ON s.idUtilisateurPrestataire = p.idUtilisateur WHERE idUtilisateurPrestataire = ".$idUtilisateur."";
		$stmt2 = $this->getEntityManager()->getConnection()->prepare($rawSql2);
		$stmt2->execute([]);
		return $stmt2->fetchAll();
    }
	
	public function findCommentaireById($id, $idUtilisateur)
    {		
		$rawSql2 = "SELECT idCommentaire, commentaire, dateCommentaire, s.username, c.idService, libelleService FROM prestataire p INNER JOIN service se on p.idUtilisateur = se.idUtilisateurPrestataire INNER JOIN commentaire c on se.idService = c.idService INNER JOIN salarie s on c.idUtilisateurSalarie = s.idUtilisateur WHERE c.idService = ".$id." AND p.idUtilisateur = ".$idUtilisateur."";
		$stmt2 = $this->getEntityManager()->getConnection()->prepare($rawSql2);
		$stmt2->execute([]);
		return $stmt2->fetchAll();
    }
	
	public function deleteService($id, $idUtilisateur) 
    {	
		$rawSql2 = "DELETE FROM Service WHERE idService=".$id." AND  idUtilisateurPrestataire=".$idUtilisateur."";
		$stmt2 = $this->getEntityManager()->getConnection()->prepare($rawSql2);
		return $stmt2->execute([]);
    }
	
	public function findServiceByNumberUser($id, $idUtilisateur) 
    {
		$rawSql2 = "Select * FROM Service WHERE idService =".$id." AND idUtilisateurPrestataire =".$idUtilisateur."";
		$stmt2 = $this->getEntityManager()->getConnection()->prepare($rawSql2);
		$stmt2->execute([]);
		return $stmt2->fetchAll();
    }
	
	public function findTypeService() 
    {
		$rawSql2 = "Select idTypeService, libelleTypeService FROM type_service";
		$stmt2 = $this->getEntityManager()->getConnection()->prepare($rawSql2);
		$stmt2->execute([]);
		return $stmt2->fetchAll();
    }
	
	public function addService($libelleService, $prixService, $descriptionService, $typeService, $idUtilisateur)
    {	
		$libelleService = "'".$libelleService."'";
		$descriptionService = "'".$descriptionService."'";
		$rawSql = "INSERT INTO Service (idTypeService,idUtilisateurAdministrateur, idUtilisateurPrestataire, libelleService, prixService, descriptionService) VALUES (".$typeService.", 1,".$idUtilisateur." , ".$libelleService.", ".$prixService.", ".$descriptionService.")";
		$stmt = $this->getEntityManager()->getConnection()->prepare($rawSql);
		$stmt->execute([]);
    }
	
	public function updateService($idService, $libelleService, $prixService, $descriptionService, $typeService, $idUtilisateur) 
    {	
		$libelleService = "'".$libelleService."'";
		$descriptionService = "'".$descriptionService."'";
		$rawSql3 = "UPDATE service SET idTypeService = ".$typeService.", idUtilisateurAdministrateur = 1, libelleService = ".$libelleService.", prixService = ".$prixService.", descriptionService = ".$descriptionService." WHERE idUtilisateurPrestataire = ".$idUtilisateur." AND idService = ".$idService."";
		$stmt3 = $this->getEntityManager()->getConnection()->prepare($rawSql3);
		return $stmt3->execute([]);
    }

    public function findAllSalariesByClient($idUtilisateur) 
    {
		$rawSql2 = "SELECT idUtilisateur, nomUtilisateur, prenomUtilisateur, dateNaissSalarie, rueSalarie, villeSalarie, cpSalarie, adresseMailUtilisateur, telUtilisateur FROM Salarie WHERE idUtilisateurEntrepriseCliente =".$idUtilisateur."";
		$stmt2 = $this->getEntityManager()->getConnection()->prepare($rawSql2);
		$stmt2->execute([]);
		return $stmt2->fetchAll();
    }

    public function findAllServiceByClient($idUtilisateur) 
    {
		$rawSql2 = "SELECT idService, libelleService, descriptionService, libelleTypeService, prixService FROM Service NATURAL JOIN type_service";
		$stmt2 = $this->getEntityManager()->getConnection()->prepare($rawSql2);
		$stmt2->execute([]);
		return $stmt2->fetchAll();
    }
    public function findAllBouquetsByClient($idUtilisateur) 
    {
		$rawSql2 = "SELECT idBouquet, libelleBouquet, descriptionBouquet, libelleTypeService, prixmensuel FROM Bouquet NATURAL JOIN LotServiceBouquet NATURAL JOIN Type_service WHERE idUtilisateur=".$idUtilisateur." ORDER BY idBouquet";
		$stmt2 = $this->getEntityManager()->getConnection()->prepare($rawSql2);
		$stmt2->execute([]);
		return $stmt2->fetchAll();
    }
    public function addBouquetByClient($idUtilisateur, $libelleBouquet, $descriptionBouquet, $idService)
    {	
		$libelleBouquet = "'".$libelleBouquet."'";
		$descriptionBouquet = "'".$descriptionBouquet."'";
		$rawSql1 = "SELECT prixService FROM service WHERE idService=".$idService."";
		$stmt1 = $this->getEntityManager()->getConnection()->prepare($rawSql1);
		$stmt1->execute([]);
		$prixService = $stmt1->fetch();

		$rawSql2 = "SELECT idTypeService FROM Service WHERE idService = ".$idService." ";
		$stmt2 = $this->getEntityManager()->getConnection()->prepare($rawSql2);
		$stmt2->execute([]);
		$idTypeService = $stmt2->fetch();

		$rawSql3 = "INSERT INTO Bouquet (idUtilisateur, libelleBouquet, descriptionBouquet, prixMensuel) VALUES (".$idUtilisateur.",".$libelleBouquet.",".$descriptionBouquet.",".$prixService['prixService'].")";
		$stmt3 = $this->getEntityManager()->getConnection()->prepare($rawSql3);
		$stmt3->execute([]);

		$rawSql4 = "SELECT MAX(idBouquet) as 'idBouquet' FROM Bouquet WHERE idUtilisateur=".$idUtilisateur."";
		$stmt4 = $this->getEntityManager()->getConnection()->prepare($rawSql4);
		$stmt4->execute([]);
		$idBouquet = $stmt4 -> fetch();

		$rawSql5 = "INSERT INTO LotServiceBouquet (idBouquet,idTypeService) VALUES (".$idBouquet['idBouquet'].",".$idTypeService['idTypeService'].")";
		$stmt5 = $this->getEntityManager()->getConnection()->prepare($rawSql5);
		$stmt5->execute([]);
    }
    public function deleteSalarie($idUtilisateur) 
    {	
		$rawSql = "DELETE FROM Salarie WHERE idUtilisateur=".$idUtilisateur."";
		$stmt = $this->getEntityManager()->getConnection()->prepare($rawSql);
		return $stmt->execute([]);
    }
    public function findAllAbonnementBouquetsByClient($idUtilisateur) 
    {	
		$rawSql = "SELECT idBouquet FROM Abonnement WHERE idUtilisateur=".$idUtilisateur."";
		$stmt = $this->getEntityManager()->getConnection()->prepare($rawSql);
		$stmt->execute([]);
		return $stmt->fetchAll();
    }
    public function findAllEtatServiceByClient($idUtilisateur) 
    {	
		$rawSql = "SELECT idUtilisateur, idService, etat FROM etatService WHERE idUtilisateur=".$idUtilisateur."";
		$stmt = $this->getEntityManager()->getConnection()->prepare($rawSql);
		$stmt->execute([]);
		return $stmt->fetchAll();
    }
    public function updateAbonnement($idUtilisateur, $idBouquet) 
    {	
		$rawSql = "SELECT * FROM Abonnement WHERE idUtilisateur=".$idUtilisateur." AND idBouquet=".$idBouquet."";
		$stmt = $this->getEntityManager()->getConnection()->prepare($rawSql);
		$stmt->execute([]);
		$estAbonne = $stmt -> fetch();

		if($estAbonne)
		{
			$rawSql2 = "DELETE FROM Abonnement WHERE idBouquet=".$idBouquet." AND idUtilisateur=".$idUtilisateur."";
			$stmt2 = $this->getEntityManager()->getConnection()->prepare($rawSql2);
			return $stmt2->execute([]);
		}
		else
		{
			$rawSql3 = "INSERT INTO Abonnement (idBouquet, idUtilisateur) VALUES (".$idBouquet.",".$idUtilisateur.")";
			$stmt3 = $this->getEntityManager()->getConnection()->prepare($rawSql3);
			$stmt3->execute([]);
		}
    }
    public function updateServiceByClient($idUtilisateur, $idService) 
    {	
		$rawSql = "SELECT * FROM etatService  WHERE idUtilisateur=".$idUtilisateur." AND idService=".$idService."";
		$stmt = $this->getEntityManager()->getConnection()->prepare($rawSql);
		$stmt->execute([]);
		$estactive = $stmt -> fetch();

		if($estactive)
		{
			if($estactive['Etat']==0)
			{
				$rawSql2 = "UPDATE EtatService SET Etat=1 WHERE idUtilisateur=".$idUtilisateur." AND idService=".$idService."";
				$stmt2 = $this->getEntityManager()->getConnection()->prepare($rawSql2);
				return $stmt2->execute([]);	
			}
			else
			{
				$rawSql3 = "UPDATE EtatService SET Etat=0 WHERE idUtilisateur=".$idUtilisateur." AND idService=".$idService."";
				$stmt3 = $this->getEntityManager()->getConnection()->prepare($rawSql3);
				return $stmt3->execute([]);	
			}
			
		}
		else
		{
			$rawSql4 = "INSERT INTO EtatService (idUtilisateur, idService, Etat) VALUES (".$idUtilisateur.",".$idService.",1)";
			$stmt4 = $this->getEntityManager()->getConnection()->prepare($rawSql4);
			$stmt4->execute([]);
		}
    }
}