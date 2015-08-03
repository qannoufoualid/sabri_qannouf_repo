<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="groupes")
 */
class Groupe {

	/**
     * @Id @GeneratedValue @Column(type="integer")
     * @var string
     */
	protected $id;

	/**
     *@Column(type="string")
     * @var string
     */
	protected $nom;

	/**
     *@Column(type="integer")
     * @var string
     */
	protected $nombreEtudiant;
	

	/**
     * @ManyToOne(targetEntity="Niveau", inversedBy="groupes")
     */
	protected $niveau;

	/**
     * @OneToMany(targetEntity="Seance", mappedBy="groupe")
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

	public function getNom() {
		return $nom;
	}

	public function setNom($nom) {
		$this->nom = $nom;
	}

	public function getNiveau() {
		return $niveau;
	}

	public function setNiveau($niveau) {
		$this->niveau = $niveau;
	}

	public function getSceances() {
		return $sceances;
	}

	public function setSceances($sceances) {
		$this->sceances = $sceances;
	}


	public function getNombreEtudiant() {
		return $nombreEtudiant;
	}


	public function setNombreEtudiant($nombreEtudiant) {
		$this->nombreEtudiant = $nombreEtudiant;
	}
	
	
}


?>