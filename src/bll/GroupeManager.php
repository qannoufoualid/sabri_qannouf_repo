<?php

class GroupeManager{

	private $dao;

	public function __construct()
    {
        $this->dao = new GroupeDaoImpl();
    }

    public function save($o){

    	$id = NULL;
    	try{
			$id = $this->dao->save($o);
    	}catch(Exception $e){
    		throw $e;
    	}
    	return $id;
    }

    public function delete($o){
    	try{
		    $id = $this->dao->delete($o);
		}catch(Exception $e){
			throw $e;
		}
    }

    public function getAll() {
		$objects = NULL;
		try {
			$id = $this->dao->getAll();
		} catch (Exception $e) {
			throw $e;
		}
		return $objects;
	}

	public function update($o) {
		
		try {
			$id = $this->dao->update($o);
		} catch (Exception $e) {
			throw $e;
		}
	}

	public function findById($id) {
		$obj = NULL;
		try {
			//ceci retourne nulle si aucun objet trouvé
			$obj = $this->dao->findById($id);
		} catch (Exception $e) {
			throw $e;
		}
		return $obj;
	}
}

?>