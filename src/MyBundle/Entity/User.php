<?php
// src/AppBundle/Entity/User.php

namespace MyBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @var integer
     *
     * @ORM\Column(name="telephone", type="integer", nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="codeFiscale", type="string", length=255, nullable=true)
     */
    private $codefiscale;

    /**
     * @var string
     *
     * @ORM\Column(name="statutJuredique", type="string", length=255, nullable=true)
     */
    private $statutjuredique;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="date", nullable=true)
     */
    private $datecreation;

    /**
     * @var string
     *
     * @ORM\Column(name="specialite", type="string", length=255, nullable=true)
     */
    private $specialite;

    /**
     * @var string
     *
     * @ORM\Column(name="niveauEtude", type="string", length=255, nullable=true)
     */
    private $niveauetude;

    /**
     * @var string
     *
     * @ORM\Column(name="diplome", type="string", length=255, nullable=true)
     */
    private $diplome;

    /**
     * @var string
     *
     * @ORM\Column(name="governement", type="string", length=255, nullable=true)
     */
    private $governement;

    /**
     * @var integer
     *
     * @ORM\Column(name="note", type="integer", nullable=true)
     */
    private $note;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return User
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return integer
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return User
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codefiscale
     *
     * @param string $codefiscale
     *
     * @return User
     */
    public function setCodefiscale($codefiscale)
    {
        $this->codefiscale = $codefiscale;

        return $this;
    }

    /**
     * Get codefiscale
     *
     * @return string
     */
    public function getCodefiscale()
    {
        return $this->codefiscale;
    }

    /**
     * Set statutjuredique
     *
     * @param string $statutjuredique
     *
     * @return User
     */
    public function setStatutjuredique($statutjuredique)
    {
        $this->statutjuredique = $statutjuredique;

        return $this;
    }

    /**
     * Get statutjuredique
     *
     * @return string
     */
    public function getStatutjuredique()
    {
        return $this->statutjuredique;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     *
     * @return User
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get datecreation
     *
     * @return \DateTime
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * Set specialite
     *
     * @param string $specialite
     *
     * @return User
     */
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }

    /**
     * Get specialite
     *
     * @return string
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set niveauetude
     *
     * @param string $niveauetude
     *
     * @return User
     */
    public function setNiveauetude($niveauetude)
    {
        $this->niveauetude = $niveauetude;

        return $this;
    }

    /**
     * Get niveauetude
     *
     * @return string
     */
    public function getNiveauetude()
    {
        return $this->niveauetude;
    }

    /**
     * Set diplome
     *
     * @param string $diplome
     *
     * @return User
     */
    public function setDiplome($diplome)
    {
        $this->diplome = $diplome;

        return $this;
    }

    /**
     * Get diplome
     *
     * @return string
     */
    public function getDiplome()
    {
        return $this->diplome;
    }

    /**
     * Set governement
     *
     * @param string $governement
     *
     * @return User
     */
    public function setGovernement($governement)
    {
        $this->governement = $governement;

        return $this;
    }

    /**
     * Get governement
     *
     * @return string
     */
    public function getGovernement()
    {
        return $this->governement;
    }

    /**
     * Set note
     *
     * @param integer $note
     *
     * @return User
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer
     */
    public function getNote()
    {
        return $this->note;
    }
}
