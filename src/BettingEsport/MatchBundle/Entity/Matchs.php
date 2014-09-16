<?php

namespace BettingEsport\MatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matchs
 */
class Matchs
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idJ1;

    /**
     * @var integer
     */
    private $idJ2;

    /**
     * @var \DateTime
     */
    private $dateHeureDebut;

    /**
     * @var \DateTime
     */
    private $dateHeureFinParis;

    /**
     * @var integer
     */
    private $resultat;

    /**
     * @var integer
     */
    private $coteJ1;

    /**
     * @var integer
     */
    private $coteJ2;

    /**
     * @var string
     */
    private $jeu;


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
     * Set idJ1
     *
     * @param integer $idJ1
     * @return Matchs
     */
    public function setIdJ1($idJ1)
    {
        $this->idJ1 = $idJ1;

        return $this;
    }

    /**
     * Get idJ1
     *
     * @return integer 
     */
    public function getIdJ1()
    {
        return $this->idJ1;
    }

    /**
     * Set idJ2
     *
     * @param integer $idJ2
     * @return Matchs
     */
    public function setIdJ2($idJ2)
    {
        $this->idJ2 = $idJ2;

        return $this;
    }

    /**
     * Get idJ2
     *
     * @return integer 
     */
    public function getIdJ2()
    {
        return $this->idJ2;
    }

    /**
     * Set dateHeureDebut
     *
     * @param \DateTime $dateHeureDebut
     * @return Matchs
     */
    public function setDateHeureDebut($dateHeureDebut)
    {
        $this->dateHeureDebut = $dateHeureDebut;

        return $this;
    }

    /**
     * Get dateHeureDebut
     *
     * @return \DateTime 
     */
    public function getDateHeureDebut()
    {
        return $this->dateHeureDebut;
    }

    /**
     * Set dateHeureFinParis
     *
     * @param \DateTime $dateHeureFinParis
     * @return Matchs
     */
    public function setDateHeureFinParis($dateHeureFinParis)
    {
        $this->dateHeureFinParis = $dateHeureFinParis;

        return $this;
    }

    /**
     * Get dateHeureFinParis
     *
     * @return \DateTime 
     */
    public function getDateHeureFinParis()
    {
        return $this->dateHeureFinParis;
    }

    /**
     * Set resultat
     *
     * @param integer $resultat
     * @return Matchs
     */
    public function setResultat($resultat)
    {
        $this->resultat = $resultat;

        return $this;
    }

    /**
     * Get resultat
     *
     * @return integer 
     */
    public function getResultat()
    {
        return $this->resultat;
    }

    /**
     * Set coteJ1
     *
     * @param integer $coteJ1
     * @return Matchs
     */
    public function setCoteJ1($coteJ1)
    {
        $this->coteJ1 = $coteJ1;

        return $this;
    }

    /**
     * Get coteJ1
     *
     * @return integer 
     */
    public function getCoteJ1()
    {
        return $this->coteJ1;
    }

    /**
     * Set coteJ2
     *
     * @param integer $coteJ2
     * @return Matchs
     */
    public function setCoteJ2($coteJ2)
    {
        $this->coteJ2 = $coteJ2;

        return $this;
    }

    /**
     * Get coteJ2
     *
     * @return integer 
     */
    public function getCoteJ2()
    {
        return $this->coteJ2;
    }

    /**
     * Set jeu
     *
     * @param string $jeu
     * @return Matchs
     */
    public function setJeu($jeu)
    {
        $this->jeu = $jeu;

        return $this;
    }

    /**
     * Get jeu
     *
     * @return string 
     */
    public function getJeu()
    {
        return $this->jeu;
    }
}
