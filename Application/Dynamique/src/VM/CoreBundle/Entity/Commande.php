<?php

namespace VM\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", indexes={@ORM\Index(name="FK_Commande_Salarie", columns={"idUtilisateur"}), @ORM\Index(name="FK_Commande_Type_paiement", columns={"idTypePaiement"}), @ORM\Index(name="FK_Commande_Type_etat_commande", columns={"idTypeEtat"})})
 * @ORM\Entity
 */
class Commande
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCommande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcommande;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTypePaiement", type="integer", nullable=false)
     */
    private $idtypepaiement;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTypeEtat", type="integer", nullable=false)
     */
    private $idtypeetat;

    /**
     * @var integer
     *
     * @ORM\Column(name="idUtilisateur", type="integer", nullable=false)
     */
    private $idutilisateur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePriseCommande", type="date", nullable=true)
     */
    private $dateprisecommande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateLivraisonCommande", type="date", nullable=true)
     */
    private $datelivraisoncommande;



    /**
     * Get idcommande
     *
     * @return integer
     */
    public function getIdcommande()
    {
        return $this->idcommande;
    }

    /**
     * Set idtypepaiement
     *
     * @param integer $idtypepaiement
     *
     * @return Commande
     */
    public function setIdtypepaiement($idtypepaiement)
    {
        $this->idtypepaiement = $idtypepaiement;

        return $this;
    }

    /**
     * Get idtypepaiement
     *
     * @return integer
     */
    public function getIdtypepaiement()
    {
        return $this->idtypepaiement;
    }

    /**
     * Set idtypeetat
     *
     * @param integer $idtypeetat
     *
     * @return Commande
     */
    public function setIdtypeetat($idtypeetat)
    {
        $this->idtypeetat = $idtypeetat;

        return $this;
    }

    /**
     * Get idtypeetat
     *
     * @return integer
     */
    public function getIdtypeetat()
    {
        return $this->idtypeetat;
    }

    /**
     * Set idutilisateur
     *
     * @param integer $idutilisateur
     *
     * @return Commande
     */
    public function setIdutilisateur($idutilisateur)
    {
        $this->idutilisateur = $idutilisateur;

        return $this;
    }

    /**
     * Get idutilisateur
     *
     * @return integer
     */
    public function getIdutilisateur()
    {
        return $this->idutilisateur;
    }

    /**
     * Set dateprisecommande
     *
     * @param \DateTime $dateprisecommande
     *
     * @return Commande
     */
    public function setDateprisecommande($dateprisecommande)
    {
        $this->dateprisecommande = $dateprisecommande;

        return $this;
    }

    /**
     * Get dateprisecommande
     *
     * @return \DateTime
     */
    public function getDateprisecommande()
    {
        return $this->dateprisecommande;
    }

    /**
     * Set datelivraisoncommande
     *
     * @param \DateTime $datelivraisoncommande
     *
     * @return Commande
     */
    public function setDatelivraisoncommande($datelivraisoncommande)
    {
        $this->datelivraisoncommande = $datelivraisoncommande;

        return $this;
    }

    /**
     * Get datelivraisoncommande
     *
     * @return \DateTime
     */
    public function getDatelivraisoncommande()
    {
        return $this->datelivraisoncommande;
    }
}
