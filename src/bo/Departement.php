<?php
namespace bo;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="departements")
 */
class Departement {

	/**
     * @Id @GeneratedValue @Column(type="integer")
     * @var string
     */
	protected $id;
	/**
     * @Column(type="string")
     * @var string
     */
	protected $name;

	 /**
     * @OneToMany(targetEntity="Module", mappedBy="departement")
     * @var Module[]
     */
	protected $modules;

	/**
     * @OneToMany(targetEntity="Prof", mappedBy="departement")
     * @var Prof[]
     */
	protected $profs;

	
	 public function __construct()
    {
        $this->modules = new ArrayCollection();
        $this->personnels = new ArrayCollection();
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

	public function getModules() {
		return $modules;
	}

	public function setModules($modules) {
		$this->modules = $modules;
	}

	public function getProfs() {
		return $profs;
	}

	public function setProfs($personnels) {
		$this->profs = $profs;
	}
	
	
}

?>