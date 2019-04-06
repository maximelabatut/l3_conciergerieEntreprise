<?php

namespace VM\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contenucommande
 *
 * @ORM\Table(name="contenucommande", indexes={@ORM\Index(name="FK_contenuCommande_Service", columns={"idService"})})
 * @ORM\Entity
 */
class Contenucommande
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCommande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idcommande;

    /**
     * @var integer
     *
     * @ORM\Column(name="idService", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idservice;



    /**
     * Set idcommande
     *
     * @param integer $idcommande
     *
     * @return Contenucommande
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
     * Set idservice
     *
     * @param integer $idservice
     *
     * @return Contenucommande
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
}
