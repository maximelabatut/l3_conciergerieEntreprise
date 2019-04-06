<?php

namespace VM\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntrepriseCliente
 *
 * @ORM\Table(name="entreprise_cliente", uniqueConstraints={@ORM\UniqueConstraint(name="username", columns={"username"})})
 * @ORM\Entity
 */
class EntrepriseCliente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idUtilisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idutilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="rueEntreprise", type="string", length=50, nullable=true)
     */
    private $rueentreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="villeEntreprise", type="string", length=30, nullable=true)
     */
    private $villeentreprise;

    /**
     * @var integer
     *
     * @ORM\Column(name="cpEntreprise", type="integer", nullable=true)
     */
    private $cpentreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="siretEntreprise", type="string", length=30, nullable=true)
     */
    private $siretentreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="raisonSocialeEntreprise", type="string", length=30, nullable=true)
     */
    private $raisonsocialeentreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseMailUtilisateur", type="string", length=50, nullable=true)
     */
    private $adressemailutilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="telUtilisateur", type="string", length=12, nullable=true)
     */
    private $telutilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="nomUtilisateur", type="string", length=30, nullable=true)
     */
    private $nomutilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomUtilisateur", type="string", length=30, nullable=true)
     */
    private $prenomutilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255, nullable=true)
     */
    private $salt;

    /**
     * @var array
     *
     * @ORM\Column(name="roles", type="array", nullable=false)
     */
    private $roles;



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
     * Set rueentreprise
     *
     * @param string $rueentreprise
     *
     * @return EntrepriseCliente
     */
    public function setRueentreprise($rueentreprise)
    {
        $this->rueentreprise = $rueentreprise;

        return $this;
    }

    /**
     * Get rueentreprise
     *
     * @return string
     */
    public function getRueentreprise()
    {
        return $this->rueentreprise;
    }

    /**
     * Set villeentreprise
     *
     * @param string $villeentreprise
     *
     * @return EntrepriseCliente
     */
    public function setVilleentreprise($villeentreprise)
    {
        $this->villeentreprise = $villeentreprise;

        return $this;
    }

    /**
     * Get villeentreprise
     *
     * @return string
     */
    public function getVilleentreprise()
    {
        return $this->villeentreprise;
    }

    /**
     * Set cpentreprise
     *
     * @param integer $cpentreprise
     *
     * @return EntrepriseCliente
     */
    public function setCpentreprise($cpentreprise)
    {
        $this->cpentreprise = $cpentreprise;

        return $this;
    }

    /**
     * Get cpentreprise
     *
     * @return integer
     */
    public function getCpentreprise()
    {
        return $this->cpentreprise;
    }

    /**
     * Set siretentreprise
     *
     * @param string $siretentreprise
     *
     * @return EntrepriseCliente
     */
    public function setSiretentreprise($siretentreprise)
    {
        $this->siretentreprise = $siretentreprise;

        return $this;
    }

    /**
     * Get siretentreprise
     *
     * @return string
     */
    public function getSiretentreprise()
    {
        return $this->siretentreprise;
    }

    /**
     * Set raisonsocialeentreprise
     *
     * @param string $raisonsocialeentreprise
     *
     * @return EntrepriseCliente
     */
    public function setRaisonsocialeentreprise($raisonsocialeentreprise)
    {
        $this->raisonsocialeentreprise = $raisonsocialeentreprise;

        return $this;
    }

    /**
     * Get raisonsocialeentreprise
     *
     * @return string
     */
    public function getRaisonsocialeentreprise()
    {
        return $this->raisonsocialeentreprise;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return EntrepriseCliente
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return EntrepriseCliente
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set adressemailutilisateur
     *
     * @param string $adressemailutilisateur
     *
     * @return EntrepriseCliente
     */
    public function setAdressemailutilisateur($adressemailutilisateur)
    {
        $this->adressemailutilisateur = $adressemailutilisateur;

        return $this;
    }

    /**
     * Get adressemailutilisateur
     *
     * @return string
     */
    public function getAdressemailutilisateur()
    {
        return $this->adressemailutilisateur;
    }

    /**
     * Set telutilisateur
     *
     * @param string $telutilisateur
     *
     * @return EntrepriseCliente
     */
    public function setTelutilisateur($telutilisateur)
    {
        $this->telutilisateur = $telutilisateur;

        return $this;
    }

    /**
     * Get telutilisateur
     *
     * @return string
     */
    public function getTelutilisateur()
    {
        return $this->telutilisateur;
    }

    /**
     * Set nomutilisateur
     *
     * @param string $nomutilisateur
     *
     * @return EntrepriseCliente
     */
    public function setNomutilisateur($nomutilisateur)
    {
        $this->nomutilisateur = $nomutilisateur;

        return $this;
    }

    /**
     * Get nomutilisateur
     *
     * @return string
     */
    public function getNomutilisateur()
    {
        return $this->nomutilisateur;
    }

    /**
     * Set prenomutilisateur
     *
     * @param string $prenomutilisateur
     *
     * @return EntrepriseCliente
     */
    public function setPrenomutilisateur($prenomutilisateur)
    {
        $this->prenomutilisateur = $prenomutilisateur;

        return $this;
    }

    /**
     * Get prenomutilisateur
     *
     * @return string
     */
    public function getPrenomutilisateur()
    {
        return $this->prenomutilisateur;
    }

    /**
     * Set salt
     *
     * @param string $salt
     *
     * @return EntrepriseCliente
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set roles
     *
     * @param array $roles
     *
     * @return EntrepriseCliente
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get roles
     *
     * @return array
     */
    public function getRoles()
    {
        return $this->roles;
    }
}
