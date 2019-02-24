<?php
namespace MissionBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Mission
 *
 * @ORM\Table(name="mission", indexes={@ORM\Index(name="idEntreprise", columns={"idEntreprise"})})
 * @ORM\Entity
 */
class Mission
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=255, nullable=false)
     */
    private $duree;
    /**
     * @var string
     *
     * @ORM\Column(name="hebergement", type="string", length=255, nullable=false)
     */
    private $hebergement;
    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;
    /**
     * @var string
     *
     * @ORM\Column(name="transport", type="string", length=255, nullable=false)
     */
    private $transport;
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;
    /**
     * @var integer
     *
     * @ORM\Column(name="nombrePersonne", type="integer", nullable=false)
     */
    private $nombrepersonne;
    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEntreprise", referencedColumnName="id", onDelete="cascade")
     * })
     */
    private $idEntreprise;
    /**
     * @ORM\ManyToOne(targetEntity="MissionBundle\Entity\Categorie")
     * @ORM\JoinColumn(name="IdCategorie",referencedColumnName="id")
     *
     */
    Private $categorie;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set duree
     *
     * @param string $duree
     *
     * @return Mission
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return string
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set hebergement
     *
     * @param string $hebergement
     *
     * @return Mission
     */
    public function setHebergement($hebergement)
    {
        $this->hebergement = $hebergement;

        return $this;
    }

    /**
     * Get hebergement
     *
     * @return string
     */
    public function getHebergement()
    {
        return $this->hebergement;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Mission
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set transport
     *
     * @param string $transport
     *
     * @return Mission
     */
    public function setTransport($transport)
    {
        $this->transport = $transport;

        return $this;
    }

    /**
     * Get transport
     *
     * @return string
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Mission
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
     * Set nombrepersonne
     *
     * @param integer $nombrepersonne
     *
     * @return Mission
     */
    public function setNombrepersonne($nombrepersonne)
    {
        $this->nombrepersonne = $nombrepersonne;

        return $this;
    }

    /**
     * Get nombrepersonne
     *
     * @return integer
     */
    public function getNombrepersonne()
    {
        return $this->nombrepersonne;
    }



    /**
     * Set categorie
     *
     * @param \MissionBundle\Entity\Categorie $categorie
     *
     * @return Mission
     */
    public function setCategorie(\MissionBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \MissionBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }



    /**
     * Set idEntreprise
     *
     * @param \MissionBundle\Entity\User $idEntreprise
     *
     * @return Mission
     */
    public function setIdEntreprise(\MissionBundle\Entity\User $idEntreprise = null)
    {
        $this->idEntreprise = $idEntreprise;

        return $this;
    }

    /**
     * Get idEntreprise
     *
     * @return \MissionBundle\Entity\User
     */
    public function getIdEntreprise()
    {
        return $this->idEntreprise;
    }
}
