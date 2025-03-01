<?php

namespace ConsultationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cons
 *
 * @ORM\Table(name="cons")
 * @ORM\Entity(repositoryClass="ConsultationBundle\Repository\ConsRepository")
 */
class Cons
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

  /**
    * @ORM\ManyToOne(targetEntity="Patient")
    * @ORM\JoinColumn(nullable=false)	
    */
    private $patient;

  /**
    * @ORM\ManyToOne(targetEntity="Docteur")
    * @ORM\JoinColumn(nullable=false)	
    */
    private $doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure", type="time")
     */
    private $heure;

    /**
     * @var string
     *
     * @ORM\Column(name="remarques", type="string", length=255, nullable=true)
     */
    private $remarques;

    /**
     * @var bool
     *
     * @ORM\Column(name="venu", type="boolean", nullable=true)
     */
    private $venu;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set patient
     *
     * @param integer $patient
     *
     * @return Cons
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;

        return $this;
    }

    /**
     * Get patient
     *
     * @return int
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Set doc
     *
     * @param integer $doc
     *
     * @return Cons
     */
    public function setDoc($doc)
    {
        $this->doc = $doc;

        return $this;
    }

    /**
     * Get doc
     *
     * @return int
     */
    public function getDoc()
    {
        return $this->doc;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Cons
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set heure
     *
     * @param \DateTime $heure
     *
     * @return Cons
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get heure
     *
     * @return \DateTime
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * Set remarques
     *
     * @param string $remarques
     *
     * @return Cons
     */
    public function setRemarques($remarques)
    {
        $this->remarques = $remarques;

        return $this;
    }

    /**
     * Get remarques
     *
     * @return string
     */
    public function getRemarques()
    {
        return $this->remarques;
    }

    /**
     * Set venu
     *
     * @param boolean $venu
     *
     * @return Cons
     */
    public function setVenu($venu)
    {
        $this->venu = $venu;

        return $this;
    }

    /**
     * Get venu
     *
     * @return bool
     */
    public function getVenu()
    {
        return $this->venu;
    }
}
