<?php


use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="niveaux")
 */
class Niveau {

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
     * @OneToMany(targetEntity="Groupe", mappedBy="niveau")
     * @var Groupe[]
     */
	protected $groupes;

	/**
     * @ManyToOne(targetEntity="Filiere", inversedBy="niveaux")
     */
	protected $filiere;

	/**
     * @OneToMany(targetEntity="Module", mappedBy="niveau")
     * @var Module[]
     */
	protected $modules;
	
	public function __construct()
    {
        $this->groupes = new ArrayCollection();
        $this->modules = new ArrayCollection();
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

	public function getGroupes() {
		return $groupes;
	}

	public function setGroupes($groupes) {
		$this->groupes = $groupes;
	}

	public function getFiliere() {
		return $filiere;
	}

	public function setFiliere($filiere) {
		$this->filiere = $filiere;
	}

	public function getModules() {
		return $modules;
	}

	public function setModules($modules) {
		$this->modules = $modules;
	}
	
}


?>