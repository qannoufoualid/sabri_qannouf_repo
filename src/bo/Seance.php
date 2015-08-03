<?php
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="seances")
 */
class Seance {

	/**
     * @Id @GeneratedValue @Column(type="integer")
     * @var string
     */
	private $id;

	/**
     * @Column(type="datetime")
     */
	private $dateDebut;

	/**
     * @Column(type="datetime")
     */
	private $dateFin;

	/**
     * @Column(type="string")
     */
	private $typeSceance;
	
	/**
     * @ManyToOne(targetEntity="Salle", inversedBy="seances")
     */
	private $salle;

	/**
     * @ManyToOne(targetEntity="Element", inversedBy="seances")
     */
	private $element;

	/**
     * @ManyToOne(targetEntity="Groupe", inversedBy="seances")
     */
	private $groupe;

	/**
     * @ManyToOne(targetEntity="Prof", inversedBy="seances")
     */
	private $prof;
	

	public function getId() {
		return $id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getDateDebut() {
		return $dateDebut;
	}

	public function setDateDebut($dateDebut) {
		$this->dateDebut = $dateDebut;
	}

	public function getDateFin() {
		return $dateFin;
	}

	public function setDateFin($dateFin) {
		$this->dateFin = $dateFin;
	}

	public function getSalle() {
		return $salle;
	}

	public function setSalle($salle) {
		$this->salle = $salle;
	}

	public function getElement() {
		return $element;
	}

	public function setElement($element) {
		$this->element = $element;
	}

	public function getGroupe() {
		return $groupe;
	}

	public function setGroupe($groupe) {
		$this->groupe = $groupe;
	}

	public function getProf() {
		return $prof;
	}

	public function setProf($prof) {
		$this->prof = $prof;
	}

	public function getTypeSceance() {
		return $typeSceance;
	}

	public function setTypeSceance($typeSceance) {
		$this->typeSceance = $typeSceance;
	}
	
	
	
}



?>