<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="modules")
 */

class Module {

	/**
     * @Id @GeneratedValue @Column(type="integer")
     * @var string
     */
	protected $id;

	/**
     * @Column(type="string")
     * @var string
     */
	protected $nom;

	/**
     * @Column(type="integer")
     * @var string
     */
	protected $semestre;
	
	/**
     * @ManyToOne(targetEntity="Departement", inversedBy="modules")
     */
	protected $departement;
	protected $elements;

	/**
     * @ManyToOne(targetEntity="Niveau", inversedBy="modules")
     */
	protected $niveau;
	
	
	public function __construct()
    {
        $this->elements = new ArrayCollection();
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

	public function getSemestre() {
		return $semestre;
	}

	public function setSemestre($semestre) {
		$this->semestre = $semestre;
	}

	public function getDepartement() {
		return $departement;
	}

	public function setDepartement($departement) {
		$this->departement = $departement;
	}

	public function getElements() {
		return $elements;
	}

	public function setElements($elements) {
		$this->elements = $elements;
	}

	public function getNiveau() {
		return $niveau;
	}

	public function setNiveau($niveau) {
		$this->niveau = $niveau;
	}
	
}

?>