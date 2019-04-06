<?php

namespace VM\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtatFacture
 *
 * @ORM\Table(name="etat_facture")
 * @ORM\Entity
 */
class EtatFacture
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idTypeEtatFacture", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeetatfacture;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleTypeEtatFacture", type="string", length=50, nullable=true)
     */
    private $libelletypeetatfacture;



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
     * Set libelletypeetatfacture
     *
     * @param string $libelletypeetatfacture
     *
     * @return EtatFacture
     */
    public function setLibelletypeetatfacture($libelletypeetatfacture)
    {
        $this->libelletypeetatfacture = $libelletypeetatfacture;

        return $this;
    }

    /**
     * Get libelletypeetatfacture
     *
     * @return string
     */
    public function getLibelletypeetatfacture()
    {
        return $this->libelletypeetatfacture;
    }
}
