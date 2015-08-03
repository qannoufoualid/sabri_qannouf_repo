<?php
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="elements")
 */
class Element {

	/**
     * @Id @GeneratedValue @Column(type="integer")
     * @var string
     */
	protected $id;

	/**
     *@Column(type="string")
     * @var string
     */	
	protected $name;

	/**
     *@Column(type="integer")
     * @var string
     */
	protected $volumeHoraire;
	
	/**
     * @ManyToOne(targetEntity="Module", inversedBy="elements")
     */
	protected $module;

	/**
     * @ManyToOne(targetEntity="Prof", inversedBy="elements")
     */
	protected $prof;

	/**
     * @OneToMany(targetEntity="Seance", mappedBy="element")
     * @var Seance[]
     */
	protected $sceances;
	
	
	public function __construct()
    {
        $this->sceances = new ArrayCollection();
    }

	
	public function getId() {
		return $id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getName() {
		return $name;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function getModule() {
		return $module;
	}

	public function setModule($module) {
		$this->module = $module;
	}

	public function getProf() {
		return $prof;
	}

	public function setProf($prof) {
		$this->prof = $prof;
	}

	public function getSceances() {
		return $sceances;
	}

	public function setSceances($sceances) {
		$this->sceances = $sceances;
	}

	public function getVolumeHoraire() {
		return $volumeHoraire;
	}

	public function setVolumeHoraire($volumeHoraire) {
		$this->volumeHoraire = $volumeHoraire;
	}
	
	
}



?>