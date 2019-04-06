<?php

namespace VM\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abonnement
 *
 * @ORM\Table(name="abonnement", indexes={@ORM\Index(name="FK_Abonnement_Entreprise_cliente", columns={"idUtilisateur"}), @ORM\Index(name="FK_Abonnement_Bouquet", columns={"idBouquet"})})
 * @ORM\Entity
 */
class Abonnement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idAbonnement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idabonnement;

    /**
     * @var integer
     *
     * @ORM\Column(name="idBouquet", type="integer", nullable=false)
     */
    private $idbouquet;

    /**
     * @var integer
     *
     * @ORM\Column(name="idUtilisateur", type="integer", nullable=false)
     */
    private $idutilisateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="dureeAbonnement", type="integer", nullable=true)
     */
    private $dureeabonnement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebAbonnement", type="date", nullable=true)
     */
    private $datedebabonnement;



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
     * Set idbouquet
     *
     * @param integer $idbouquet
     *
     * @return Abonnement
     */
    public function setIdbouquet($idbouquet)
    {
        $this->idbouquet = $idbouquet;

        return $this;
    }

    /**
     * Get idbouquet
     *
     * @return integer
     */
    public function getIdbouquet()
    {
        return $this->idbouquet;
    }

    /**
     * Set idutilisateur
     *
     * @param integer $idutilisateur
     *
     * @return Abonnement
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
     * Set dureeabonnement
     *
     * @param integer $dureeabonnement
     *
     * @return Abonnement
     */
    public function setDureeabonnement($dureeabonnement)
    {
        $this->dureeabonnement = $dureeabonnement;

        return $this;
    }

    /**
     * Get dureeabonnement
     *
     * @return integer
     */
    public function getDureeabonnement()
    {
        return $this->dureeabonnement;
    }

    /**
     * Set datedebabonnement
     *
     * @param \DateTime $datedebabonnement
     *
     * @return Abonnement
     */
    public function setDatedebabonnement($datedebabonnement)
    {
        $this->datedebabonnement = $datedebabonnement;

        return $this;
    }

    /**
     * Get datedebabonnement
     *
     * @return \DateTime
     */
    public function getDatedebabonnement()
    {
        return $this->datedebabonnement;
    }
}
