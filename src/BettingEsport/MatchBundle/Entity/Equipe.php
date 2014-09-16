<?php

namespace BettingEsport\MatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipe
 */
class Equipe
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $logo;

    /**
     * @var string
     */
    private $listJoueurs;

    /**
     * @var string
     */
    private $lien;

    /**
     * @var string
     */
    private $infos;


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
     * Set nom
     *
     * @param string $nom
     * @return Equipe
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
     * Set logo
     *
     * @param string $logo
     * @return Equipe
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set listJoueurs
     *
     * @param string $listJoueurs
     * @return Equipe
     */
    public function setListJoueurs($listJoueurs)
    {
        $this->listJoueurs = $listJoueurs;

        return $this;
    }

    /**
     * Get listJoueurs
     *
     * @return string 
     */
    public function getListJoueurs()
    {
        return $this->listJoueurs;
    }

    /**
     * Set lien
     *
     * @param string $lien
     * @return Equipe
     */
    public function setLien($lien)
    {
        $this->lien = $lien;

        return $this;
    }

    /**
     * Get lien
     *
     * @return string 
     */
    public function getLien()
    {
        return $this->lien;
    }

    /**
     * Set infos
     *
     * @param string $infos
     * @return Equipe
     */
    public function setInfos($infos)
    {
        $this->infos = $infos;

        return $this;
    }

    /**
     * Get infos
     *
     * @return string 
     */
    public function getInfos()
    {
        return $this->infos;
    }
}
