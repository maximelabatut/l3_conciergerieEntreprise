<?php

namespace VM\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="username", columns={"username"})})
 * @ORM\Entity
 */
class User implements UserInterface
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
     * @ORM\Column(name="username", type="string", length=255, nullable=false, unique=true)
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
    private $roles = array();



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
     * Set username
     *
     * @param string $username
     *
     * @return User
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
     * @return User
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
     * @return User
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
     * @return User
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
     * @return User
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
     * @return User
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
     * @return User
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
     * @return User
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
	
	public function eraseCredentials()
	{
	}
}
