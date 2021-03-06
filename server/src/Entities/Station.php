<?php


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping AS ORM;


/**
 * @ORM\Entity
 * @Entity @Table(name="stations")
 */
class Station
{
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var string
     */
    protected $id;


    /** 
     * @Column(type="datetime", name="creation_date") 
     */
    protected $creationDate;


    /** 
     * @Column(type="float", name="latitude") 
     */
    protected $latitude;

    /** 
     * @Column(type="float", name="longitude") 
     */
    protected $longitude;


    /**
     * @Column(type="string")
     */
    protected $name;

    /**
     * @Column(type="string", nullable=true)
     */
    protected $description;

    /**
     * @Column(type="string")
     */
    protected $data_url;

    /**
     * @Column(type="string")
     */
    protected $type;

    /**
     * @OneToOne(targetEntity="Measure")
     * @JoinColumn(name="last_measure_id", referencedColumnName="id")
     */
    private $lastMeasure;


    /**
     * @OneToMany(targetEntity="Measure", mappedBy="station")
     */
    protected $measures;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->measures = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return Station
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime 
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return Station
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     * @return Station
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Station
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Station
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set data_url
     *
     * @param string $dataUrl
     * @return Station
     */
    public function setDataUrl($dataUrl)
    {
        $this->data_url = $dataUrl;

        return $this;
    }

    /**
     * Get data_url
     *
     * @return string 
     */
    public function getDataUrl()
    {
        return $this->data_url;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Station
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Add measures
     *
     * @param \Measure $measures
     * @return Station
     */
    public function addMeasure(\Measure $measures)
    {
        $this->measures[] = $measures;

        return $this;
    }

    /**
     * Remove measures
     *
     * @param \Measure $measures
     */
    public function removeMeasure(\Measure $measures)
    {
        $this->measures->removeElement($measures);
    }

    /**
     * Get measures
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMeasures()
    {
        return $this->measures;
    }

    /**
     * Set lastMeasure
     *
     * @param \Measure $lastMeasure
     * @return Station
     */
    public function setLastMeasure(\Measure $lastMeasure = null)
    {
        $this->lastMeasure = $lastMeasure;

        return $this;
    }

    /**
     * Get lastMeasure
     *
     * @return \Measure 
     */
    public function getLastMeasure()
    {
        return $this->lastMeasure;
    }
}
