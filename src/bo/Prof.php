<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="profs")
 */
class Prof {

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
     * @Column(type="string")
     * @var string
     */
	protected $email;

	/**
     * @Column(type="string")
     * @var string
     */
	protected $tele;

	/**
     * @Column(type="string")
     * @var string
     */
	protected $prenom;

	/**
     * @Column(type="string")
     * @var string
     */
	protected $sexe;
	
	/**
     * @ManyToOne(targetEntity="Departement", inversedBy="profs")
     */
	protected $departement;

	/**
     * @OneToMany(targetEntity="Element", mappedBy="prof")
     * @var Element[]
     */
	protected $elements;

	/**
     * @OneToMany(targetEntity="Seance", mappedBy="prof")
     * @var Seance[]
     */
	protected $sceances;
	
	
	
	public function __construct()
    {
        $this->elements = new ArrayCollection();
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

	public function getEmail() {
		return $email;
	}

	public function setEmail($email) {
		$this->email = $email;
	}

	public function getTele() {
		return $tele;
	}

	public function setTele($tele) {
		$this->tele = $tele;
	}

	public function getPrenom() {
		return $prenom;
	}

	public function setPrenom($prenom) {
		$this->prenom = $prenom;
	}

	public function getSexe() {
		return $sexe;
	}

	public function setSexe($sexe) {
		$this->sexe = $sexe;
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

	public function getSceances() {
		return $sceances;
	}

	public function setSceances($sceances) {
		$this->sceances = $sceances;
	}

	
	
}

?>