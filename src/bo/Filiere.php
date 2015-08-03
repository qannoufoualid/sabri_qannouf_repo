<?php
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="filieres")
 */
class Filiere {

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
     * @OneToMany(targetEntity="Niveau", mappedBy="niveau")
     * @var Niveau[]
     */
	protected $niveaux;

	
	public function __construct()
    {
        $this->niveaux = new ArrayCollection();
    }


	/**
	 * Getters & setters
	 */
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

	public function getNiveaux() {
		return $niveaux;
	}

	public function setNiveaux($niveaux) {
		$this->niveaux = $niveaux;
	}

}
?>