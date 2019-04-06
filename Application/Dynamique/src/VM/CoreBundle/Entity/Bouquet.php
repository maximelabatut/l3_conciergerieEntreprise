<?php

namespace VM\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bouquet
 *
 * @ORM\Table(name="bouquet", indexes={@ORM\Index(name="FK_Bouquet_Administrateur", columns={"idUtilisateur"})})
 * @ORM\Entity
 */
class Bouquet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idBouquet", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbouquet;

    /**
     * @var integer
     *
     * @ORM\Column(name="idUtilisateur", type="integer", nullable=false)
     */
    private $idutilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleBouquet", type="string", length=50, nullable=true)
     */
    private $libellebouquet;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionBouquet", type="text", length=65535, nullable=true)
     */
    private $descriptionbouquet;

    /**
     * @var integer
     *
     * @ORM\Column(name="prixMensuel", type="integer", nullable=true)
     */
    private $prixmensuel;



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
     * @return Bouquet
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
     * Set libellebouquet
     *
     * @param string $libellebouquet
     *
     * @return Bouquet
     */
    public function setLibellebouquet($libellebouquet)
    {
        $this->libellebouquet = $libellebouquet;

        return $this;
    }

    /**
     * Get libellebouquet
     *
     * @return string
     */
    public function getLibellebouquet()
    {
        return $this->libellebouquet;
    }

    /**
     * Set descriptionbouquet
     *
     * @param string $descriptionbouquet
     *
     * @return Bouquet
     */
    public function setDescriptionbouquet($descriptionbouquet)
    {
        $this->descriptionbouquet = $descriptionbouquet;

        return $this;
    }

    /**
     * Get descriptionbouquet
     *
     * @return string
     */
    public function getDescriptionbouquet()
    {
        return $this->descriptionbouquet;
    }

    /**
     * Set prixmensuel
     *
     * @param integer $prixmensuel
     *
     * @return Bouquet
     */
    public function setPrixmensuel($prixmensuel)
    {
        $this->prixmensuel = $prixmensuel;

        return $this;
    }

    /**
     * Get prixmensuel
     *
     * @return integer
     */
    public function getPrixmensuel()
    {
        return $this->prixmensuel;
    }
}
