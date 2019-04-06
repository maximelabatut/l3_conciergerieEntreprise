<?php

namespace VM\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeService
 *
 * @ORM\Table(name="type_service")
 * @ORM\Entity
 */
class TypeService
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idTypeService", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeservice;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleTypeService", type="string", length=50, nullable=true)
     */
    private $libelletypeservice;



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
     * Set libelletypeservice
     *
     * @param string $libelletypeservice
     *
     * @return TypeService
     */
    public function setLibelletypeservice($libelletypeservice)
    {
        $this->libelletypeservice = $libelletypeservice;

        return $this;
    }

    /**
     * Get libelletypeservice
     *
     * @return string
     */
    public function getLibelletypeservice()
    {
        return $this->libelletypeservice;
    }
}
