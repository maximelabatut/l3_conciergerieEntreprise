<?php

namespace VM\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etatservice
 *
 * @ORM\Table(name="etatservice", indexes={@ORM\Index(name="FK_EtatService_Service", columns={"idService"})})
 * @ORM\Entity
 */
class Etatservice
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idUtilisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idutilisateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="idService", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idservice;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Etat", type="boolean", nullable=true)
     */
    private $etat;



    /**
     * Set idutilisateur
     *
     * @param integer $idutilisateur
     *
     * @return Etatservice
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
     * Set idservice
     *
     * @param integer $idservice
     *
     * @return Etatservice
     */
    public function setIdservice($idservice)
    {
        $this->idservice = $idservice;

        return $this;
    }

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
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Etatservice
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean
     */
    public function getEtat()
    {
        return $this->etat;
    }
}
