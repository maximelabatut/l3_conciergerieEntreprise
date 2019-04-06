<?php

namespace VM\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeEtatCommande
 *
 * @ORM\Table(name="type_etat_commande")
 * @ORM\Entity
 */
class TypeEtatCommande
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idTypeEtat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeetat;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleTypeEtat", type="string", length=50, nullable=true)
     */
    private $libelletypeetat;



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
     * Set libelletypeetat
     *
     * @param string $libelletypeetat
     *
     * @return TypeEtatCommande
     */
    public function setLibelletypeetat($libelletypeetat)
    {
        $this->libelletypeetat = $libelletypeetat;

        return $this;
    }

    /**
     * Get libelletypeetat
     *
     * @return string
     */
    public function getLibelletypeetat()
    {
        return $this->libelletypeetat;
    }
}
