DROP TABLE IF EXISTS Bouquet;

DROP TABLE IF EXISTS Commentaire;

DROP TABLE IF EXISTS Facture;

DROP TABLE IF EXISTS Administrateur;

DROP TABLE IF EXISTS Utilisateur;

DROP TABLE IF EXISTS Commande;

DROP TABLE IF EXISTS Type_etat_commande;

DROP TABLE IF EXISTS Service;

DROP TABLE IF EXISTS Salarie;

DROP TABLE IF EXISTS Type_utilisateur;

DROP TABLE IF EXISTS Etat_facture;

DROP TABLE IF EXISTS Entreprise_cliente;

DROP TABLE IF EXISTS Prestataire;

DROP TABLE IF EXISTS Type_paiement;

DROP TABLE IF EXISTS Type_service;

DROP TABLE IF EXISTS Abonnement;

DROP TABLE IF EXISTS EtatService;

DROP TABLE IF EXISTS LotServiceBouquet;

DROP TABLE IF EXISTS contenuCommande;

# -----------------------------------------------------------------------------
#       TABLE : Bouquet
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS Bouquet
 (
   idBouquet INTEGER(2) NOT NULL AUTO_INCREMENT ,
   idUtilisateur INTEGER(2) NOT NULL  ,
   libelleBouquet CHAR(50)   ,
   descriptionBouquet TEXT   ,
   prixMensuel INTEGER(5)   
   , PRIMARY KEY (idBouquet) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : Commentaire
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS Commentaire
 (
   idCommentaire INTEGER(2) NOT NULL AUTO_INCREMENT ,
   idService INTEGER(2) NOT NULL  ,
   idUtilisateurAdministrateur INTEGER(2) NOT NULL  ,
   idUtilisateurSalarie INTEGER(2) NOT NULL  ,
   commentaire TEXT   ,
   reponseCommentaire TEXT   ,
   dateCommentaire DATE   
   , PRIMARY KEY (idCommentaire) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : Facture
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS Facture
 (
   idFacture INTEGER(2) NOT NULL AUTO_INCREMENT ,
   idAbonnement INTEGER(2)   ,
   idTypeEtatFacture INTEGER(2) NOT NULL  ,
   idCommande INTEGER(2) NOT NULL  ,
   dateFacture DATE   
   , PRIMARY KEY (idFacture) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : Administrateur
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS Administrateur
 (
   idUtilisateur INTEGER(2) NOT NULL  ,
   loginUtilisateur CHAR(30)   ,
   motDePasseUtilisateur CHAR(50)   ,
   adresseMailUtilisateur CHAR(50)   ,
   telUtilisateur CHAR(12)   ,
   nomUtilisateur CHAR(30)   ,
   prenomUtilisateur CHAR(30)   
   , PRIMARY KEY (idUtilisateur) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : Utilisateur
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS Utilisateur
 (
   idUtilisateur INTEGER(2) NOT NULL AUTO_INCREMENT ,
   idTypeUtilisateur INTEGER(2) NOT NULL  ,
   loginUtilisateur CHAR(30)   ,
   motDePasseUtilisateur CHAR(50)   ,
   adresseMailUtilisateur CHAR(50)   ,
   telUtilisateur CHAR(12)   ,
   nomUtilisateur CHAR(30)   ,
   prenomUtilisateur CHAR(30)   
   , PRIMARY KEY (idUtilisateur) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : Commande
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS Commande
 (
   idCommande INTEGER(2) NOT NULL AUTO_INCREMENT ,
   idTypePaiement INTEGER(2) NOT NULL  ,
   idTypeEtat INTEGER(2) NOT NULL  ,
   idUtilisateurSalarie INTEGER(2) NOT NULL  ,
   datePriseCommande DATE   ,
   dateLivraisonCommande DATE   
   , PRIMARY KEY (idCommande) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : Type_etat_commande
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS Type_etat_commande
 (
   idTypeEtat INTEGER(2) NOT NULL AUTO_INCREMENT ,
   libelleTypeEtat CHAR(50)   
   , PRIMARY KEY (idTypeEtat) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : Service
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS Service
 (
   idService INTEGER(2) NOT NULL AUTO_INCREMENT ,
   idTypeService INTEGER(2) NOT NULL  ,
   idUtilisateurAdministrateur INTEGER(2) NOT NULL  ,
   idUtilisateurPrestataire INTEGER(2) NOT NULL  ,
   libelleService CHAR(50)   ,
   prixService INTEGER(5)   ,
   descriptionService TEXT   
   , PRIMARY KEY (idService) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : Salarie
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS Salarie
 (
   idUtilisateur INTEGER(2) NOT NULL  ,
   idUtilisateurEntrepriseCliente INTEGER(2) NOT NULL  ,
   dateNaissSalarie DATE   ,
   rueSalarie CHAR(50)   ,
   villeSalarie CHAR(30)   ,
   cpSalarie INTEGER(10)   ,
   loginUtilisateur CHAR(30)   ,
   motDePasseUtilisateur CHAR(50)   ,
   adresseMailUtilisateur CHAR(50)   ,
   telUtilisateur CHAR(12)   ,
   nomUtilisateur CHAR(30)   ,
   prenomUtilisateur CHAR(30)   
   , PRIMARY KEY (idUtilisateur) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : Type_utilisateur
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS Type_utilisateur
 (
   idTypeUtilisateur INTEGER(2) NOT NULL AUTO_INCREMENT ,
   libelleTypeUtilisateur CHAR(15)   
   , PRIMARY KEY (idTypeUtilisateur) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : Etat_facture
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS Etat_facture
 (
   idTypeEtatFacture INTEGER(2) NOT NULL AUTO_INCREMENT ,
   libelleTypeEtatFacture CHAR(50)   
   , PRIMARY KEY (idTypeEtatFacture) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : Entreprise_cliente
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS Entreprise_cliente
 (
   idUtilisateur INTEGER(2) NOT NULL  ,
   rueEntreprise CHAR(50)   ,
   villeEntreprise CHAR(30)   ,
   cpEntreprise INTEGER(10)   ,
   siretEntreprise CHAR(30)   ,
   raisonSocialeEntreprise CHAR(30)   ,
   loginUtilisateur CHAR(30)   ,
   motDePasseUtilisateur CHAR(50)   ,
   adresseMailUtilisateur CHAR(50)   ,
   telUtilisateur CHAR(12)   ,
   nomUtilisateur CHAR(30)   ,
   prenomUtilisateur CHAR(30)   
   , PRIMARY KEY (idUtilisateur) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : Prestataire
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS Prestataire
 (
   idUtilisateur INTEGER(2) NOT NULL  ,
   respService CHAR(30)   ,
   ruePrestataire CHAR(50)   ,
   villePrestataire CHAR(30)   ,
   cpPrestataire INTEGER(4)   ,
   loginUtilisateur CHAR(30)   ,
   motDePasseUtilisateur CHAR(50)   ,
   adresseMailUtilisateur CHAR(50)   ,
   telUtilisateur CHAR(12)   ,
   nomUtilisateur CHAR(30)   ,
   prenomUtilisateur CHAR(30)   
   , PRIMARY KEY (idUtilisateur) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : Type_paiement
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS Type_paiement
 (
   idTypePaiement INTEGER(2) NOT NULL AUTO_INCREMENT ,
   libelleTypePaiement CHAR(50)   
   , PRIMARY KEY (idTypePaiement) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : Type_service
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS Type_service
 (
   idTypeService INTEGER(2) NOT NULL AUTO_INCREMENT ,
   libelleTypeService CHAR(50)   
   , PRIMARY KEY (idTypeService) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : Abonnement
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS Abonnement
 (
   idAbonnement INTEGER(2) NOT NULL AUTO_INCREMENT ,
   idBouquet INTEGER(2) NOT NULL  ,
   idUtilisateur INTEGER(2) NOT NULL  ,
   dureeAbonnement INTEGER(10)   ,
   dateDebAbonnement DATE   
   , PRIMARY KEY (idAbonnement) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : EtatService
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS EtatService
 (
   idUtilisateur INTEGER(2) NOT NULL  ,
   idService INTEGER(2) NOT NULL  ,
   Etat BOOL   
   , PRIMARY KEY (idUtilisateur,idService) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : LotServiceBouquet
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS LotServiceBouquet
 (
   idBouquet INTEGER(2) NOT NULL  ,
   idTypeService INTEGER(2) NOT NULL  
   , PRIMARY KEY (idBouquet,idTypeService) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : contenuCommande
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS contenuCommande
 (
   idCommande INTEGER(2) NOT NULL  ,
   idService INTEGER(2) NOT NULL  
   , PRIMARY KEY (idCommande,idService) 
 ) 
 comment = "";


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE Bouquet 
  ADD FOREIGN KEY FK_Bouquet_Administrateur (idUtilisateur)
      REFERENCES Administrateur (idUtilisateur) ;


ALTER TABLE Commentaire 
  ADD FOREIGN KEY FK_Commentaire_Administrateur (idUtilisateurAdministrateur)
      REFERENCES Administrateur (idUtilisateur) ;


ALTER TABLE Commentaire 
  ADD FOREIGN KEY FK_Commentaire_Service (idService)
      REFERENCES Service (idService) ;


ALTER TABLE Commentaire 
  ADD FOREIGN KEY FK_Commentaire_Salarie (idUtilisateurSalarie)
      REFERENCES Salarie (idUtilisateur) ;


ALTER TABLE Facture 
  ADD FOREIGN KEY FK_Facture_Abonnement (idAbonnement)
      REFERENCES Abonnement (idAbonnement) ;


ALTER TABLE Facture 
  ADD FOREIGN KEY FK_Facture_Etat_facture (idTypeEtatFacture)
      REFERENCES Etat_facture (idTypeEtatFacture) ;


ALTER TABLE Facture 
  ADD FOREIGN KEY FK_Facture_Commande (idCommande)
      REFERENCES Commande (idCommande) ;


ALTER TABLE Administrateur 
  ADD FOREIGN KEY FK_Administrateur_Utilisateur (idUtilisateur)
      REFERENCES Utilisateur (idUtilisateur) ;


ALTER TABLE Utilisateur 
  ADD FOREIGN KEY FK_Utilisateur_Type_utilisateur (idTypeUtilisateur)
      REFERENCES Type_utilisateur (idTypeUtilisateur) ;


ALTER TABLE Commande 
  ADD FOREIGN KEY FK_Commande_Salarie (idUtilisateurSalarie)
      REFERENCES Salarie (idUtilisateur) ;


ALTER TABLE Commande 
  ADD FOREIGN KEY FK_Commande_Type_paiement (idTypePaiement)
      REFERENCES Type_paiement (idTypePaiement) ;


ALTER TABLE Commande 
  ADD FOREIGN KEY FK_Commande_Type_etat_commande (idTypeEtat)
      REFERENCES Type_etat_commande (idTypeEtat) ;


ALTER TABLE Service 
  ADD FOREIGN KEY FK_Service_Prestataire (idUtilisateurPrestataire)
      REFERENCES Prestataire (idUtilisateur) ;


ALTER TABLE Service 
  ADD FOREIGN KEY FK_Service_Type_service (idTypeService)
      REFERENCES Type_service (idTypeService) ;


ALTER TABLE Service 
  ADD FOREIGN KEY FK_Service_Administrateur (idUtilisateurAdministrateur)
      REFERENCES Administrateur (idUtilisateur) ;


ALTER TABLE Salarie 
  ADD FOREIGN KEY FK_Salarie_Entreprise_cliente (idUtilisateurEntrepriseCliente)
      REFERENCES Entreprise_cliente (idUtilisateur) ;


ALTER TABLE Salarie 
  ADD FOREIGN KEY FK_Salarie_Utilisateur (idUtilisateur)
      REFERENCES Utilisateur (idUtilisateur) ;


ALTER TABLE Entreprise_cliente 
  ADD FOREIGN KEY FK_Entreprise_cliente_Utilisateur (idUtilisateur)
      REFERENCES Utilisateur (idUtilisateur) ;


ALTER TABLE Prestataire 
  ADD FOREIGN KEY FK_Prestataire_Utilisateur (idUtilisateur)
      REFERENCES Utilisateur (idUtilisateur) ;


ALTER TABLE Abonnement 
  ADD FOREIGN KEY FK_Abonnement_Entreprise_cliente (idUtilisateur)
      REFERENCES Entreprise_cliente (idUtilisateur) ;


ALTER TABLE Abonnement 
  ADD FOREIGN KEY FK_Abonnement_Bouquet (idBouquet)
      REFERENCES Bouquet (idBouquet) ;


ALTER TABLE EtatService 
  ADD FOREIGN KEY FK_EtatService_Entreprise_cliente (idUtilisateur)
      REFERENCES Entreprise_cliente (idUtilisateur) ;


ALTER TABLE EtatService 
  ADD FOREIGN KEY FK_EtatService_Service (idService)
      REFERENCES Service (idService) ;


ALTER TABLE LotServiceBouquet 
  ADD FOREIGN KEY FK_LotServiceBouquet_Bouquet (idBouquet)
      REFERENCES Bouquet (idBouquet) ;


ALTER TABLE LotServiceBouquet 
  ADD FOREIGN KEY FK_LotServiceBouquet_Type_service (idTypeService)
      REFERENCES Type_service (idTypeService) ;


ALTER TABLE contenuCommande 
  ADD FOREIGN KEY FK_contenuCommande_Commande (idCommande)
      REFERENCES Commande (idCommande) ;


ALTER TABLE contenuCommande 
  ADD FOREIGN KEY FK_contenuCommande_Service (idService)
      REFERENCES Service (idService) ;

INSERT INTO `administrateur` (`idUtilisateur`, `loginUtilisateur`, `motDePasseUtilisateur`, `adresseMailUtilisateur`, `telUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`) VALUES
(1, 'michel123', 'fc6a81ff8f478146123860fb35b0b0a9', 'michel@gmail.com', '600000001', 'Barre', 'Michel'),
(2, 'barry123', '36467f24c184ab65409526558c9e4c53', 'barry@gmail.com', '600000002', 'Franck', 'Barry');

INSERT INTO `bouquet` (`idBouquet`, `idUtilisateur`, `libelleBouquet`, `descriptionBouquet`, `prixMensuel`) VALUES
(1, 2, 'Pack de relaxation', 'Profitez de nos différents services de relaxation afin de prendre du bon temps et décompresser du travail !', 400),
(2, 1, 'Pack dentretien physique', 'Ne vous laissez pas aller et profitez de notre pack de services vous permettant d''entretenir votre physique d''athlète !', 250);

INSERT INTO `commande` (`idCommande`, `idTypePaiement`, `idTypeEtat`, `idUtilisateurSalarie`, `datePriseCommande`, `dateLivraisonCommande`) VALUES
(1, 1, 1, 2, '2016-12-12', '2017-01-08'),
(2, 2, 1, 2, '2016-10-10', '2017-01-02');

INSERT INTO `commentaire` (`idCommentaire`, `idService`, `idUtilisateurAdministrateur`, `idUtilisateurSalarie`,`commentaire`, `reponseCommentaire`, `dateCommentaire`) VALUES
(1, 1, 1, 5,'Très bon service dont la prestation est irréprochable !', 'Merci beaucoup de votre retour, nous faisons tout pour améliorer nos services !','2016-10-03'),
(2, 2, 1, 6,'Terriblement déçu par cette prestation.', 'Toutes nos excuses vis-à-vis de certains personnels au sein de notre équipe.\r\nSachez que des mesures seront prises.','2016-08-21');

INSERT INTO `contenucommande` (`idCommande`, `idService`) VALUES
(1, 1),
(2, 2);

INSERT INTO `entreprise_cliente` (`idUtilisateur`, `rueEntreprise`, `villeEntreprise`, `cpEntreprise`, `siretEntreprise`, `raisonSocialeEntreprise`,`loginUtilisateur`, `motDePasseUtilisateur`, `adresseMailUtilisateur`, `telUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`) VALUES
(1, '124 rue de Barclay', 'Paris', 75000, '443 061 841 00047','SOPRA', 'pierre123', '32b2a14a98fadc51c442e926077ba612', 'pierre@gmail.com', '600000007', 'Bolt', 'Pierre'),
(2, '630 rue du Pastis', 'Marseille', 13000, '312 976 137 00025','THALES', 'marie123', 'a140b766c120bf54f7f35d764bfe853f', 'marie@gmail.com', '600000008', 'Jeanne', 'Marie');

INSERT INTO `etat_facture` (`idTypeEtatFacture`, `libelleTypeEtatFacture`) VALUES
(1, 'Terminée'),
(2, 'En cours');

INSERT INTO `facture` (`idFacture`, `idAbonnement`, `idTypeEtatFacture`, `idCommande`, `dateFacture`) VALUES
(1, 2, 1, 1, '2016-10-03'),
(2, 1, 2, 1, '2016-08-21');

INSERT INTO `lotservicebouquet` (`idBouquet`, `idTypeService`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 3),
(2, 4);

INSERT INTO `prestataire` (`idUtilisateur`, `respService`, `ruePrestataire`, `villePrestataire`, `cpPrestataire`, `loginUtilisateur`, `motDePasseUtilisateur`, `adresseMailUtilisateur`, `telUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`) VALUES
(1, 'Lurlin', '45 rue de Bijou', 'Bordeaux', 33000, 'kevin123', 'd2e7a2105d0fb461fe6f2858cc33942f', 'kevin@gmail.com', '600000003', 'Bidule', 'Kevin'),
(2, 'Ouinedisaïn', '666 rue de St Jean', 'Paris', 75000, 'paul123', '2e69f107d4be5f743461cb66d55d5e6e', 'paul@gmail.com', '600000004', 'Berny', 'Paul');

INSERT INTO `salarie` (`idUtilisateur`, `idUtilisateurEntrepriseCliente`, `dateNaissSalarie`, `rueSalarie`, `villeSalarie`, `cpSalarie`, `loginUtilisateur`, `motDePasseUtilisateur`, `adresseMailUtilisateur`, `telUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`) VALUES
(1, 5, '1995-05-10', '12 rue de la reine', 'Olivet', 45160, 'chris123', 'f7050fa5b63ca3f9c663f606edd93f15', 'chris@gmail.com', '600000005', 'Bert', 'Chris'),
(2, 6, '1978-05-10', '23 rue de Malou', 'Lyon', 69000, 'martin123', '34f74c049edea51851c6924f4a386762', 'martin@gmail.com', '600000006', 'Pazeer', 'Martin');

INSERT INTO `service` (`idService`, `idTypeService`, `idUtilisateurAdministrateur`, `idUtilisateurPrestataire`, `libelleService`, `prixService`,`descriptionService`) VALUES
(1, 1, 2, 3, 'Manucure', 150,'Service de manucure de qualite'),
(2, 1, 2, 4, 'Coiffure', 50,'Service de coiffure automatique'),
(3, 2, 1, 4, 'Yoga', 25,'Service de yoga pour rester zen'),
(4, 2, 1, 3, 'Massage', 85,'Service de massage par Gerard'),
(5, 3, 2, 3, 'Mini-golf', 50,'Service de mini-golf compose de 18 trous'),
(6, 3, 1, 4, 'Lecture', 20,'Service de lecture pour les plus valeureux'),
(7, 4, 1, 3, 'Football', 40,'Service de football pour les plus sportifs'),
(8, 4, 2, 3, 'Musculation', 80,'Service de musculation pour avoir un gros dos');

INSERT INTO `type_etat_commande` (`idTypeEtat`, `libelleTypeEtat`) VALUES
(1, 'Terminée'),
(2, 'En cours');

INSERT INTO `type_paiement` (`idTypePaiement`, `libelleTypePaiement`) VALUES
(1, 'Carte bleue'),
(2, 'Paypal'),
(3, 'PaySafeCard'),
(4, 'Espèces');

INSERT INTO `type_service` (`idTypeService`, `libelleTypeService`) VALUES
(1, 'Soin'),
(2, 'Bien-être'),
(3, 'Détente'),
(4, 'Sport');

INSERT INTO `type_utilisateur` (`idTypeUtilisateur`, `libelleTypeUtilisateur`) VALUES
(1, 'Administrateur'),
(2, 'Prestataire'),
(3, 'salarie'),
(4, 'Entreprise cliente');

INSERT INTO `utilisateur` (`idUtilisateur`, `idTypeUtilisateur`, `loginUtilisateur`, `motDePasseUtilisateur`, `adresseMailUtilisateur`, `telUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`) VALUES
(1, 1, 'michel123', 'fc6a81ff8f478146123860fb35b0b0a9', 'michel@gmail.com', '600000001', 'Barre', 'Michel'),
(2, 1, 'barry123', '36467f24c184ab65409526558c9e4c53', 'barry@gmail.com', '600000002', 'Franck', 'Barry'),
(3, 2, 'kevin123', 'd2e7a2105d0fb461fe6f2858cc33942f', 'kevin@gmail.com', '600000003', 'Bidule', 'Kevin'),
(4, 2, 'paul123', '2e69f107d4be5f743461cb66d55d5e6e', 'paul@gmail.com', '600000004', 'Berny', 'Paul'),
(5, 3, 'chris123', 'f7050fa5b63ca3f9c663f606edd93f15', 'chris@gmail.com', '600000005', 'Bert', 'Chris'),
(6, 3, 'martin123', '34f74c049edea51851c6924f4a386762', 'martin@gmail.com', '600000006', 'Pazeer', 'Martin'),
(7, 4, 'pierre123', '32b2a14a98fadc51c442e926077ba612', 'pierre@gmail.com', '600000007', 'Bolt', 'Pierre'),
(8, 4, 'marie123', 'a140b766c120bf54f7f35d764bfe853f', 'marie@gmail.com', '600000008', 'Jeanne', 'Marie');