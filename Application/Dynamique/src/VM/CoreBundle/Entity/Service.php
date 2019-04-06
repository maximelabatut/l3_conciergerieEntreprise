<?php

namespace VM\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Table(name="service", indexes={@ORM\Index(name="FK_Service_Prestataire", columns={"idUtilisateurPrestataire"}), @ORM\Index(name="FK_Service_Type_service", columns={"idTypeService"}), @ORM\Index(name="FK_Service_Administrateur", columns={"idUtilisateurAdministrateur"})})
 * @ORM\Entity(repositoryClass="VM\CoreBundle\Entity\ServiceRepository")
 */
class Service
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idService", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idservice;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTypeService", type="integer", nullable=false)
     */
    private $idtypeservice;

    /**
     * @var integer
     *
     * @ORM\Column(name="idUtilisateurAdministrateur", type="integer", nullable=false)
     */
    private $idutilisateuradministrateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="idUtilisateurPrestataire", type="integer", nullable=false)
     */
    private $idutilisateurprestataire;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleService", type="string", length=50, nullable=true)
     */
    private $libelleservice;

    /**
     * @var integer
     *
     * @ORM\Column(name="prixService", type="integer", nullable=true)
     */
    private $prixservice;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionService", type="text", length=65535, nullable=true)
     */
    private $descriptionservice;



    /**
     * Get idservice
     *
     * @return integer
     */
    public function getIdservice()
    {
        return $this->idservice;
    }

    /**
     * Set idtypeservice
     *
     * @param integer $idtypeservice
     *
     * @return Service
     */
    public function setIdtypeservice($idtypeservice)
    {
        $this->idtypeservice = $idtypeservice;

        return $this;
    }

    /**
     * Get idtypeservice
     *
     * @return integer
     */
    public function getIdtypeservice()
    {
        return $this->idtypeservice;
    }

    /**
     * Set idutilisateuradministrateur
     *
     * @param integer $idutilisateuradministrateur
     *
     * @return Service
     */
    public function setIdutilisateuradministrateur($idutilisateuradministrateur)
    {
        $this->idutilisateuradministrateur = $idutilisateuradministrateur;

        return $this;
    }

    /**
     * Get idutilisateuradministrateur
     *
     * @return integer
     */
    public function getIdutilisateuradministrateur()
    {
        return $this->idutilisateuradministrateur;
    }

    /**
     * Set idutilisateurprestataire
     *
     * @param integer $idutilisateurprestataire
     *
     * @return Service
     */
    public function setIdutilisateurprestataire($idutilisateurprestataire)
    {
        $this->idutilisateurprestataire = $idutilisateurprestataire;

        return $this;
    }

    /**
     * Get idutilisateurprestataire
     *
     * @return integer
     */
    public function getIdutilisateurprestataire()
    {
        return $this->idutilisateurprestataire;
    }

    /**
     * Set libelleservice
     *
     * @param string $libelleservice
     *
     * @return Service
     */
    public function setLibelleservice($libelleservice)
    {
        $this->libelleservice = $libelleservice;

        return $this;
    }

    /**
     * Get libelleservice
     *
     * @return string
     */
    public function getLibelleservice()
    {
        return $this->libelleservice;
    }

    /**
     * Set prixservice
     *
     * @param integer $prixservice
     *
     * @return Service
     */
    public function setPrixservice($prixservice)
    {
        $this->prixservice = $prixservice;

        return $this;
    }

    /**
     * Get prixservice
     *
     * @return integer
     */
    public function getPrixservice()
    {
        return $this->prixservice;
    }

    /**
     * Set descriptionservice
     *
     * @param string $descriptionservice
     *
     * @return Service
     */
    public function setDescriptionservice($descriptionservice)
    {
        $this->descriptionservice = $descriptionservice;

        return $this;
    }

    /**
     * Get descriptionservice
     *
     * @return string
     */
    public function getDescriptionservice()
    {
        return $this->descriptionservice;
    }
}
