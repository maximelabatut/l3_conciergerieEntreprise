<?php

namespace VM\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="FK_Commentaire_Administrateur", columns={"idUtilisateurAdministrateur"}), @ORM\Index(name="FK_Commentaire_Service", columns={"idService"}), @ORM\Index(name="FK_Commentaire_Salarie", columns={"idUtilisateurSalarie"})})
 * @ORM\Entity
 */
class Commentaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCommentaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcommentaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="idService", type="integer", nullable=false)
     */
    private $idservice;

    /**
     * @var integer
     *
     * @ORM\Column(name="idUtilisateurAdministrateur", type="integer", nullable=false)
     */
    private $idutilisateuradministrateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="idUtilisateurSalarie", type="integer", nullable=false)
     */
    private $idutilisateursalarie;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text", length=65535, nullable=true)
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="reponseCommentaire", type="text", length=65535, nullable=true)
     */
    private $reponsecommentaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCommentaire", type="date", nullable=true)
     */
    private $datecommentaire;



    /**
     * Get idcommentaire
     *
     * @return integer
     */
    public function getIdcommentaire()
    {
        return $this->idcommentaire;
    }

    /**
     * Set idservice
     *
     * @param integer $idservice
     *
     * @return Commentaire
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
     * Set idutilisateuradministrateur
     *
     * @param integer $idutilisateuradministrateur
     *
     * @return Commentaire
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
     * Set idutilisateursalarie
     *
     * @param integer $idutilisateursalarie
     *
     * @return Commentaire
     */
    public function setIdutilisateursalarie($idutilisateursalarie)
    {
        $this->idutilisateursalarie = $idutilisateursalarie;

        return $this;
    }

    /**
     * Get idutilisateursalarie
     *
     * @return integer
     */
    public function getIdutilisateursalarie()
    {
        return $this->idutilisateursalarie;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Commentaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set reponsecommentaire
     *
     * @param string $reponsecommentaire
     *
     * @return Commentaire
     */
    public function setReponsecommentaire($reponsecommentaire)
    {
        $this->reponsecommentaire = $reponsecommentaire;

        return $this;
    }

    /**
     * Get reponsecommentaire
     *
     * @return string
     */
    public function getReponsecommentaire()
    {
        return $this->reponsecommentaire;
    }

    /**
     * Set datecommentaire
     *
     * @param \DateTime $datecommentaire
     *
     * @return Commentaire
     */
    public function setDatecommentaire($datecommentaire)
    {
        $this->datecommentaire = $datecommentaire;

        return $this;
    }

    /**
     * Get datecommentaire
     *
     * @return \DateTime
     */
    public function getDatecommentaire()
    {
        return $this->datecommentaire;
    }
}
