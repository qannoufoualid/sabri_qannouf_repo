<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="salles")
 */
class Salle {
	/**
     * @Id @GeneratedValue @Column(type="integer")
     * @var string
     */
	protected $id;

	/**
     *@Column(type="string")
     * @var string
     */
	protected $alias;

	/**
     *@Column(type="string")
     * @var string
     */
	protected $typeSalle;

	/**
     *@Column(type="integer")
     * @var string
     */
	protected $nombreDePlace;
	
	/**
     * @OneToMany(targetEntity="Seance", mappedBy="salle")
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

	public function getAlias() {
		return $alias;
	}

	public function setAlias($alias) {
		$this->alias = $alias;
	}

	public function getTypeSalle() {
		return $typeSalle;
	}

	public function setTypeSalle($typeSalle) {
		$this->typeSalle = $typeSalle;
	}

	public function getNombreDePlace() {
		return $nombreDePlace;
	}

	public function setNombreDePlace($nombreDePlace) {
		$nombreDePlace = $nombreDePlace;
	}

	public function getSceances() {
		return $sceances;
	}

	public function setSceances($sceances) {
		$this->sceances = $sceances;
	}
	
}
?>