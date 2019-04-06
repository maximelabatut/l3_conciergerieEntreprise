<?php

namespace VM\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypePaiement
 *
 * @ORM\Table(name="type_paiement")
 * @ORM\Entity
 */
class TypePaiement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idTypePaiement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypepaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleTypePaiement", type="string", length=50, nullable=true)
     */
    private $libelletypepaiement;



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
     * Set libelletypepaiement
     *
     * @param string $libelletypepaiement
     *
     * @return TypePaiement
     */
    public function setLibelletypepaiement($libelletypepaiement)
    {
        $this->libelletypepaiement = $libelletypepaiement;

        return $this;
    }

    /**
     * Get libelletypepaiement
     *
     * @return string
     */
    public function getLibelletypepaiement()
    {
        return $this->libelletypepaiement;
    }
}
