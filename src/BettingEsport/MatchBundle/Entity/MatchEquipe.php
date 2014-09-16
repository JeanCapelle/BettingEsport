<?php

namespace BettingEsport\MatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MatchEquipe
 */
class MatchEquipe
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idEquipe1;

    /**
     * @var integer
     */
    private $idEquipe2;

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
     * @var string
     */
    private $lienStream;

    /**
     * @var integer
     */
    private $coteEquipe1;

    /**
     * @var integer
     */
    private $coteEquipe2;

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
     * Set idEquipe1
     *
     * @param integer $idEquipe1
     * @return MatchEquipe
     */
    public function setIdEquipe1($idEquipe1)
    {
        $this->idEquipe1 = $idEquipe1;

        return $this;
    }

    /**
     * Get idEquipe1
     *
     * @return integer 
     */
    public function getIdEquipe1()
    {
        return $this->idEquipe1;
    }

    /**
     * Set idEquipe2
     *
     * @param integer $idEquipe2
     * @return MatchEquipe
     */
    public function setIdEquipe2($idEquipe2)
    {
        $this->idEquipe2 = $idEquipe2;

        return $this;
    }

    /**
     * Get idEquipe2
     *
     * @return integer 
     */
    public function getIdEquipe2()
    {
        return $this->idEquipe2;
    }

    /**
     * Set dateHeureDebut
     *
     * @param \DateTime $dateHeureDebut
     * @return MatchEquipe
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
     * @return MatchEquipe
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
     * @return MatchEquipe
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
     * Set lienStream
     *
     * @param string $lienStream
     * @return MatchEquipe
     */
    public function setLienStream($lienStream)
    {
        $this->lienStream = $lienStream;

        return $this;
    }

    /**
     * Get lienStream
     *
     * @return string 
     */
    public function getLienStream()
    {
        return $this->lienStream;
    }

    /**
     * Set coteEquipe1
     *
     * @param integer $coteEquipe1
     * @return MatchEquipe
     */
    public function setCoteEquipe1($coteEquipe1)
    {
        $this->coteEquipe1 = $coteEquipe1;

        return $this;
    }

    /**
     * Get coteEquipe1
     *
     * @return integer 
     */
    public function getCoteEquipe1()
    {
        return $this->coteEquipe1;
    }

    /**
     * Set coteEquipe2
     *
     * @param integer $coteEquipe2
     * @return MatchEquipe
     */
    public function setCoteEquipe2($coteEquipe2)
    {
        $this->coteEquipe2 = $coteEquipe2;

        return $this;
    }

    /**
     * Get coteEquipe2
     *
     * @return integer 
     */
    public function getCoteEquipe2()
    {
        return $this->coteEquipe2;
    }

    /**
     * Set jeu
     *
     * @param string $jeu
     * @return MatchEquipe
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
