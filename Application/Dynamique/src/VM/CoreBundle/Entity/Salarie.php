<?php

namespace VM\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salarie
 *
 * @ORM\Table(name="salarie", uniqueConstraints={@ORM\UniqueConstraint(name="username", columns={"username"})}, indexes={@ORM\Index(name="FK_Salarie_Entreprise_cliente", columns={"idUtilisateurEntrepriseCliente"})})
 * @ORM\Entity
 */
class Salarie
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
     * @var integer
     *
     * @ORM\Column(name="idUtilisateurEntrepriseCliente", type="integer", nullable=false)
     */
    private $idutilisateurentreprisecliente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissSalarie", type="date", nullable=true)
     */
    private $datenaisssalarie;

    /**
     * @var string
     *
     * @ORM\Column(name="rueSalarie", type="string", length=50, nullable=true)
     */
    private $ruesalarie;

    /**
     * @var string
     *
     * @ORM\Column(name="villeSalarie", type="string", length=30, nullable=true)
     */
    private $villesalarie;

    /**
     * @var integer
     *
     * @ORM\Column(name="cpSalarie", type="integer", nullable=true)
     */
    private $cpsalarie;

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
     * Set idutilisateurentreprisecliente
     *
     * @param integer $idutilisateurentreprisecliente
     *
     * @return Salarie
     */
    public function setIdutilisateurentreprisecliente($idutilisateurentreprisecliente)
    {
        $this->idutilisateurentreprisecliente = $idutilisateurentreprisecliente;

        return $this;
    }

    /**
     * Get idutilisateurentreprisecliente
     *
     * @return integer
     */
    public function getIdutilisateurentreprisecliente()
    {
        return $this->idutilisateurentreprisecliente;
    }

    /**
     * Set datenaisssalarie
     *
     * @param \DateTime $datenaisssalarie
     *
     * @return Salarie
     */
    public function setDatenaisssalarie($datenaisssalarie)
    {
        $this->datenaisssalarie = $datenaisssalarie;

        return $this;
    }

    /**
     * Get datenaisssalarie
     *
     * @return \DateTime
     */
    public function getDatenaisssalarie()
    {
        return $this->datenaisssalarie;
    }

    /**
     * Set ruesalarie
     *
     * @param string $ruesalarie
     *
     * @return Salarie
     */
    public function setRuesalarie($ruesalarie)
    {
        $this->ruesalarie = $ruesalarie;

        return $this;
    }

    /**
     * Get ruesalarie
     *
     * @return string
     */
    public function getRuesalarie()
    {
        return $this->ruesalarie;
    }

    /**
     * Set villesalarie
     *
     * @param string $villesalarie
     *
     * @return Salarie
     */
    public function setVillesalarie($villesalarie)
    {
        $this->villesalarie = $villesalarie;

        return $this;
    }

    /**
     * Get villesalarie
     *
     * @return string
     */
    public function getVillesalarie()
    {
        return $this->villesalarie;
    }

    /**
     * Set cpsalarie
     *
     * @param integer $cpsalarie
     *
     * @return Salarie
     */
    public function setCpsalarie($cpsalarie)
    {
        $this->cpsalarie = $cpsalarie;

        return $this;
    }

    /**
     * Get cpsalarie
     *
     * @return integer
     */
    public function getCpsalarie()
    {
        return $this->cpsalarie;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Salarie
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
     * @return Salarie
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
     * @return Salarie
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
     * @return Salarie
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
     * @return Salarie
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
     * @return Salarie
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
     * @return Salarie
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
     * @return Salarie
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
