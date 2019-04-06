<?php

namespace VM\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lotservicebouquet
 *
 * @ORM\Table(name="lotservicebouquet", indexes={@ORM\Index(name="FK_LotServiceBouquet_Type_service", columns={"idTypeService"})})
 * @ORM\Entity
 */
class Lotservicebouquet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idBouquet", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idbouquet;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTypeService", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idtypeservice;



    /**
     * Set idbouquet
     *
     * @param integer $idbouquet
     *
     * @return Lotservicebouquet
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
     * Set idtypeservice
     *
     * @param integer $idtypeservice
     *
     * @return Lotservicebouquet
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
}
