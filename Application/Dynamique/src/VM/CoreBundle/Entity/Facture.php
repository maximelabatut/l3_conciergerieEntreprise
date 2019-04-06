<?php

namespace VM\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="facture", indexes={@ORM\Index(name="FK_Facture_Abonnement", columns={"idAbonnement"}), @ORM\Index(name="FK_Facture_Etat_facture", columns={"idTypeEtatFacture"}), @ORM\Index(name="FK_Facture_Commande", columns={"idCommande"})})
 * @ORM\Entity
 */
class Facture
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idFacture", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfacture;

    /**
     * @var integer
     *
     * @ORM\Column(name="idAbonnement", type="integer", nullable=true)
     */
    private $idabonnement;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTypeEtatFacture", type="integer", nullable=false)
     */
    private $idtypeetatfacture;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCommande", type="integer", nullable=false)
     */
    private $idcommande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFacture", type="date", nullable=true)
     */
    private $datefacture;



    /**
     * Get idfacture
     *
     * @return integer
     */
    public function getIdfacture()
    {
        return $this->idfacture;
    }

    /**
     * Set idabonnement
     *
     * @param integer $idabonnement
     *
     * @return Facture
     */
    public function setIdabonnement($idabonnement)
    {
        $this->idabonnement = $idabonnement;

        return $this;
    }

    /**
     * Get idabonnement
     *
     * @return integer
     */
    public function getIdabonnement()
    {
        return $this->idabonnement;
    }

    /**
     * Set idtypeetatfacture
     *
     * @param integer $idtypeetatfacture
     *
     * @return Facture
     */
    public function setIdtypeetatfacture($idtypeetatfacture)
    {
        $this->idtypeetatfacture = $idtypeetatfacture;

        return $this;
    }

    /**
     * Get idtypeetatfacture
     *
     * @return integer
     */
    public function getIdtypeetatfacture()
    {
        return $this->idtypeetatfacture;
    }

    /**
     * Set idcommande
     *
     * @param integer $idcommande
     *
     * @return Facture
     */
    public function setIdcommande($idcommande)
    {
        $this->idcommande = $idcommande;

        return $this;
    }

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
     * Set datefacture
     *
     * @param \DateTime $datefacture
     *
     * @return Facture
     */
    public function setDatefacture($datefacture)
    {
        $this->datefacture = $datefacture;

        return $this;
    }

    /**
     * Get datefacture
     *
     * @return \DateTime
     */
    public function getDatefacture()
    {
        return $this->datefacture;
    }
}
